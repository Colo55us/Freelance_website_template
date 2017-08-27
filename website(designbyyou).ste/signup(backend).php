<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$connection=mysqli_connect("localhost","root","","customer") or die("Unable to connect to database");

$a=mysqli_real_escape_string($connection,$_REQUEST['firstname']);
$b=mysqli_real_escape_string($connection,$_REQUEST['signup-password1']);
$c=mysqli_real_escape_string($connection,$_REQUEST['address']);
$d=mysqli_real_escape_string($connection,$_REQUEST['email']);
$e=mysqli_real_escape_string($connection,$_REQUEST['signup-username']);

$insert="insert into customer_info(Name,Password,Address,email,username) values('$a','$b','$c','$d','$e')";
if(mysqli_query($connection,$insert))
{echo "<script type='text/javascript'>alert('you have successfully registered.Please login');</script>";
header('location: login(1).html');}
else
{echo "<script type='text/javascript'>alert('username is already taken. Please select another one')";
header('location: signup(1).html');}


?>

</body>
</html>