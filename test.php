<?php
include 'db_connection.php';
// Create connection
$conn = OpenCon();
// Check connection
$first=$_POST["fname"];
if (empty($_POST["fname"])) {
    $nameErr = "first Name is required";
  } else {
    $name = test_input($_POST["fname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
$last=$_POST["lname"];
if (empty($_POST["lname"])) {
    $nameErr = "last Name is required";
  } else {
    $name = test_input($_POST["lname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
$user=$_POST["uname"];
if (empty($_POST["uname"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["uname"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
$pass=$_POST["pass"];
$sql = "INSERT INTO user_details (firstname, lastname, username,password)
VALUES ('$first', '$last', '$user','$pass')";

if ($conn->query($sql) === TRUE) {
    echo "<script>window.alert('New record created successfully');</script>";
    echo "<body>welcome to the world of our travels</body>";
} else {
    echo "<script>window.alert('this username already exists');</script>";
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
CloseCon($conn);
?>