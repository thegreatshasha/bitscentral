<?php
session_start();
$d=mysqli_connect('localhost','root','','users')
or die('error connecting to database');
$user=$_SESSION['username'];
$passw=$_SESSION['password'];
$query="SELECT * FROM userdata WHERE username=\"$user\" AND password=\"$passw\"";
$shub_pagal=mysqli_query($d,$query);
if(!isset($_SESSION['username'])||!isset($_SESSION['password'])||empty($_SESSION['password'])||empty($_SESSION['username'])||!mysqli_num_rows($shub_pagal))
{
echo 'invalid login try again';
header("Location: index.php");
exit;
}
?>
