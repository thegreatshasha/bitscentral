<?php
function printhostels()
{$d=mysqli_connect('localhost','root','','bitscentral')
or die('error connecting to databas');
$query="SELECT * FROM hostels";
$shub_pagal=mysqli_query($d,$query);
while($row=mysqli_fetch_array($shub_pagal))
echo '<option value="'.$row['hostel'].'">'.$row['hostel'].'</option>';}
?>
<html>
<head>
<title>
welcome please fillup the following details to proceed
</title>
</head>
<body>
<form enctype="multipart/form-data" action="step2.php"method="post">
<label for="name">name</label>
<input type="text"id="name"name="name"><br>
<label for="username">enter username</label>
<input type="text"id="username"name="username"><br>
<label for="password">password</label>
<input type="text"id="password"name="password"><br>
<label for="email">email id</label>
<input type="type"id="email"name="email"><br>
<label for="phoneno">enter phoneno</label>
<input type="text"id="phoneno"name="phoneno"><br>
<label for="hostel">select hostel</label>
<select "id="hostel"name="hostel"><?php printhostels(); ?></select><br>
<label for="roomno">enter roomno</label>
<input type="text"id="roomno"name="roomno"><br>
<label for="screenshot">upload scrrenshot</label>
<input type="file"name="screenshot"id="screenshpt"><br>
<input type="submit"value="login"><br>
</form>
</body>
</html>

