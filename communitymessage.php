<?php
$community=$_GET['communityname'];
$message=$_GET['message'];
$d=mysqli_connect('localhost','root','','users');
$qr="SELECT * FROM communitydata WHERE comname=\"$community\"";
$res=mysqli_query($d,$qr);
while($row=mysqli_fetch_array($res))
{
	$tuser=$row['user'];
	$mess=$community."::".$message;
	$qr="INSERT INTO $tuser"."_inbox (message) VALUES ('$mess')";
	$res2=mysqli_query($d,$qr);
}
?>
