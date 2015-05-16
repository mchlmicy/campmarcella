//Function called from document.
function chooseStyle(title, days)
{
	//If element exists in document...
	if(document.getElementById)
	{
		setStylesheet(title);
		setCookie("selectedtitle", title, days);
	}
}

//Sets new cookie, called by chooseStyle() function.
function setCookie(selectedtitle, title, days) 
{
	var expireDate = new Date();

	//Set cookie expiration date
	var expstring=(typeof days!="undefined")? expireDate.setDate(expireDate.getDate()+parseInt(days)) : expireDate.setDate(expireDate.getDate()-5);
	document.cookie = selectedtitle+"="+title+"; expires="+expireDate.toGMTString()+"; path=/";
}

//Calls the getCookie() function, saves value as selectedtitle.
var selectedtitle = getCookie("selectedtitle");

//Gets stored cookie if it exists.
function getCookie(selectedtitle) 
{ 
	//Construct regression expression to search for target name/value pair
	var re = new RegExp(selectedtitle+"=[^;]+", "i"); 
	
	//If cookie found...
	if (document.cookie.match(re)) 
	{
		//Return the value of the cookie
		return document.cookie.match(re)[0].split("=")[1]; 
	}
	
	return null;
}

//If element exists and getCookie doesn't return null...
if (document.getElementById && selectedtitle!=null) 
{
	setStylesheet(selectedtitle);
}

//Function called by chooseStyle(), sets chosen stylesheet.
function setStylesheet(title)
{ 
	var cacheobj, altsheets=[""];
	
	//For every element in the document with a '<link>' tag...
	//Save each as an object (the same one) of the '<link>' tag at an index of the for loop, then...
	for(var x=0; (cacheobj=document.getElementsByTagName("link")[x]); x++) 
	{
		//If 'rel' is set to "alternate stylesheet" and a 'title' exists...
		if(cacheobj.getAttribute("rel").toLowerCase()=="alternate stylesheet" && cacheobj.getAttribute("title")) 
		{
			//Disable every incoming object
			cacheobj.disabled = true;

			//Save objects as altsheets
			altsheets.push(cacheobj); 
			
			//If the title of the object matches the selected title...
			if(cacheobj.getAttribute("title")==title) 
			{
				//Enable the chosen style sheet
				cacheobj.disabled = false;
			}

		}
	}	
}

function deleteCookie(selectedtitle){	setCookie(selectedtitle, "none"); }
