import pandas as pd 
import numpy as np 
import seaborn as sns

def get_df_entries_with_nan(df):
    df_null = df.isnull()
    row_has_NaN = df_null.any(axis=1)
    row_has_NaN = df[row_has_NaN] 
    return (row_has_NaN)

def get_amount_of_repetition(row_has_NaN, unique_lands):
    should_be_removed = []
    for i in unique_lands:
        print(i)
        repetition = len(row_has_NaN[row_has_NaN["Code"] == i].sum(axis=1).index)
        # if one country has more than 5 NaN it should be removed - could be another treshold
        if repetition >= 5:
            print(i)
            should_be_removed.append(i)
        
    return should_be_removed

#input files
co2_em = "./co2_emission.csv"
gdp = "./gdp.csv"
pop_growth = "./population_growth.csv"
pop_total ="./population_total.csv"
agriculture = "./population_Data" # https://databank.worldbank.org/indicator/NE.EXP.GNFS.ZS/1ff4a498/Popular-Indicators

df_co2_em = pd.read_csv(co2_em)
df_gdp = pd.read_csv(gdp)
df_pop_growth = pd.read_csv(pop_growth)
df_pop_total = pd.read_csv(pop_total)
df_agriculture = pd.read_csv(agriculture)
df_agriculture = df_agriculture[df_agriculture["Series Name"] == "Agriculture, forestry, and fishing, value added (% of GDP)"]
df_agriculture.reset_index(drop=True)
df_agriculture = df_agriculture.replace("..", np.NaN) 

# data from year 2000 - 2015
df_co2_em = df_co2_em.loc[df_co2_em["Year"] > 1999]
df_co2_em = df_co2_em.loc[df_co2_em["Year"] < 2016]
# remove all coloums with no Country Code
df_co2_em = df_co2_em.loc[df_co2_em["Code"].notnull()]

# data from year 2000 - 2015
df_pop_total = df_pop_total.loc[df_pop_total["Year"] > 1999]
df_pop_total = df_pop_total.loc[df_pop_total["Year"] < 2016]

#check if there are 0 values in annual Co2 emissions
#df_co2_em[df_co2_em["Annual CO₂ emissions (tonnes )"] == 0]

# get the unique Codes
co_code = df_co2_em["Code"].unique()
gdp_code = df_gdp["Country Code"].unique()
pop_growth_code = df_pop_growth["Country Code"].unique()
agriculture_code = df_agriculture["Country Code"].unique()

# find the intersection of all the unique codes
intersection_ = set(co_code).intersection(set(gdp_code), set(pop_growth_code), set(agriculture_code))

# remove all Countrys that are not in intersection
df_co2_em = df_co2_em[df_co2_em["Code"].isin(intersection_)]

# change the index of df_co2_em so we can loop through it 
df_co2_em = df_co2_em.reset_index(drop=True)

#create new column for GDP, Population total, Population growth, Agriculture
df_co2_em["GDP"] = np.NaN
df_co2_em["Population Growth"] = np.NaN
df_co2_em["Agriculture"] = np.NaN
df_co2_em["Population total"] = np.NaN

# change the index of df_gdp to countrycode
df_gdp = df_gdp.set_index("Country Code")
df_pop_growth = df_pop_growth.set_index("Country Code")
df_agriculture = df_agriculture.set_index("Country Code")

#fill the dataframe with values 
for i in range(len(df_co2_em)):
    cc = df_co2_em.loc[i]["Code"] 
    cn = df_co2_em.loc[i]["Entity"]
    year = df_co2_em.loc[i]["Year"]
    df_co2_em.at[i, "GDP"] = df_gdp.loc[cc][str(year)]
    df_co2_em.at[i, "Population Growth"] = df_pop_growth.loc[cc][str(year)]
    df_co2_em.at[i, "Agriculture"] = df_agriculture.loc[cc][f"{year} [YR{year}]"]
    land_at_the_moment = df_pop_total[df_pop_total["Country Name"] == cn]
    try:
        df_co2_em.at[i, "Population total"] = land_at_the_moment[land_at_the_moment["Year"] == year]["Count"].item()
    except:
        print(i, land_at_the_moment, year)

sns.heatmap(df_co2_em.isnull())

df_nan = get_df_entries_with_nan(df_co2_em)
#df_nan["Code"].unique()



remove_country = get_amount_of_repetition(df_nan, df_nan["Code"].unique())

#create new df that exculde all the countrys from the remove_country array
df_test = df_co2_em.drop(df_co2_em[df_co2_em["Code"] == remove_country[0]].index)
for i in remove_country:
    df_test = df_test.drop(df_test[df_test["Code"] == i].index)

df_test
sns.heatmap(df_test.isnull())
get_df_entries_with_nan(df_test)

#save as csv
df_test.to_csv("DBS_project.csv")
