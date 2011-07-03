<html>
<head>
</head>
<body>
<?php
$dbc =mysqli_connect('localhost','root','','bitscentral')
        or die('error connecting to server').'<br>';
$query="";
for($i=1;$i<=$_POST['nooffields'];$i++)
{
	$courseno=$_POST["courseno"];
	$sec=$_POST["$i"."$i"];
	$instructor=$_POST["$i"."$i"."$i"];
	$room=$_POST["$i"."$i"."$i"."$i"];
	$days=$_POST["$i"."$i"."$i"."$i"."$i"];
	$tut=$_POST["$i"."$i"."$i"."$i"."$i"."$i"];
	$query="INSERT INTO subjectdetails(courseno,sec,instructor,room,days,tut) VALUES('$courseno','$sec','$instructor','$room','$days','$tut')";
	$result=mysqli_query($dbc,$query) or die('error inserting');
}
echo 'thanks your details have been saved';
require_once('index.html');
?>
</body>
</html>
