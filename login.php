<?php
if(!isset($_SESSION['username'])||!isset($_SESSION['password']))
{
        session_start();
        $_SESSION['username']=$_POST['username'];
        $_SESSION['password']=$_POST['password'];
}
//check if username and password exists in database
$d=mysqli_connect('localhost','root','','users')
or die('error connecting to database');
$user=$_SESSION['username'];
$passw=$_SESSION['password'];
echo $user.$passw;
$query="SELECT * FROM userdata WHERE username=\"$user\" AND password=\"$passw\"";
$queryresult=mysqli_query($d,$query);
$row=mysqli_fetch_array($queryresult);
if(!mysqli_num_rows($queryresult))
{
        echo 'invalid login try again'.$user.$passw;
        //header("Location: index.html");
        echo mysqli_num_rows($queryresult);
        require_once('index.php');
}
else
{$_SESSION['ID']=$row['ID'];
header("Location: loginpage.php");
}
?>
