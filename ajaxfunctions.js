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



