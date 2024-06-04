/* client000.js
 * -Client side functionality
 * (c) 2007 Centrum inc Software Solutions
 **********/
document.onload = simplePreload('img/nav_glossy_over.jpg');

function gebid(id)
{	return document.getElementById(id);}

function toggleDisplay(id)
{
	var elem = gebid(id);
	if(elem.style.display == '')
		elem.style.display = 'none';
	else
		elem.style.display = '';
}

/* fn isValidEmail()
 * input : string that is supposed to be an email-id
 * returns true if str is valid email else false
 * we are using regular expressions to validate it.
 */
function isValidEmail(str)
{	
	// Believe me, this will test for valid e-mail address and it works
	var regExp = /\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;	
	return regExp.test(str);
}
function getRandNum(limit){
	return(Math.round( (limit-1) * Math.random())) ;/*Round the number between 0 & limit */
}
/*
Upper Left Corner Live Clock Script- © Dynamic Drive (www.dynamicdrive.com)
For full source code, 100's more DHTML scripts, and TOS,
visit http://www.dynamicdrive.com
*/
function show5(){
 if (!document.layers&&!document.all&&!document.getElementById) return;
 var Digital=new Date();
 var hours=Digital.getHours();
 var minutes=Digital.getMinutes();
 var seconds=Digital.getSeconds();
 var dn="AM" ;
 if (hours>12){  dn="PM"; hours=hours-12; }
 if (hours==0) hours=12;
 if (minutes<=9) minutes="0"+minutes;
 if (seconds<=9) seconds="0"+seconds;

 myclock=hours+":"+minutes+":" +seconds+" "+dn;
 if (document.layers){
	document.layers.liveclock.document.write(myclock);
	document.layers.liveclock.document.close();
 }
 else if (document.all){
	liveclock.innerHTML=myclock;
 }
 else if (document.getElementById)
	document.getElementById("liveclock").innerHTML=myclock;
	setTimeout("show5()",1000);
}

// simplePreload( '01.gif', '02.gif' ); 
function simplePreload()
{ 
  var args = simplePreload.arguments;
  document.imageArray = new Array(args.length);
  for(var i=0; i<args.length; i++)
  {
    document.imageArray[i] = new Image;
    document.imageArray[i].src = args[i];
  }
}

//------------------------------------------
function validateForm(f)
{
	var isValid = true;
	var message = "Have a look at the following data.\n\n";
	if(f.uname.value == ""){isValid = false; message += "* Name cannot be empty\n";}
	if(f.ucollege.value == ""){isValid = false; message += "* College name must be specified\n";}
	if(f.mob_no.value == ""){isValid = false; message += "* Your contact number is needed.\n";}
	else if( isNaN(f.mob_no.value)) {{isValid = false; message += "* Hey, thats not your contact number.\n";}}
	
	if(!isValidEmail(f.mail_id.value)) {isValid = false; message += "* The mail id you provided is invalid.\n";}
	if(isValid) return true;
	
	alert(message);
	return false;
}