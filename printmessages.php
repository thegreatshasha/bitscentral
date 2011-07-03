<?php
session_start();
$table=$_SESSION['username'].'_inbox';
$d=mysqli_connect('localhost','root','','users');
$qr="SELECT * FROM $table ORDER BY date DESC";
$result=mysqli_query($d,$qr);
while($row=mysqli_fetch_array($result))
{echo $row['date'].'<br>'.$row['message'].'<br>';}
?>
