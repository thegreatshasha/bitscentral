<?php
session_start();
$d=mysqli_connect('localhost','root','','users')
or die('error connecting to database');
if(isset($_SESSION['username'])&&isset($_SESSION['password']))
{$user=$_SESSION['username'];
$passw=$_SESSION['password'];
$query="SELECT * FROM userdata WHERE username=\"$user\" AND password=\"$passw\"";
$shub_pagal=mysqli_query($d,$query);
if(!empty($_SESSION['password'])&&!empty($_SESSION['username'])&&mysqli_num_rows($shub_pagal))
{header("Location: loginpage.php");}}
?>
<html>
<head>
</head>
<body>
<p>please login or signup</p>
<form action="login.php"method="post">
<label for="username">username</label>
<input type="text"id="username"name="username"><br>
<label for="password">password</label>
<input type="text"id="password"name="password"><br>
<input type="submit"value="login"><br>
<a href="loginpage.php"><b>click here to goto ur login page</b></a>
<a href="step1.php"><br><br><b>Signup</b><br></a>
</body>
</html>
