<html>
<head>
<title>
thanks your details have been saved
</title>
<script lang="text/javascript">
function createajaxrequest()
{
	try{
	        return (new XMLHttpRequest());
	   }
	catch(e){
			try{return (new ActiveXObject("Msxml2.XML.HTTP"));}
			catch(e){
					try {return (new ActiveXObject("Microsoft.XML.HTTP"));}
					catch(e)
					{
						alert("for god's sake update ur browser'");	
						return false;
					}
				}
		}
	
}
function ajacksfunction()
{var ajaxrequest=createajaxrequest();
		ajaxrequest.onreadystatechange=function()
{
	if(ajaxrequest.readyState==4)
	{//document.myForm.time.value
	//if(ajaxrequest.responseText==0)
	document.getElementById('timetable').innerHTML=ajaxrequest.responseText;
	//else
	//document.getElementById('usrerror').innerHTML="user already exists";
	}
}
ajaxrequest.open("GET","generatet.php",true);
ajaxrequest.send(null);
}
</script>
</head>
<body onload="ajacksfunction();">
<?php
 session_start();
//echo 'entering php'.'<br>';
$sarray=array();
$larray=array();
$tarray=array();
$parray=array();
$count=1;
while($count<9)
{
	$sarray[$count-1]=str_replace(' ','$',$_POST["$count"]);
	$larray[$count-1]=str_replace(' ','$',$_POST["$count"."$count"]);
	$tarray[$count-1]=str_replace(' ','$',$_POST["$count"."$count"."$count"]);
	$parray[$count-1]=str_replace(' ','$',$_POST["$count"."$count"."$count"."$count"]);
	$count++;
}
$username=$_SESSION['username'];
$query1="CREATE TABLE $username(";
$query2="INSERT INTO $username(";
for($i=0;$i<$count-1;$i++)
{	if(!empty($larray[$i]))
	{$query1.="$sarray[$i]"."_l int,";$query2.="$sarray[$i]"."_l,";}
	if(!empty($tarray[$i]))
	{$query1.="$sarray[$i]"."_t int,";$query2.="$sarray[$i]"."_t,";}
	if(!empty($parray[$i]))
	{$query1.="$sarray[$i]"."_p int,";$query2.="$sarray[$i]"."_p,";}
}
$query1=substr($query1,0,strlen($query1)-1); 
$query2=substr($query2,0,strlen($query2)-1); 
$query1.=');';
$query2.=') VALUES(';
$dbc =mysqli_connect('localhost','root','','users')
        or die('error connecting to server').'<br>';
//echo $query1.'<br>';
$result=mysqli_query($dbc,$query1)or die('error in stage1');
for($i=0;$i<$count-1;$i++)
{	if(!empty($larray[$i]))
	$query2.="'$larray[$i]',";
	if(!empty($tarray[$i]))
	$query2.="'$tarray[$i]',";
	if(!empty($parray[$i]))
	$query2.="'$parray[$i]',";
}
$query2=substr($query2,0,strlen($query2)-1); 
$query2.=');';
//echo $query2.'<br>';
$result2=mysqli_query($dbc,$query2)or die('error in stage2');
?>
thanks your details have been saved. Here's waht ur timetable looks like.<br>
<div id="timetable">
</div>
</body>
</html>
