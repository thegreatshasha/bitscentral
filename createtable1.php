<?php
function printhi()
{echo 'hi';}
function printoptions()
{$d=mysqli_connect('localhost','root','','bitscentral')
or die('error connecting to database');
$query="SELECT * FROM subjectdata";
$shub_pagal=mysqli_query($d,$query);
while($row=mysqli_fetch_array($shub_pagal))
{echo '<option value="'.$row['courseno'].'">'.$row['title'].'</option>';}
}
?>
<html>
<head>
<script lang="text/javascript">
function generateid()
{
	var string="pseudogen.php?";
	var k=1;
	for(var k=1;k<=8;k++)
	{	var select=document.getElementById(k.toString()).value;
		var lect=document.getElementById(k.toString()+k.toString()).value;
		var tut=document.getElementById(k.toString()+k.toString()+k.toString()).value;
		var prac=document.getElementById(k.toString()+k.toString()+k.toString()+k.toString()).value;
		if(lect!=null&&lect!='')
		{string+=select+"_l="+lect+"&";}
		if(tut!=null&&tut!='')
		{string+=select+"_t="+tut+"&";}
		if(prac!=null&&prac!='')
		{string+=select+"_p="+prac+"&";}
	}
	//alert(string.substring(0,string.length-1));
	var ajaxrequest=createajaxrequest();
		ajaxrequest.onreadystatechange=function()
	{
		if(ajaxrequest.readyState==4)
		{//document.myForm.time.value
		//if(ajaxrequest.responseText==0)
		document.getElementById('preview').innerHTML=ajaxrequest.responseText;
		//else
		//document.getElementById('usrerror').innerHTML="user already exists";
		}
	}	
	ajaxrequest.open("GET",string,true);
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
</script>
</head>
<body>
please fillup the following form to sumbit ur results
<form action="createtable.php"method="post">
<table cellpadding=2 cellspacing=2 border=2>
<th></th>
<th>COURSE</th>
<th>LECT SECTION</th>
<th>TUT SECTION</th>
<th>PRAC SECTION</th>
<tr><td><label for="1">enter deta fr subject 1</label></td>
<td><select id="1"name="1"><?php printoptions(); ?></select></td><td><input type="text"id="11"name="11"onchange="generateid();"></td><td><input type="text"id="111"name="111"onchange="generateid();"></td><td><input type="text"id="1111"name="1111"onchange="generateid();"></td></tr>
<tr><td><label for="2">enter data fr subject 2</label></td>
<td><select id="2"name="2"><?php printoptions(); ?></select></td><td><input type="text"id="22"name="22"onchange="generateid();"></td><td><input type="text"id="222"name="222"onchange="generateid();"></td><td><input type="text"id="2222"name="2222"onchange="generateid();"></td></tr>
<tr><td><label for="3">enter data fr subject 3</label></td>
<td><select id="3"name="3"><?php printoptions(); ?></select></td><td><input type="text"id="33"name="33"onchange="generateid();"></td><td><input type="text"id="333"name="333"onchange="generateid();"></td><td><input type="text"id="3333"name="3333"onchange="generateid();"></td></tr>
<tr><td><label for="4">enter data fr subject 4</label></td>
<td><select id="4"name="4"><?php printoptions(); ?></select></td><td><input type="text"id="44"name="44"onchange="generateid();"></td><td><input type="text"id="444"name="444"onchange="generateid();"></td><td><input type="text"id="4444"name="4444"onchange="generateid();"></td></tr>
<tr><td><label for="5">enter data fr subject 5</label></td>
<td><select id="5"name="5"><?php printoptions(); ?></select></td><td><input type="text"id="55"name="55"onchange="generateid();"></td><td><input type="text"id="555"name="555"onchange="generateid();"></td><td><input type="text"id="5555"name="5555"onchange="generateid();"></td></tr>
<tr><td><label for="6">enter data fr subject 6</label></td>
<td><select id="6"name="6"><?php printoptions(); ?></select></td><td><input type="text"id="66"name="66"onchange="generateid();"></td><td><input type="text"id="666"name="666"onchange="generateid();"></td><td><input type="text"id="6666"name="6666"onchange="generateid();"></td></tr>
<tr><td><label for="7">enter data fr subject 7</label></td>
<td><select id="7"name="7"><?php printoptions(); ?></select></td><td><input type="text"id="77"name="77"onchange="generateid();"></td><td><input type="text"id="777"name="777"onchange="generateid();"></td><td><input type="text"id="7777"name="7777"onchange="generateid();"></td></tr>
<tr><td><label for="8">enter data fr subject 8</label></td>
<td><select id="8"name="8"><?php printoptions(); ?></select></td><td><input type="text"id="88"name="88"onchange="generateid();"></td><td><input type="text"id="888"name="888"onchange="generateid();"></td><td><input type="text"id="8888"name="8888"onchange="generateid();"></td></tr>
<tr><td><input type="submit"></tr>
</table>
</form>
<div id="preview">
</div>
</body>
</html>
