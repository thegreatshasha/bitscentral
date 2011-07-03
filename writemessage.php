<?php 
function printusers()
{$d=mysqli_connect('localhost','root','','users');
$qr="SELECT * FROM userdata";
$result=mysqli_query($d,$qr);
while($row=mysqli_fetch_array($result))
{echo '<option value='.$row['username'].'>'.$row['username'].'</option>';}
}
?>
<html>
<head>
</head>
<body>
<form action="writemessage2.php">
to<select id="users"name="users"><?php printusers(); ?></select><br>
text<input type="text"id="message"name="message"><br>
<input type="submit"><br>
</form>
</body>
</html>
