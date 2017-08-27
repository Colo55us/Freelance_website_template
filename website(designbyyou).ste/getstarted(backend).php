<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$connection=mysqli_connect("localhost","root","","customer") or die("Unable to connect to database");

$a=mysqli_real_escape_string($connection,$_REQUEST['username']);
$b=mysqli_real_escape_string($connection,$_REQUEST['dresstype']);
$c=mysqli_real_escape_string($connection,$_REQUEST['design_upload1']);
$d=mysqli_real_escape_string($connection,$_REQUEST['design_upload2']);
$e=mysqli_real_escape_string($connection,$_REQUEST['design_upload3']);
$f=mysqli_real_escape_string($connection,$_REQUEST['fabric']);
$g=mysqli_real_escape_string($connection,$_REQUEST['color1']);
echo $a,$b,$c,$d,$e, $f , $g;

$insert="insert into orders(username,dress_type,design_1,design_2,design_3,fabric_type,base_color)           values('$a','$b','$c','$d','$e','$f','$g')";

if(mysqli_query($connection,$insert))
{header('location: ordercompleted.html');}
else
{header('location: getstarted1.html');}


?>
</body>
</html>