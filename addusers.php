<?php
$dbc=mysqli_connect('localhost','root','','users');
$user=mysqli_escape_string($dbc,$_GET['user']);
$community=mysqli_escape_string($dbc,$_GET['community']);
$qr="SELECT * FROM communitydata WHERE comname=\"$community\"";
$resu=mysqli_query($dbc,$qr);
$arr=mysqli_fetch_array($resu);
$pass=$arr['compass'];
$string="<a href=joincommunity.php?community=".$community."&amp;pass=".$pass.">click here to join $community </a>";
$qr2="INSERT into $user"."_inbox (message) VALUES ('$string')";
$result=mysqli_query($dbc,$qr2);
echo 'a confirmation message has been sent to the user';
?>
