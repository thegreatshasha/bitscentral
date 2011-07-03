<html>
<head>
</head>
<body>
<table border=2 cellpadding=2 cellspacing=2>
<th>day/timing</th>
<th>1</th>
<th>2</th>
<th>3</th>
<th>4</th>
<th>5</th>
<th>6</th>
<th>7</th>
<th>8</th>
<th>9</th>
<?php
require_once('authenticate.php');
mysql_connect("localhost", "root","") or die("Connection Failed");
mysql_select_db("users")or die("Connection Failed");
$calendar[]= array();
for($i=0;$i<7;$i++)
{for($j=0;$j<9;$j++)$calendar[$i][$j]="";}
$username=$_SESSION['username'];
$query = "select * from $username";
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
	{	//echo 'experimenting';	
		$splitdata2=explode('/', $row['sec']);
		//echo '<br>--'.$splitdata[1].'=='.$splitdata2[1].'<br>';
		if($splitdata[1]=='L'||$splitdata[1]=='P'||$splitdata[1]=='l'||$splitdata[1]=='p')
		{if(strtoupper($splitdata2[1])==strtoupper($splitdata[1])){parselp($row);}}
		else if($splitdata[1]=='T'||$splitdata[1]=='t')
		{if($splitdata2[1]=='L'||$splitdata2[1]=='l'||$splitdata2[1]=='t'||$splitdata2[1]=='T'){parset($row);}
		}
	}
}
for($i=0;$i<7;$i++)
{ print "<tr><td>$i</td>";
for($j=0;$j<9;$j++)
{echo "<td>".$calendar[$i][$j]."</td>";}
print "</tr>";
}
function parselp($row)
{
	global $calendar;
	$string="";
	$courseno=$row['courseno'];
	$tutorprac=explode('/',$row['sec']);
	$splitdata=explode('-', $row['days']);
	//echo $splitdata[0];
	$dayarray=explode('/',$splitdata[0]);
	for($i=0;$i<sizeof($dayarray);$i++)
	{
		$counter=-1;
	//	echo $dayarray[$i];
		switch($dayarray[$i])
		{
			case 'M';$counter=0;break;
			case 'T';$counter=1;break;
			case 'W';$counter=2;break;
			case 'Th';$counter=3;break;
			case 'F';$counter=4;break;
			case 'Sa';$counter=5;break;
			case 'S';$counter=6;break;
		}
		$query3="select * from subjectdata where courseno=\"$courseno\"";
		$result3=mysql_query($query3);$array=mysql_fetch_array($result3);
		$k=explode(',',$splitdata[1]);
		for($j=0;$j<sizeof($k);$j++)
		$calendar[$counter][$k[$j]-1].=$tutorprac[1].'::'.$array['title'].'::'.$row['room'];
	}
	
}
function parset($row)
{
	global $calendar;$courseno=$row['courseno'];
	$string="";
	$splitdata=explode('-', $row['tut']);
	//echo $splitdata[0].'<br>';
	$dayarray=explode('/',$splitdata[0]);
	for($i=0;$i<sizeof($dayarray)-1;$i++)
	{
		$counter=-1;
		//echo 'day:::'.$dayarray[0].'<br>';
		switch($dayarray[$i])
		{
			case 'M';$counter=0;break;
			case 'T';$counter=1;break;
			case 'W';$counter=2;break;
			case 'Th';$counter=3;break;
			case 'F';$counter=4;break;
			case 'Sa';$counter=5;break;
			case 'S';$counter=6;break;
		}
		//echo 'counter:::'.$counter.'<br>';
		$query3="select * from subjectdata where courseno=\"$courseno\"";
		$result3=mysql_query($query3);$array=mysql_fetch_array($result3);
		$calendar[$counter][$dayarray[1]-1].='T::'.$array['title'].'::'.$splitdata[1];
	}
}
?>
</body>
</html>

