<?php
include 'dbh.php';
if(isset($_POST['u_id']))
{
	$sql="SELECT * FROM customerlogin WHERE uid='".$_POST['u_id']."'";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result) > 0)
	{
		echo "<span style='color: red;'>Username already exists..!!</span>";
	}
	else
	{
		echo "<span style='color: green;'>Username is available</span>";
	}
}
?>