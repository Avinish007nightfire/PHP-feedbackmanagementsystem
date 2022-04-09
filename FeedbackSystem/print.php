<?php session_start();
include("Mmenu.php");
include 'dbh.php';
if(!isset($_SESSION['id'])){
	header("location:MasterLogin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Reports</title>
    <link rel="stylesheet" type="text/css" href="Styles/innerstyle.css?version=1.0.1">
	<link rel="stylesheet" type="text/css" href="js/slick.css">
	<script>
	    function printData()
		{
		   var divToPrint=document.getElementById("print");
		   newWin= window.open("");
		   newWin.document.write(divToPrint.outerHTML);
		   newWin.print();
		   newWin.close();
		}
    </script>
</head>
<body>
<div class="content">
<?php create_topmenu(8); ?>
<div class="blk" >
<div class="content_body" >
	<h3 class="top_heading" style="color: black;">All Feedbacks</h3>
    <button onclick="printData()" style="width: 20%; height: 30px;  background: #1E90FF;cursor: pointer; font-size: 18px; " >Print Data</button>
    <br>
    <br>
	<table border="1" id="print">
	<tr>
            <td>Name</td>
            <td>Age</td>
            <td>Gender</td>
            <td>Question 1</td>
            <td>Question 2</td>
            <td>Question 3</td>
            <td>Question 4</td>
            <td>Question 5</td>
            <td>Question 6</td>
            <td>Question 7</td>
            <td>Question 8</td>
            <td>Question 9</td>
        </tr>
	<?php
	$sql="SELECT * FROM feedback";
    $result = mysqli_query($conn,$sql);
    $rows = mysqli_num_rows($result); 
        if ($rows) {      
        while ($row = mysqli_fetch_array($result)) {  
        ?>    
             <tr>
             	<td><?= $row['name']; ?></td>
             	<td><?= $row['age']; ?></td>
             	<td><?= $row['gender']; ?></td>
             	<td><?= $row['q1']; ?></td>
             	<td><?= $row['q2']; ?></td>
             	<td><?= $row['q3']; ?></td>
             	<td><?= $row['q4']; ?></td>
             	<td><?= $row['q5']; ?></td>
                <td><?= $row['q6']; ?></td>
                <td><?= $row['q7']; ?></td>
                <td><?= $row['q8']; ?></td>
                <td><?= $row['q9']; ?></td>
             </tr>
        <?php  }       
              
        }

	?>
</table>
</div>
</div>
</div>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/slick.js"></script>


</body>
</html>