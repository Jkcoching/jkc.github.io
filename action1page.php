<?php

$con = mysqli_connect('localhost','root');
if($con)
{
	echo "Connection successful";
}
else
{
	echo "No connection";
}
mysqli_select_db($con, "userdata");
$email=$_POST['email'];
$Info=$_POST['Info'];
$query= "insert into userinfodata1 (email,Info)
VALUES('$email','$Info')";
mysqli_query($con,$query);
echo "$query";
mysqli_query($con,$query);
?>