<html>
<head>
</head>
<body>
<table border=2 cellpadding=2 cellspacing=2>
<th>courseno</th>
<th>coursetitle</th>
<th>section</th>
<th>instructor</th>
<th>room</th>
<th>days-hours</th>
<th>tut/H-R</th>
<?php
require_once('authenticate.php');
mysql_connect("localhost", "root","") or die("Connection Failed");
mysql_select_db("users")or die("Connection Failed");
$calendar[]= array();
$counter=0;
$username=$_SESSION['username'];
$query = "select * from $username";//open users and fetch user sections
$query2="";
$result = mysql_query($query);
$numcolumn = mysql_num_fields($result);
$resultarray=mysql_fetch_array($result);
for ( $i = 0; $i < $numcolumn; $i++ )
 {
$course= explode('_', mysql_field_name($result, $i));
$courseno=$course[0];
//echo $courseno.'<br>';
//echo $resultarray[$i].'<br>';
$splitdata = explode('_',mysql_field_name($result, $i));

//echo $splitdata[1].'<br>';
$pos1=$resultarray[$i].'/L';
$pos2=$resultarray[$i].'/T';
$pos3=$resultarray[$i].'/P';
//echo $pos1.' '.$pos2.' '.$pos3.'<br>';
mysql_select_db("bitscentral");
$query2="select * from subjectdetails where courseno=\"$courseno\" AND sec IN (\"$pos1\",\"$pos2\",\"$pos3\")";
//echo $query2.'<br>';
$result2=mysql_query($query2);
while($row=mysql_fetch_array($result2))
	{	$courseno=$row['courseno'];	
		$query2="SELECT * FROM subjectdata WHERE courseno=\"$courseno\"";
		$shub_pagal=mysql_query($query2);
		$subjectdata=mysql_fetch_array($shub_pagal);
		//echo 'experimenting';	
		$tobeadded=$row['courseno'].':::'.$row['sec'].'::'.$row['instructor'].$row['room'].'::'.$row['days'].'::'.$row['tut'];
		if(!in_array($tobeadded,$calendar))
		{echo '<tr><td>'.$row['courseno'].'<td>'.$subjectdata['title'].'</td>'.'<td>'.$row['sec'].'</td>'.'<td>'.$row['instructor'].'</td>'.'<td>'.$row['room'].'</td>'.'<td>'.$row['days'].'</td>'.'<td>'.$row['tut'].'</td>'.'</tr>';$calendar[$counter++]=$tobeadded;}
	}
}
?>
</body>
</html>

