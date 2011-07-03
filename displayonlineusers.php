<?php 
function displayonlineusers()
{
	$d=mysqli_connect('localhost','root','','users');
	$result=mysqli_query($d,"SELECT * FROM useronline");
	while($row=mysqli_fetch_array($result))
	{echo '<a href="javascript:void(0)" onclick="javascript:chatWith(\''.$row['username'].'\')">'.$row['username'].'</a><br>';}
}
if(isset($_GET['update']))
{displayonlineusers();}
?>
