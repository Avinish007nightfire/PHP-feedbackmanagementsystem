<?php
include 'dbh.php';
$name=$_POST['name'];
$email=$_POST['email'];
$uid=$_POST['uid'];
$pwd=$_POST['pwd'];

$sql="select * from customerlogin where (uid='$uid');";

      $res=mysqli_query($conn,$sql);

      if (mysqli_num_rows($res) > 0) {
        // output data of each row
        $row = mysqli_fetch_assoc($res);
        if ($uid==$row['uid'])
        {
            header("Location:CustomerLogin.php?loginerror1=true");
        }
       }
       else
        {
            header("Location:CustomerLogin.php");
        }

$sql="INSERT INTO customerlogin(name,email,uid,pwd) VALUES ('$name','$email','$uid','$pwd')";
$result=$conn->query($sql);
?>