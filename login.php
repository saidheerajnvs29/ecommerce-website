<?php
include 'db_connection.php';
$conn = OpenCon();
$use=$_POST["uname"];
$passw=$_POST["password"];
$usr="SELECT username FROM user_details where username='$use'";
$pas="SELECT password FROM user_details where password='$passw'";
if ($conn->query($usr) == TRUE) {
	if($conn->query($pas)==TRUE)
	{
		;
	}
	else
	{
		echo "<script>window.alert('password entered is incorrect');</script>";
	}
}
else
{
	echo "<script>window.alert('username entered is incorrect');</script>";
}
CloseCon($conn);
?>