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
$NAME=$_POST['NAME'];
$phone=$_POST['phone'];
$Comment=$_POST['Comment'];
$query= "insert into userinfodata (NAME,phone,Comment)
VALUES('$NAME','$phone','$Comment')";
mysqli_query($con,$query);
echo "$query";
mysqli_query($con,$query);
header('location:file1.html');
?>