<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/semantic.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/c3.min.css" >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script type="text/javascript" src="js/semantic.min.js"></script>
<script type="text/javascript" src="js/d3.v3.min.js"></script>  
  <script type="text/javascript" src="js/c3.min.js"></script>
</head>
<body>

  <div class="container mt-5">
    <form style="display:flex;" action="" method="post" class="mb-3">
      <input class="btn-style" id="confirm" type="submit" name="submit" value="Confirm">
      <select name="States[]"  class="ui fluid search dropdown" multiple="">
        <option value="">State</option>
        <option value="AFG">Afghanistan</option>
        <option value="ALB">Albania</option>
        <option value="DZA">Algeria</option>
        <option value="AGO">Angola</option>
        <option value="ATG">Antigua and Barbuda</option>
        <option value="ARG">Argentina</option>
        <option value="AUS">Australia</option>
        <option value="AUT">Austria</option>
        <option value="AZE">Azerbaijan</option>
        <option value="BGD">Bangladesh</option>
        <option value="BLR">Belarus</option>
        <option value="BEL">Belgium</option>
        <option value="BLZ">Belize</option>
        <option value="BEN">Benin</option>
        <option value="BMU">Bermuda</option>
        <option value="BTN">Bhutan</option>
        <option value="BOL">Bolivia</option>
        <option value="BIH">Bosnia and Herzegovina</option>
        <option value="BWA">Botswana</option>
        <option value="BRA">Brazil</option>
        <option value="BGR">Bulgaria</option>
        <option value="BFA">Burkina Faso</option>
        <option value="BDI">Burundi</option>
        <option value="KHM">Cambodia</option>
        <option value="CMR">Cameroon</option>
        <option value="CAN">Canada</option>
        <option value="TCD">Chad</option>
        <option value="CHL">Chile</option>
        <option value="CHN">China</option>
        <option value="COL">Colombia</option>
        <option value="COM">Comoros</option>
        <option value="CRI">Costa Rica</option>
        <option value="CIV">Cote d'Ivoire</option>
        <option value="HRV">Croatia</option>
        <option value="CUB">Cuba</option>
        <option value="CYP">Cyprus</option>
        <option value="CZE">Czech Republic</option>
        <option value="DNK">Denmark</option>
        <option value="DMA">Dominica</option>
        <option value="DOM">Dominican Republic</option>
        <option value="ECU">Ecuador</option>
        <option value="SLV">El Salvador</option>
        <option value="EST">Estonia</option>
        <option value="ETH">Ethiopia</option>
        <option value="FJI">Fiji</option>
        <option value="FIN">Finland</option>
        <option value="FRA">France</option>
        <option value="GAB">Gabon</option>
        <option value="GEO">Georgia</option>
        <option value="DEU">Germany</option>
        <option value="GHA">Ghana</option>
        <option value="GRC">Greece</option>
        <option value="GRL">Greenland</option>
        <option value="GRD">Grenada</option>
        <option value="GTM">Guatemala</option>
        <option value="GIN">Guinea</option>
        <option value="GNB">Guinea-Bissau</option>
        <option value="GUY">Guyana</option>
        <option value="HTI">Haiti</option>
        <option value="HND">Honduras</option>
        <option value="HUN">Hungary</option>
        <option value="ISL">Iceland</option>
        <option value="IND">India</option>
        <option value="IDN">Indonesia</option>
        <option value="IRQ">Iraq</option>
        <option value="IRL">Ireland</option>
        <option value="ISR">Israel</option>
        <option value="ITA">Italy</option>
        <option value="JAM">Jamaica</option>
        <option value="JPN">Japan</option>
        <option value="JOR">Jordan</option>
        <option value="KAZ">Kazakhstan</option>
        <option value="KEN">Kenya</option>
        <option value="KIR">Kiribati</option>
        <option value="KWT">Kuwait</option>
        <option value="LVA">Latvia</option>
        <option value="LBN">Lebanon</option>
        <option value="LSO">Lesotho</option>
        <option value="LBR">Liberia</option>
        <option value="LTU">Lithuania</option>
        <option value="LUX">Luxembourg</option>
        <option value="MDG">Madagascar</option>
        <option value="MWI">Malawi</option>
        <option value="MYS">Malaysia</option>
        <option value="MDV">Maldives</option>
        <option value="MLI">Mali</option>
        <option value="MLT">Malta</option>
        <option value="MHL">Marshall Islands</option>
        <option value="MRT">Mauritania</option>
        <option value="MUS">Mauritius</option>
        <option value="MEX">Mexico</option>
        <option value="MDA">Moldova</option>
        <option value="MNG">Mongolia</option>
        <option value="MNE">Montenegro</option>
        <option value="MAR">Morocco</option>
        <option value="MOZ">Mozambique</option>
        <option value="MMR">Myanmar</option>
        <option value="NAM">Namibia</option>
        <option value="NPL">Nepal</option>
        <option value="NLD">Netherlands</option>
        <option value="NZL">New Zealand</option>
        <option value="NIC">Nicaragua</option>
        <option value="NER">Niger</option>
        <option value="NGA">Nigeria</option>
        <option value="NOR">Norway</option>
        <option value="OMN">Oman</option>
        <option value="PAK">Pakistan</option>
        <option value="PLW">Palau</option>
        <option value="PAN">Panama</option>
        <option value="PNG">Papua New Guinea</option>
        <option value="PRY">Paraguay</option>
        <option value="PER">Peru</option>
        <option value="PHL">Philippines</option>
        <option value="POL">Poland</option>
        <option value="PRT">Portugal</option>
        <option value="QAT">Qatar</option>
        <option value="ROU">Romania</option>
        <option value="RWA">Rwanda</option>
        <option value="WSM">Samoa</option>
        <option value="STP">Sao Tome and Principe</option>
        <option value="SAU">Saudi Arabia</option>
        <option value="SEN">Senegal</option>
        <option value="SRB">Serbia</option>
        <option value="SYC">Seychelles</option>
        <option value="SLE">Sierra Leone</option>
        <option value="SGP">Singapore</option>
        <option value="SVN">Slovenia</option>
        <option value="ZAF">South Africa</option>
        <option value="ESP">Spain</option>
        <option value="LKA">Sri Lanka</option>
        <option value="SDN">Sudan</option>
        <option value="SUR">Suriname</option>
        <option value="SWE">Sweden</option>
        <option value="CHE">Switzerland</option>
        <option value="TJK">Tajikistan</option>
        <option value="TZA">Tanzania</option>
        <option value="THA">Thailand</option>
        <option value="TGO">Togo</option>
        <option value="TON">Tonga</option>
        <option value="TTO">Trinidad and Tobago</option>
        <option value="TUN">Tunisia</option>
        <option value="TUR">Turkey</option>
        <option value="TKM">Turkmenistan</option>
        <option value="TCA">Turks and Caicos Islands</option>
        <option value="TUV">Tuvalu</option>
        <option value="UGA">Uganda</option>
        <option value="UKR">Ukraine</option>
        <option value="ARE">United Arab Emirates</option>
        <option value="GBR">United Kingdom</option>
        <option value="USA">United States</option>
        <option value="URY">Uruguay</option>
        <option value="UZB">Uzbekistan</option>
        <option value="VUT">Vanuatu</option>
        <option value="VNM">Vietnam</option>
        <option value="ZMB">Zambia</option>
        <option value="ZWE">Zimbabwe</option>
      </select>
    </form>
    <button class="btn-style" id="draw">Draw</button>
    <button class="btn-style" id="show-line" >Line</button>
    <button class="btn-style" id="show-pie" >Pie</button>
    <button class="btn-style" id="show-bubble" >Bubble</button>
    <button class="btn-style" id="show-block" >Block</button>
  <div id="line-box">
        <div>  
          <div id="graph"></div>
          <div class="gauge-cont">
            <div  class="graph-box">
              <div id="graph0"></div>
            </div>
            <div class="graph-box">
              <div id="graph1"></div>
            </div>
            <div  class="graph-box">
              <div id="graph2"></div>
            </div>
            <div class="graph-box">
              <div id="graph3"></div>
            </div>
            <div class="graph-box">
              <div id="graph4"></div>
            </div>
          </div>
        </div>
    </div>
    <div id="bubble-box" style="display:none">
        <div id="bubble-upper">
            <canvas id="bubbleChart1" widht="100px" height="100px"></canvas>
        </div>
        <div id="bubble-lower">
            <div id="bubble-chart-lower-1">
                <canvas id="bubbleChart2"></canvas>
            </div>
            <div id="bubble-chart-lower-2">    
                <canvas id="bubbleChart3"></canvas>
            </div>
        </div>
    </div>

    <div id="block-box" style="display:none">
        <div id="blockChart"></div>
    </div>

        <?php
            $num=0;
            $states = array();

            include('db_connection.php');
            $pdo = OpenCon();

            if(isset($_POST['submit'])){
            if(!empty($_POST['States'])) {
                foreach($_POST['States'] as $selected){
                    $sql = "SELECT DISTINCT Entity FROM `TABLE` WHERE Code='$selected'";
                    foreach ($pdo->query($sql) as $row) {
                        $num=$num+1;
                        $states[]=$row["Entity"];
                    }
                }          
            } 
            else {
                echo 'Please select the value.';
            }
        }
      ?>

    <script type="text/javascript">
    var data=[]; 
    var transform =true;
    var date =["1.3","2.3","3.3"];
    var data1 =["data1",1,2,3];
    var data2 =["data2",4,5,6];
    var years =["2000","2001","2002","2003","2004","2005","2006","2007","2008","2009","2010","2011","2012","2013","2014","2015"];
    var color =['rgb(255, 99, 132)','rgb(168, 119, 50 )','rgb(132, 99, 255)','rgb( 68, 50, 107)','rgb(26, 94, 78)','rgb( 5, 46, 36)','rgb(145, 168, 50)','rgb( 16, 19, 50)','rgb(128, 149, 150)','rgb( 128, 49, 55)','rgb( 191, 217, 141)','rgb(224, 83, 137 )','rgb( 224, 216, 195)']

    function drawGraph(data){
        chart = c3.generate({           
        bindto: '#graph',
        data: {
            columns: data
          },
        axis: {
            x: {
                type: 'category',
                categories: years
            }
          }
      });  
    }    

    function drawBlock(dataset){
        var blockChart = c3.generate({
            bindto: '#blockChart',
            data: {
                columns: dataset,
                type: 'bar'
            },
            axis: {
                x: {
                    type: 'category',
                    categories: ["Average CO2 Emission (tonnes)","GDP","Total Population","%GDP Agriculture"]
                }
            },
            bar: {
                width: {
                    ratio: 0.5 
                }
            }
        });
    }

 


    function drawDonut(data,direc,state){
        data = Math.floor(data);
        var other=100-data;
        var chart = c3.generate({
            bindto: direc,
            data: {
                columns: [
                    ['Agriculture', data],
                    ['Other', other],
                ],
                type : 'donut',
            },
            donut: {
                title: "Averg. %GDP of "+state
            }
        });
    }

    function drawBubble(dataset,xLabel,yLabel,direc,width,height){
        const data ={
            datasets: dataset
        };
        const config = {
            type: 'bubble',
            data: data,
            options: {
                maintainAspectRatio: false,
                scales: {
                    x: {
                        display: true,
                        title: {
                            display: true,
                            text: xLabel
                        }
                    },
                    y: {
                        display: true,
                        title: {
                            display: true,
                            text: yLabel
                        }
                    }

                }
            }
        };
        var myChart = new Chart(
            document.getElementById(direc),
            config
        ); 

        myChart.canvas.parentNode.style.height = height;
        myChart.canvas.parentNode.style.width = width;
    
    }

    function arrayToPerc(arr){
        var arrPerc=[];
        var temp = arr.reduce(function(a, b) {
                                return Math.max(parseInt(a), parseInt(b));
                            });
        for(i=0;i<arr.length;i++){
            arrPerc[i]=Math.floor(((parseInt(arr[i]))/temp)*100);
        }
        return arrPerc;
    }

    function fillDataSet(arr,x,y,r){
        var dataset=[];
        for(k=0;k<num;k++){
            dataset[k]={
                label: arr[0][k],
                data: [{
                    x: average(arr[x][k]),
                    y: average(arr[y][k]),
                    r: average(arr[r][k])
                }],
                backgroundColor: color[k]
            }
        }
        return dataset;
    }

    function fillDataSetYear(arr,y,r){
        var dataset=[];
        for(k=0;k<num;k++){
            let temp=[];
            for(i=0;i<years.length;i++){
                temp[i]={
                    x: years[i],
                    y: arr[y][k][i],
                    r: arr[r][k][i]
                }
            }
            dataset[k]={
                label: arr[0][k],
                data: [temp],
                backgroundColor: color[k]
            }  
        }
        return dataset;
    }

    function average(arr){
        var sum=0;
        var add=0;
        for(i=0;i<arr.length;i++){
            if(arr[i]==""){
                add=0;
            } else{
                add=parseInt(arr[i]);
            }
            sum+=add;
        }
        return (sum/arr.length);
    }

    function splitToChunks(array, parts) {
        let result = [];
        for (let i = parts; i > 0; i--) {
            result.push(array.splice(0, Math.ceil(array.length / i)));
        }
        return result;
    }

    function splitN(arr,n){
        s=Math.floor(arr.length/n);
        var result=[];
        for(l=1;l<=n;l++){
            result[l]=[];
        }
        for(i=0;i<s;i++){
            for(j=1;j<=n;j++){
                result[j].push(arr[(i*n)+j-1]);
            }
        }
        return result;
    }

    var tempArr=[];
    var arr=[]; //0->Namen 1->CO2 2->GDP 3->PopGrowth 4->Agriculture 5->PopTotal
    var num=0;

    $( "#draw" ).click(function() {
        transform=true;
        num=<?php echo $num; ?>;

        

        tempArr=[
            <?php
                for($i =0; $i<$num;$i++){
                    $sql = "SELECT PopulationGrowth,GDP,AnnualCO2Emissions,Agriculture,PopulationTotal FROM `TABLE` WHERE Entity='$states[$i]' ";
                    foreach ($pdo->query($sql) as $row) {
                        $value = $row["AnnualCO2Emissions"];
                        echo "'$value',";
                        $value = $row["GDP"];
                        echo "'$value',";
                        $value = $row["PopulationGrowth"];
                        echo "'$value',";
                        $value = $row["Agriculture"];
                        echo "'$value',";
                        $value = $row["PopulationTotal"];
                        echo "'$value',";
                    }
                }
            ?>
        ]


        tempArr=splitN(tempArr,5);
        arr[0] =[
            <?php 
                foreach ($states as $value) {
                    echo  "'$value',";
                }
            ?>
        ];

        for(i=1;i<=5;i++){
            arr[i]=splitToChunks(tempArr[i],num);
        }

        
        for(i=0;i<num;i++){
            data[i]=[];
        }
        for(i=0;i<num;i++){
            data[i][0]=arr[0][i]+" CO2";
            for(j=1;j<=16;j++){          //HARDCODE JAHR
                data[i][j]=arr[1][i][j-1];
            }
        }
    
        drawGraph(data);
        var numDo = Math.min(num,5);
        wid=Math.floor(90/numDo);
        wid=''+wid;
        $(".graph-box").css("width",wid+"%");
        for(z=0;z<numDo;z++){
            var str = '';
            str = ''+z;
            drawDonut(average(arr[4][z]),("#graph"+str),arr[0][z]);
        }


        bubbleWidth=$("#line-box").css("width");
        bubbleHeight=$("#line-box").css("height");
        fullWidth=parseInt(bubbleWidth);
        halfWidth=parseInt(bubbleWidth)*0.5;
        fullHeight=parseInt(bubbleHeight)*0.7;
        halfHeight=parseInt(bubbleHeight)*0.5;
        fullWidth=''+fullWidth+'px';
        halfWidth=''+halfWidth+'px';
        fullHeight=''+fullHeight+'px';;
        halfHeight=''+halfHeight+'px';
        drawBubble(fillDataSet(arr,1,5,4),"Average CO2 Emission (tonnes)","Total Population",'bubbleChart1',fullWidth,fullHeight);
        drawBubble(fillDataSet(arr,1,2,4),"Average CO2 Emission (tonnes)","GDP",'bubbleChart2',halfWidth,halfHeight);
        drawBubble(fillDataSet(arr,1,5,4),"Average CO2 Emission (tonnes)","Total Population",'bubbleChart3',halfWidth,halfHeight);


        var blockSet=[];

        var tempPercCo2=[];
        var tempPercAgr=[];
        var tempPercPop=[];
        var tempPercGdp=[];
        for(t=0;t<num;t++){
            tempPercCo2[t]=average(arr[1][t]);
            tempPercGdp[t]=average(arr[2][t]);
            tempPercPop[t]=average(arr[5][t]);
            tempPercAgr[t]=average(arr[4][t]);
        }

        tempPercCo2=arrayToPerc(tempPercCo2);
        tempPercGdp=arrayToPerc(tempPercGdp);
        tempPercPop=arrayToPerc(tempPercPop);
        tempPercAgr=arrayToPerc(tempPercAgr);
        for(b=0;b<num;b++){
            blockSet[b]=[];
            blockSet[b][0]=arr[0][b];
            blockSet[b][1]=tempPercCo2[b];
            blockSet[b][2]=tempPercGdp[b];
            blockSet[b][3]=tempPercPop[b];
            blockSet[b][4]=tempPercAgr[b];
        }

        drawBlock(blockSet);
    });

    $( "#show-line" ).click(function() {
        chart.transform('line');
        $("#line-box").css("display","block");
        $("#bubble-box").css("display","none");
        $("#block-box").css("display","none");
    });

    $( "#show-pie" ).click(function() {
        chart.transform('donut');
        $("#line-box").css("display","block");
        $("#bubble-box").css("display","none");
        $("#block-box").css("display","none");
    });

    $( "#show-bubble" ).click(function() {
        $("#line-box").css("display","none");
        $("#bubble-box").css("display","block");
        $("#block-box").css("display","none");
    });

    $( "#show-block" ).click(function() {
        $("#line-box").css("display","none");
        $("#bubble-box").css("display","none");
        $("#block-box").css("display","block");
    });
        
    </script>  

  <script type="text/javascript">
    $('.ui.dropdown').dropdown();
  </script>

</body>
</html>