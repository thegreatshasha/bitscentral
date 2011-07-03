<html>
<head>
<script lang="text/javascript">
function ajacksfunction()
{var ajaxrequest=createajaxrequest();
		ajaxrequest.onreadystatechange=function()
{
	if(ajaxrequest.readyState==4)
	{document.getElementById('form').innerHTML=ajaxrequest.responseText;
	}
}
ajaxrequest.open("GET","insertsubjects2.php?nooffields="+formwa.nooffields.value+"&courseno="+formwa.courseno.value+"&comcode="+formwa.comcode.value+"&credits="+formwa.credits.value+"&compredate="+formwa.compredate.value,true);
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
<div id="form">
<form action="insertsubjects2.php"method="post" name="formwa">
<label for="nooffields">enter no of fields to be entered</label>
<input type="text"name="nooffields"id="nooffields"><br>
<label for="courseno">enter courseno</label>
<input type="text"id="courseno"name="courseno"><br>
<label for="comcode">enter comcode</label>
<input type="text"id="comcode"name="comcode"><br>
<label for="credits">enter credits</label>
<input type="text"id="credits"name="credits"><br>
<label for="compredate">enter compredate</label>
<input type="text"id="compredate"name="compredate"><br>
<input type="button"onclick="ajacksfunction();">
</form>
</div>
</body>
</html>
