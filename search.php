<html>
<head>
</head>
<body>
<?php
$result=doquery();
echo '<table border=1 cellpadding=2 cellspacing=2>';
echo '<th>profile-pic</th><th>name</th>';echo '<th>email</th>';echo '<th>phoneno</th>';echo '<th>hostel</th>';echo '<th>roomno</th>';
while($arr=mysqli_fetch_array($result[0]))
{$id=$arr['id'];
//echo '"viewjob.php?id='.$id.'"'; 
if($arr['screenshot']!="")
{$pic=$arr['screenshot'];}
else $pic='images/default.jpg';
echo '<tr><td><a href="viewjobs.php?id='.$id.'"target="_blank">'.'<img src="'.$pic.'" height="150"></td><td>'.$arr['name'].'</td></a><td>'.$arr['email'].'</td><td>'.$arr['phoneno'].'</td><td>'.$arr['hostel'].'</td><td>'.$arr['roomno'].'</td></tr>';
}echo '</table>';
$odb1="name";
echo '<a href="search.php?odby='.$odb1.'&amp;word='.$result[1].'">order by name</a><br>';
$odb1="username";
echo '<a href="search.php?odby='.$odb1.'&amp;word='.$result[1].'">order by username</a><br>';
$odb1="email";
echo '<a href="search.php?odby='.$odb1.'&amp;word='.$result[1].'">order by email</a><br>';
echo '<a href="search.php?pskip=5&amp;word='.$result[1].'">next</a>';
echo '   '.'<a href="search.php?pskip=-5&amp;word='.$result[1].'">previous</a><br>';
?>
<?php
function doquery()
{
session_start();
$dbc =mysqli_connect('localhost','root','','users')
or die('error connecting to server').'<br>';
if(isset($_GET['search']))
{$text=mysqli_real_escape_string($dbc,$_GET['search']);$_SESSION['count']=0;$_SESSION['skip']=0;}
if(isset($_GET['word']))
{$text=$_GET['word'];$_SESSION['count']++;}
if(isset($_GET['odby']))
{//echo 'odby-'.$_GET['odby'];
}
if(isset($_GET['pskip']))
{
$_SESSION['skip']+=$_GET['pskip'];
if($_SESSION['skip']<0)
{$_SESSION['skip']=0;}
}
$name=buildquery($text,'name');
if(isset($_GET['email'])&&!empty($_GET['email']))
{$emailt=mysqli_real_escape_string($dbc,$_GET['email']);$email=buildquery($emailt,'email');$name.=" AND $email";}
if(isset($_GET['hostel'])&&!empty($_GET['hostel']))
{$emailt=mysqli_real_escape_string($dbc,$_GET['hostel']);$email=buildquery($emailt,'hostel');$name.=" AND $email";}
//echo $res3;
$skip=$_SESSION['skip'];
if(!isset($_GET['odby']))
{$qr="SELECT * FROM userdata WHERE $name LIMIT $skip,5";}
else
{$odu=$_GET['odby'];
if($_SESSION['count']%2==0)
{$qr="SELECT * FROM userdata WHERE $name ORDER BY $odu DESC LIMIT $skip,5";}
else
{$qr="SELECT * FROM userdata WHERE $name ORDER BY $odu ASC LIMIT $skip,5";}

}
echo $qr;

$result[]=mysqli_query($dbc,$qr);
$result[]=$text;
return $result;
}
function buildquery($text,$field)
{
	$res1=str_replace(',',' ',$text);
	$arr=explode(' ',$res1);
	foreach($arr as $word)
	{//echo $word.'<br>';
	if(!empty($word)&&(!$word!=' '))
	{$res2[]="$field LIKE '%$word%'";}
	}
	if(isset($res2))
	$res3=implode(' OR ',$res2);
	else
	$res3=1;
	//echo $res3;
	return $res3;
}
?>
</body>
</html>
