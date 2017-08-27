<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$connection=mysqli_connect("localhost","root","","customer") or die("Unable to connect to database");

$a=mysqli_real_escape_string($connection,$_REQUEST['fabric_uname']);
$b=mysqli_real_escape_string($connection,$_REQUEST['fabricsample_add']);
$c=mysqli_real_escape_string($connection,$_REQUEST['fabrictype']);

$insert="insert into fabric_sample_order(username,Address) values('$a','$b')";
if(mysqli_query($connection,$insert))
{
header('location: ordercompleted.html');
}
else
{
header('location: orderfabric1.html');
}


?>

</body>
</html>