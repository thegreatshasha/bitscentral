<?php
function printhostels()
{$d=mysqli_connect('localhost','root','','bitscentral')
or die('error connecting to databas');
$query="SELECT * FROM hostels";
$shub_pagal=mysqli_query($d,$query);
echo '<option value="">all</option>';
while($row=mysqli_fetch_array($shub_pagal))
echo '<option value="'.$row['hostel'].'">'.$row['hostel'].'</option>';}
?>
<html>
<head>
<title>
search student
</title>
<script lang="text/javascript">
var prev1;var next1;var prev2;var next2;var prev3;var next3;
function ajacksfunction()
{var ajaxrequest=createajaxrequest();
		ajaxrequest.onreadystatechange=function()
{
	if(ajaxrequest.readyState==4)
	{document.getElementById('results').innerHTML=ajaxrequest.responseText;
	}
	if(ajaxrequest.readyState==1||ajaxrequest.readyState==2||ajaxrequest.readyState==2)
	{document.getElementById('results').innerHTML="<img src=\"ajax-loader.gif\">";
	}
}
ajaxrequest.open("GET","search.php?search="+formwa.search.value+"&hostel="+formwa.hostel.value+"&email="+formwa.email.value,true);
ajaxrequest.send(null);
}
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
function setinitvalues()
{
	prev3=formwa.hostel.value;prev2=formwa.email.value;prev1=formwa.search.value;
}
function startLoop() 
{
    myInterval = setInterval( "updatevariables()", 100 );  // run
}
function updatevariables()
{
	next3=formwa.hostel.value;next2=formwa.email.value;next1=formwa.search.value;
	if(next3!=prev3){prev3=next3;ajacksfunction();}
	if(next2!=prev2){prev2=next2;ajacksfunction();}
	if(next1!=prev1){prev1=next1;ajacksfunction();}
}
</script>
</head>
<body onload="startLoop();">
<form action="search.php" method="post" name="formwa">
<label for="search">search by name</label>
<input type="text"id="search"name="search"onfocus="setinitvalues();"><br>
<label for="email">search by email</label>
<input type="text"id="email"name="email"onfocus="setinitvalues();"><br>
<label for="hostel">search by hostel</label>
<select id="hostel" name="hostel"onfocus="setinitvalues();"><?php printhostels(); ?></select><br>
<!label for="sub">click to submit</label>
<!input type="submit">
<br>
</form>
<div id="results">
</div>
</body>
</html>
