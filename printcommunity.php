<?php
require_once('authenticate.php');
function printcommuntiy()
{
$d=mysqli_connect('localhost','root','','users');
$username=$_SESSION['username'];
$qr="SELECT * FROM $username"."_community";
$result=mysqli_query($d,$qr);
while($row=mysqli_fetch_array($result))
{echo '<option value='.$row['communityname'].'>'.$row['communityname'].'</option>';}
}
if(isset($_GET['update']))
printcommuntiy();
?>
