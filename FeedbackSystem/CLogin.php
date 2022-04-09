<?php session_start();
if(isset($_SESSION['id']))
{
	header("location:Feedback.php");
}
include 'dbh.php';
if(isset($_POST['uid']) && $_POST['uid']!="")
{
	$uid=$_POST['uid'];
	$pwd=$_POST['pwd'];

	$sql="SELECT * FROM customerlogin WHERE uid='".$uid."' AND pwd='".$pwd."'";
	$result = mysqli_query($conn,$sql);
	$rows = mysqli_num_rows($result); 
	//get number of rows returned 
	if ($rows)
		{     
			while ($row = mysqli_fetch_array($result))
			{
				$_SESSION['id']= $row['id'];
				$_SESSION['name']=$row['name'];
				header("Location:Feedback.php");
			}
		}
	else
		{
			header("Location:CustomerLogin.php?loginerror=true");
		}
}
?>