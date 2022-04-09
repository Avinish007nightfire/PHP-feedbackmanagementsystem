<?php session_start();
include("Mmenu.php");
include 'dbh.php';
if(!isset($_SESSION['id'])){
  header("location:MasterLogin.php");
}
?>

<?php
?>

<html>
  <head>
    <title>Reports</title>
    <link rel="stylesheet" type="text/css" href="Styles/innerstyle.css?version=1.0.1">
    <link rel="stylesheet" type="text/css" href="js/slick.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<!-- -------------------------------<<<<<<<< CHART 1  GENDER >>>>>>>>-------------------------------------------- -->
<?php
  $sql1=("SELECT COUNT(*) as total FROM feedback WHERE gender = 'Male'");
  $male = mysqli_query($conn,$sql1);
  $gender1 = mysqli_fetch_assoc($male);

  $sql2=("SELECT COUNT(*) as total FROM feedback  WHERE gender = 'Female'");
  $female = mysqli_query($conn,$sql2);
  $gender2 = mysqli_fetch_assoc($female);
?>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Gender', 					 'Percentage'],
          ['Male',   <?php echo $gender1['total']; ?>],
          ['Female', <?php echo $gender2['total']; ?>]
        ]);

        var options = {
          title: 'Percentage of Gender',
          is3D: true,
        };
        var chart = new google.visualization.BarChart(document.getElementById('piechart1'));
        chart.draw(data, options);
      }
    </script>

<!-- -------------------------------<<<<<<<< CHART 2 Q2 DEVICE >>>>>>>>-------------------------------------------- -->
<?php
  $sql1=("SELECT COUNT(*) as total FROM feedback WHERE q2 = 'Amazefit'");
  $res1 = mysqli_query($conn,$sql1);
  $row1 = mysqli_fetch_assoc($res1);

  $sql2=("SELECT COUNT(*) as total FROM feedback  WHERE q2 = 'Fitbit'");
  $res2 = mysqli_query($conn,$sql2);
  $row2 = mysqli_fetch_assoc($res2);
  
  $sql3=("SELECT COUNT(*) as total FROM feedback WHERE q2 = 'Stethoscope'");
  $res3 = mysqli_query($conn,$sql3);
  $row3 = mysqli_fetch_assoc($res3);

  $sql4=("SELECT COUNT(*) as total FROM feedback WHERE q2 = 'Smart Watch'");
  $res4 = mysqli_query($conn,$sql4);
  $row4 = mysqli_fetch_assoc($res4);

  $sql5=("SELECT COUNT(*) as total FROM feedback WHERE q2 = 'Sugar Meter'");
  $res5 = mysqli_query($conn,$sql5);
  $row5 = mysqli_fetch_assoc($res5);

  $sql6=("SELECT COUNT(*) as total FROM feedback WHERE q2 = 'BP Meter'");
  $res6 = mysqli_query($conn,$sql6);
  $row6 = mysqli_fetch_assoc($res6); 
?>

    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Instrument', 					 'Percentage'],
          ['Amazefit',      <?php echo $row1['total']; ?>],
          ['Fitbit',        <?php echo $row2['total']; ?>],
          ['Stethoscope',   <?php echo $row3['total']; ?>],
          ['Smart Watch',   <?php echo $row4['total']; ?>],
          ['Sugar Meter',   <?php echo $row5['total']; ?>],
          ['BP Meter',      <?php echo $row6['total']; ?>]
        ]);

        var options = {
          title: 'Wearable Devices',
          is3D: true,
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
        chart.draw(data, options);
      }
    </script>

<!-- -----------------------------<<<<<<<< CHART 3 Q4 No. of wearable devices owned >>>>>>>>------------------------------------ -->
<?php
  $sql1=("SELECT COUNT(*) as total FROM feedback WHERE q4 = '1-2 Devices'");
  $resq41 = mysqli_query($conn,$sql1);
  $q41 = mysqli_fetch_assoc($resq41);

  $sql2=("SELECT COUNT(*) as total FROM feedback  WHERE q4 = '3-5 Devices'");
  $resq42 = mysqli_query($conn,$sql2);
  $q42 = mysqli_fetch_assoc($resq42);
  
  $sql3=("SELECT COUNT(*) as total FROM feedback WHERE q4 = 'More than 5 Devices'");
  $resq43 = mysqli_query($conn,$sql3);
  $q43 = mysqli_fetch_assoc($resq43);
?>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['wearable devices owned', 			  ''],
          ['1-2 Devices',         <?php echo $q41['total']; ?>],
          ['3-5 Devices',         <?php echo $q42['total']; ?>],
          ['More than 5 Devices', <?php echo $q43['total']; ?>]
        ]);

        var options = {
          title: 'Percentage of wearable devices owned',
          is3D: true,
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart3'));
        chart.draw(data, options);
      }
    </script>

<!-- -----------------------------<<<<<<<< CHART 4 Q5 Type of information >>>>>>>>------------------------------------------ -->
<?php
  $sql1=("SELECT COUNT(*) as total FROM feedback WHERE q5 = 'Exercise Info'");
  $res1 = mysqli_query($conn,$sql1);
  $q51 = mysqli_fetch_assoc($res1);

  $sql2=("SELECT COUNT(*) as total FROM feedback  WHERE q5 = 'Medical Info'");
  $res2 = mysqli_query($conn,$sql2);
  $q52 = mysqli_fetch_assoc($res2);
  
  $sql3=("SELECT COUNT(*) as total FROM feedback WHERE q5 = 'Dietary Info'");
  $res3 = mysqli_query($conn,$sql3);
  $q53 = mysqli_fetch_assoc($res3);

  $sql3=("SELECT COUNT(*) as total FROM feedback WHERE q5 = 'Social Media Updates'");
  $res4 = mysqli_query($conn,$sql3);
  $q54 = mysqli_fetch_assoc($res4);
