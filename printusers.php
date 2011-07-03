<?php
require_once('authenticate.php');
function printusers()
{$d=mysqli_connect('localhost','root','','users');
$qr="SELECT * FROM userdata";
$result=mysqli_query($d,$qr);
while($row=mysqli_fetch_array($result))
{echo '<option value='.$row['username'].'>'.$row['username'].'</option>';}
}
if(isset($_GET['update']))
printusers();
?>

