<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>

<h1>The details entered are:<br></h1>
<?php
	$Fname=$_POST['fname'];
	$Lname=$_POST['lname'];
	$Uname=$_POST['uname'];

	echo $Fname;
	echo $Lname;
?>
</body>
</html>