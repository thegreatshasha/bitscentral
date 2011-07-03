
function startLoop() {
    myInterval = setInterval( "ajacksfunction();", 2000 );  // run
    myInterval2 = setInterval( "printonlineusers();", 6000 );
}
function ajacksfunction()
{var ajaxrequest=createajaxrequest();
		ajaxrequest.onreadystatechange=function()
{
	if(ajaxrequest.readyState==4)
	{//document.myForm.time.value
	//if(ajaxrequest.responseText==0)
	document.getElementById('chat').innerHTML=ajaxrequest.responseText;
	//else
	//document.getElementById('usrerror').innerHTML="user already exists";
	}
}
ajaxrequest.open("GET","printmessages.php",true);
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
function sendmessage()
{
	ajarequest=createajaxrequest();
	ajarequest.open("GET","writemessage2.php?users="+form2.users.value+"&message="+form2.messa.value,true);
	ajarequest.send(null);
	form2.messa.value="";
}
function submitcommuntiy()
{
	var ajaxrequest=createajaxrequest();
	ajaxrequest.onreadystatechange=function()
	{
	if(ajaxrequest.readyState==4)
		{	//document.myForm.time.value
		document.getElementById('cresult').innerHTML=ajaxrequest.responseText;updatelists();
		updatelists();
		}
	}
	var random=Math.floor(Math.random()*100000);
	ajaxrequest.open("GET","createcommunity.php?name="+communityform.cname.value+"&password="+random.toString(),true);
	ajaxrequest.send(null);
}
function communitymassage()
{
	var ajaxrequest=createajaxrequest();
	//ajaxrequest.onreadystatechange=function()
	/*{
	if(ajaxrequest.readyState==4)
		{	//document.myForm.time.value
		document.getElementById('cresult').innerHTML=ajaxrequest.responseText;
		}
	}*/
	var stri="communitymessage.php?communityname="+communityform2.communityname.value+"&message="+communityform2.communitymessage.value;
	ajaxrequest.open("GET",stri,true);
	ajaxrequest.send(null);
	//alert(stri);
}
function addusertocom()
{
	var ajaxrequest=createajaxrequest();
	ajaxrequest.onreadystatechange=function()
	{
	if(ajaxrequest.readyState==4)
		{	//document.myForm.time.value
		document.getElementById('adduserstat').innerHTML=ajaxrequest.responseText;//updatelists();
		}
	}
	var stri="addusers.php?user="+addcommunity.addusers.value+"&community="+addcommunity.communityadd.value;
	ajaxrequest.open("GET",stri,true);
	ajaxrequest.send(null);
	
}
function updatelists()
{
	var ajaxrequest=createajaxrequest();
	ajaxrequest.onreadystatechange=function()
	{
	if(ajaxrequest.readyState==4)
		{	//document.myForm.time.value
		document.getElementById('communityname').innerHTML=ajaxrequest.responseText;
		document.getElementById('communityadd').innerHTML=ajaxrequest.responseText;
		}
	}
	var stri="printcommunity.php?update=1";
	ajaxrequest.open("GET",stri,true);
	ajaxrequest.send(null);
	var ajaxrequest2=createajaxrequest();
	ajaxrequest2.onreadystatechange=function()
	{
	if(ajaxrequest2.readyState==4)
		{	//document.myForm.time.value
		document.getElementById('users').innerHTML=ajaxrequest2.responseText;
		document.getElementById('addusers').innerHTML=ajaxrequest2.responseText;
		}
	}
	var stri="printusers.php?update=1";
	ajaxrequest2.open("GET",stri,true);
	ajaxrequest2.send(null);

}
function printonlineusers()
{
	var ajaxrequest=createajaxrequest();
	ajaxrequest.onreadystatechange=function()
	{
	if(ajaxrequest.readyState==4)
		{	//document.myForm.time.value
		document.getElementById('online').innerHTML=ajaxrequest.responseText;
		}
	}
	var stri="displayonlineusers.php?update=1";
	ajaxrequest.open("GET",stri,true);
	ajaxrequest.send(null);
}
function loguserout()
{
	var ajaxrequest=createajaxrequest();
	var stri="logout.php";
	ajaxrequest.open("GET",stri,true);
	ajaxrequest.send(null);
}
function playSound(sound)
{
	var snd = new Audio(sound);
	snd.play();
}
