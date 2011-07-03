<?php	
session_start();
$cname=$_GET['name'];
$pass=$_GET['password'];
$username=$_SESSION['username'];
$dbc=mysqli_connect('localhost','root','','users');
$qr="SELECT * FROM $username"."_community WHERE communityname=\"$cname\"";
$result=mysqli_query($dbc,$qr);
if(!mysqli_num_rows($result))
{
	$qr="INSERT INTO $username"."_community (communityname) VALUES ('$cname')";
	$result=mysqli_query($dbc,$qr);
	$qr="INSERT INTO communitydata (comname,user,compass) VALUES ('$cname','$username','$pass')";
	$result=mysqli_query($dbc,$qr);
	echo 'your community has been created successfully';
}
else
echo 'such a community already exists please select a different name';
?>
