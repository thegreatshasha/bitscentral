<?php 
$d=mysqli_connect('localhost','root','','users');
$usr=mysql_real_escape_string($_GET['users']);
$msg=mysql_real_escape_string($_GET['message']);
$qr="INSERT INTO $usr"."_inbox (message) VALUES ('$msg')";
$result=mysqli_query($d,$qr);
header('Location: loginpage.php');
?>
