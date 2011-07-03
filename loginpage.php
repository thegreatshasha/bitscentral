<?php
require_once('authenticate.php');
require_once('printusers.php');
require_once('printcommunity.php');
require_once('displayonlineusers.php');
if(!isset($_SESSION['online']))
{
$_SESSION['online']=1;
	$d=mysqli_connect('localhost','root','','users');
	$username=$_SESSION['username'];
	$REMOTE_ADDR=$_SERVER['REMOTE_ADDR'];
	$insert=mysqli_query($d, "INSERT INTO useronline (username,ip) VALUES ('$username','$REMOTE_ADDR')");
	if(!($insert)) {
	print "Useronline Insert Failed > ";
	}
}
?>
<html>
<head>
<title>
welcome
</title>
<script type="text/javascript" src="loginpage.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="chat.js"></script>
<link type="text/css" rel="stylesheet" media="all" href="css/chat.css" />
<link type="text/css" rel="stylesheet" media="all" href="css/screen.css" />
</head>
<body onload="startLoop();var snd = new Audio('Fart.ogg');
snd.play();">
<div id="main_container">
<div id="bitslogo" style="float:right;"><img src="images/bitslogo.jpg" height="200"></div>
<h1>hey there how's it going</h1>
<a href="createtable1.php">please click here to fill your details</a><br>
<a href="generatet.php">click here to see your rimetable after filling your details</a><br>
<a href="displaydetails.php">Click here to see your section details</a><br>
<a href="logout.php">click here to logout</a><br>
<h3><a href="./chat">ajax chatroom</a></h3>
<h3><a href="./kerphi">freephp chatroom</a></h3>
<h3>downloads section</h3>
<a href="timetable.pdf">timetable</a>
<a href="studentsearch.php">student search</a><br>
<div style="float:right">onlineusers
<div id="online"style="width:200px;border:1px solid black;padding:5px;"><?php displayonlineusers(); ?></div></div>
inbox<br>
<div id="chat" style="height:300px;width:1050px;font:16px/26px Georgia, Garamond, Serif;overflow:auto;border:1px solid black;padding:5px;"></div>
<div id="writemessage">
<form action="writemessage2.php" name="form2">
to<select id="users"name="users"><?php printusers(); ?></select><br>
text<input type="text"id="messa"name="messa"size="128"><br>
<input type="button" onclick="sendmessage();"><br>
</form>
</div>
<div id="community">
<h3>start a community</h3>
<form id="communityform" name="communityform">
community-name<br>
<input type="text"id="cname"name="cname">
<input type="button"onclick="submitcommuntiy();">
</form>
<span id="cresult"></span>
<h3>community message</h3>
<form action="communitymessage.php" name="communityform2">
to<select id="communityname"name="communityname"><?php printcommuntiy(); ?></select><br>
text<input type="text"id="communitymessage"name="communitymessage"><br>
<input type="button" onclick="communitymassage();"><br>
</form>
<h3>add someone to your community</h3>
<form name="addcommunity">
add<select id="addusers"name="addusers"><?php printusers(); ?></select><br>
to<select id="communityadd"name="communityadd"><?php printcommuntiy(); ?></select><br>
<input type="button" onclick="addusertocom();">
</form>
<span id="adduserstat"></span>
<audio src="Fart.ogg" controls="controls">
Your browser does not support the audio element.
</audio>
</div>
</div>
</body>
</html>