?>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Type of Information', 					'Percentage'],
          ['Exercise Info',         <?php echo $q51['total']; ?>],
          ['Medical Info',          <?php echo $q52['total']; ?>],
          ['Dietary Info',          <?php echo $q53['total']; ?>],
          ['Social Media Updates',  <?php echo $q54['total']; ?>]
        ]);

        var options = {
          title: 'Type of Information',
          is3D: true,
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart4'));
        chart.draw(data, options);
      }
    </script>


<!-- -------------------------------<<<<<<<< CHART 5 Q6 Source of information >>>>>>>>-------------------------------------------- -->
<?php
  $sql1=("SELECT COUNT(*) as total FROM feedback WHERE q6 = 'Television'");
  $res1 = mysqli_query($conn,$sql1);
  $q61 = mysqli_fetch_assoc($res1);

  $sql2=("SELECT COUNT(*) as total FROM feedback  WHERE q6 = 'Internet'");
  $res2 = mysqli_query($conn,$sql2);
  $q62 = mysqli_fetch_assoc($res2);
  
  $sql3=("SELECT COUNT(*) as total FROM feedback WHERE q6 = 'Magazine'");
  $res3 = mysqli_query($conn,$sql3);
  $q63 = mysqli_fetch_assoc($res3);

  $sql4=("SELECT COUNT(*) as total FROM feedback WHERE q6 = 'Medical Shops'");
  $res4 = mysqli_query($conn,$sql4);
  $q64 = mysqli_fetch_assoc($res4);

  $sql5=("SELECT COUNT(*) as total FROM feedback WHERE q6 = 'Doctors'");
  $res5 = mysqli_query($conn,$sql5);
  $q65 = mysqli_fetch_assoc($res5); 
?>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Source of information', 		  'Percentage'],
          ['Television',      <?php echo $q61['total']; ?>],
          ['Internet',        <?php echo $q62['total']; ?>],
          ['Magazine',        <?php echo $q63['total']; ?>],
          ['Medical Shops',   <?php echo $q64['total']; ?>],
          ['Doctors',         <?php echo $q65['total']; ?>]
        ]);

        var options = {
          title: 'Source of information',
          is3D: true,
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart5'));
        chart.draw(data, options);
      }
    </script>


<!-- -------------------------------<<<<<<<< CHART 6 Q8 Most important feature >>>>>>>>-------------------------------------------- -->
<?php
  $sql1=("SELECT COUNT(*) as total FROM feedback WHERE q8 = 'Quality'");
  $res1 = mysqli_query($conn,$sql1);
  $q81 = mysqli_fetch_assoc($res1);

  $sql2=("SELECT COUNT(*) as total FROM feedback  WHERE q8 = 'Price'");
  $res2 = mysqli_query($conn,$sql2);
  $q82 = mysqli_fetch_assoc($res2);
  
  $sql3=("SELECT COUNT(*) as total FROM feedback WHERE q8 = 'Functionality'");
  $res3 = mysqli_query($conn,$sql3);
  $q83 = mysqli_fetch_assoc($res3);

  $sql4=("SELECT COUNT(*) as total FROM feedback WHERE q8 = 'Visual Appeal'");
  $res4 = mysqli_query($conn,$sql4);
  $q84 = mysqli_fetch_assoc($res4);

  $sql5=("SELECT COUNT(*) as total FROM feedback WHERE q8 = 'Technology'");
  $res5 = mysqli_query($conn,$sql5);
  $q85 = mysqli_fetch_assoc($res5); 

  $sql6=("SELECT COUNT(*) as total FROM feedback WHERE q8 = 'Brand'");
  $res6 = mysqli_query($conn,$sql6);
  $q86 = mysqli_fetch_assoc($res6); 
?>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Most important feature',	 	'Percentage'],
          ['Quality',      	<?php echo $q81['total']; ?>],
          ['Price',         <?php echo $q82['total']; ?>],
          ['Functionality', <?php echo $q83['total']; ?>],
          ['Visual Appeal', <?php echo $q84['total']; ?>],
          ['Technology',    <?php echo $q85['total']; ?>],
          ['Brand',         <?php echo $q86['total']; ?>]
        ]);

        var options = {
          title: 'Most important feature',
          is3D: true,
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart6'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div class="content">
    	<?php create_topmenu(8); ?>
    </div>
    <div id="piechart1" style="width: 500px; height: 300px;"></div>
    <div id="piechart2" style="width: 500px; height: 300px; padding-left: 30%; margin-top: -300px;"></div>
    <div id="piechart3" style="width: 500px; height: 300px; padding-left: 60%; margin-top: -300px;"></div>
    <br>
    <div id="piechart4" style="width: 500px; height: 300px;"></div>
    <div id="piechart5" style="width: 500px; height: 300px; padding-left: 30%; margin-top: -300px;"></div>
    <div id="piechart6" style="width: 500px; height: 300px; padding-left: 60%; margin-top: -300px;"></div>
  </body>
</html>
