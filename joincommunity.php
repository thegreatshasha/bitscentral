<?php 
require_once('authenticate.php');
$user=$_SESSION['username'];
$pass=$_GET['pass'];
$community=$_GET['community'];
$dbc=mysqli_connect('localhost','root','','users');
$qr="SELECT * FROM communitydata WHERE compass=\"$pass\"";
$resu=mysqli_query($dbc,$qr);
if(mysqli_num_rows($resu))
{
$qr0="SELECT * FROM $user"."_community WHERE communityname=\"$community\"";
if(!mysqli_num_rows(mysqli_query($dbc,$qr0)))
{
	$qr1="INSERT into $user"."_community (communityname) VALUES ('$community')";
	$resu=mysqli_query($dbc,$qr1);
	echo 'welcome to '.$community;
}else echo 'duplicate entry';
$qr0="SELECT * FROM communitydata WHERE user=\"$user\" AND comname=\"$community\"";
if(!mysqli_num_rows(mysqli_query($dbc,$qr0)))
{
	$qr1="INSERT into communitydata (comname,user,compass) VALUES ('$community','$user','$pass')";
	$resu=mysqli_query($dbc,$qr1);
	echo 'your data has been added '.$community;
}
else echo 'you are already a part of this community';
}
?>
