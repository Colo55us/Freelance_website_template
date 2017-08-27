<html>
<body>

<?php
session_start();
$name1=$_POST["login-username"];
$pass1=$_POST["login-password"];

$connection=mysqli_connect("localhost","root","","customer") or die("Unable to connect to database");
echo ("database connected");
$result=mysqli_query($connection,"select * from customer_info where username='$name1' AND Password='$pass1'") 
        or die ("unable to fetch result");  
echo ("result fetched");
$compare = mysqli_fetch_array($result);

if($compare['username']==$name1 && $compare['Password']==$pass1)
{echo nl2br("access granted");
$_SESSION['login_user']=$name1;
header('location: index1.php');}

else
{echo ("bad username or password");}
?>
</body></html>