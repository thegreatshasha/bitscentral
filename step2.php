<html>
<head>
<title>
please fillup the following details next
</title>
</head>
<body>
<?php
if(!empty($_POST['name'])&&!empty($_POST['email'])&&!empty($_POST['phoneno'])&&is_numeric($_POST['phoneno'])&&!empty($_POST['username'])&&!empty($_POST['password']))
{
        $dbc =mysqli_connect('localhost','root','','users')
        or die('error connecting to server').'<br>';
        $name=mysqli_real_escape_string($dbc,$_POST['name']);
        $emailid=mysqli_real_escape_string($dbc,$_POST['email']);
	$phoneno=mysqli_real_escape_string($dbc,$_POST['phoneno']);
	$username=mysqli_real_escape_string($dbc,$_POST['username']);
	$password=mysqli_real_escape_string($dbc,$_POST['password']);
	$target='images/'.mysqli_real_escape_string($dbc,$_FILES['screenshot']['name']);
	$hostel=mysqli_real_escape_string($dbc,$_POST['hostel']);
	$roomno=mysqli_real_escape_string($dbc,$_POST['roomno']);
	//$d=mysqli_connect('localhost','root','','bitscentral')
	//or die('error connecting to database');
	$testquery="SELECT * FROM userdata where username=\"$username\"";
	$res=mysqli_query($dbc,$testquery);
	if(!mysqli_num_rows($res))
	{
		move_uploaded_file($_FILES['screenshot']['tmp_name'],$target);
		$qr="INSERT INTO userdata (name,phoneno,email,username,password,screenshot,hostel,roomno)VALUES('$name','$phoneno','$emailid','$username','$password','$target','$hostel','$roomno')";
		$result=mysqli_query($dbc,$qr)
		or die('error coonected fine but couldn\'t insert');
		echo '<h3><font color="green">your name is'.$name.'</font></h3>';
		echo '<h3><font color="red">your email id is'.$emailid.'</font></h3>';
		echo '<h3><font color="blue">your data has been stored successfully'.'</font></h3>';
		//echo 'your ip is'.$_SERVER['REMOTE_ADDR'].'<br>';
		$sql = "CREATE TABLE $username"."_inbox (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,message TEXT NOT NULL);";
		$result2=mysqli_query($dbc,$sql) or die('error in database creation');
		$sql2 = "CREATE TABLE $username"."_community (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,communityname TEXT NOT NULL);";
		$result3=mysqli_query($dbc,$sql2);
		mysqli_close($dbc);
	}
	else
	{echo '<font color="red"><h2>username already taken please select a different username</h2></font>';require_once('step1.php');}
	
}
else
{
echo '<h1><font color="green">you left one or more fields blank or field in incorrect format please go back and reenter</font></h1>';
}
?>
<p>please login n fill ur subject details next</p>
</body>
</html>
