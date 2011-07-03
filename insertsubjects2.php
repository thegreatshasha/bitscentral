<?php
$nooffields=$_GET['nooffields'];
$courseno=str_replace(' ','$',$_GET['courseno']);
$comcode=$_GET['comcode'];
$credits=$_GET['credits'];
$compredate=$_GET['compredate'];
$dbc1 =mysqli_connect('localhost','root','','bitscentral')
        or die('error connecting to server').'<br>';
$query1="SELECT * FROM subjectdata where comcode=\"$comcode\" OR courseno=\"$courseno\"";
$result=mysqli_query($dbc1,$query1);
echo mysqli_num_rows($result);
if(mysqli_num_rows($result)==0)
{
	$query2="INSERT INTO subjectdata(courseno,comcode,credits,compredate) VALUES('$courseno','$comcode','$credits','$compredate');";
	echo $query2;
	$result2=mysqli_query($dbc1,$query2) or die('error inserting inside subjectdata maybe comcode not numeric');
}
else
{
	echo 'sorry required field already exists gotta delete it first';
}
echo '<form action="insertsubjects3.php"method="post">';
echo '<input type="hidden" id="nooffields" name="nooffields" value="'.$nooffields.'" />';
echo '<input type="hidden"id="courseno" name="courseno"value="'.$courseno.'"><br>';
for($i=1;$i<=$nooffields;$i++)
{	echo '<label for='.$i.$i.'>sec for field '.$i.'</label>';
	echo '<input type="text"id='.$i.$i.' name="'.$i.$i.'"><br>';
	echo '<label for='.$i.$i.$i.'>instructor for field '.$i.'</label>';
	echo '<input type="text"id='.$i.$i.$i.' name="'.$i.$i.$i.'"><br>';
	echo '<label for='.$i.$i.$i.$i.'>room for field '.$i.'</label>';
	echo '<input type="text"id='.$i.$i.$i.$i.' name="'.$i.$i.$i.$i.'"><br>';
	echo '<label for='.$i.$i.$i.$i.$i.'>days for field '.$i.'</label>';
	echo '<input type="text"id='.$i.$i.$i.$i.$i.' name="'.$i.$i.$i.$i.$i.'"><br>';
	echo '<label for='.$i.$i.$i.$i.$i.$i.'>tut info for field '.$i.'</label>';
	echo '<input type="text"id='.$i.$i.$i.$i.$i.$i.' name="'.$i.$i.$i.$i.$i.$i.'"><br>';
}
echo '<input type="button" onclick="ajacksfunction();"></form>'
?>
