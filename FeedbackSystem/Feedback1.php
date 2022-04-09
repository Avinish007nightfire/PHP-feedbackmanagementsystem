<?php session_start();

include 'dbh.php';

$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$q1=$_POST['q1'];
$q2=$_POST['q2'];
$q3=$_POST['q3'];
$q4=$_POST['q4'];
$q5=$_POST['q5'];
$q6=$_POST['q6'];
$q7=$_POST['q7'];
$q8=$_POST['q8'];
$q9=$_POST['q9'];

$sql="INSERT INTO feedback(name,age,gender,q1,q2,q3,q4,q5,q6,q7,q8,q9) VALUES ('$name','$age','$gender','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9')";

$result=$conn->query($sql);

header("Location:Feedback.php");
?>
