<?php include("site_variables.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Style Sheets -->
<link href="am_common.css" type="text/css" rel="stylesheet" />
<link href="am_layout.css" type="text/css" rel="stylesheet" />
<link href="imageMen.css" type="text/css" rel="stylesheet" />
<!-- Client side scripts -->
<script language="javascript1.2" src="swfobject.js" type="text/javascript"></script>
<script language="javascript1.2" src="client000.js" type="text/javascript"></script>
<script language="javascript1.2" src="mootools.js" type="text/javascript"></script>
<script language="javascript1.2" src="imageMen.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome to Ambience '07 - where professionals meet :: Home Page of the National level Technical Symposium</title>
</head>

<body onload="show5();simplePreload('img/nav_glossy_over.jpg');">
<div align="center">
<div id="outer_wrapper" align="center" style="text-align:left;">
<table width="960" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="466"><img src="img/ambience_logo_big.jpg" height="88" width="346" alt="Ambience '07" /></td>
    <td width="304" valign="top">
	<!-- Core info placed here -->
	<div align="right">
	<table width="250" border="0" cellpadding="0" cellspacing="0" class="tbl_content">
      <tr>
        <td colspan="2" class="tbl_data"><div align="center" id="eventDateInfo"><img src="img/top_ad_date.jpg" height="60" width="250" alt="Event Date" /></div></td>
      </tr>
      <tr>
        <td><div align="left"><img src="img/body_btm_left.jpg" width="19" height="16" /><script language="javascript1.2">var ed = new SWFObject("eventCountDown.swf", "date", "250", "70", "6");   ed.write("eventDateInfo");</script></div></td>
        <td><div align="right"><img src="img/body_btm_right.jpg" width="19" height="16" /></div></td>
      </tr>
    </table>
</div></td>
  </tr>
</table>
<table width="960" border="0" cellpadding="0" cellspacing="0" id="inner-table" bgcolor="#FFFFFF">
  <tr>
    <td height="117" colspan="2">
	<img src="img/body_top_left.jpg" width="19" height="15" style="float:left" />
	<div id="content">
		<div id="top_data" style="margin-bottom:1em">
			<div id="top_date"><span id="liveclock"></span></div>
			<div id="top_links"><a href="user_registration.php">Register</a> /  
			<a href="show_data.php?dataId=<?php echo $dataResourc;?>">Resources</a> / 
			<a href="show_data.php?dataId=<?php echo $dataNews;?>">News</a> / 
			<a href="show_data.php?dataId=<?php echo $dataContact;?>">Contact</a> / 
			<a href="show_data.php?dataId=<?php echo $dataSitemap;?>">Sitemap</a></div>
	</div>
	<br />
	<table width="770" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="160" height="179"><!-- Load MainNav -->
      <?php include("main_navigation.php"); ?></td>
    <td width="610" align="center" valign="middle">
<div id="kwick">
  <ul class="kwicks">
	<a href="event_details.php?dataId=<?php echo $evtPaper;?>">
		<li style="width:90px;" class="kwick opt1"><span>Ilm Talk</span></li></a>
	<a href="event_details.php?dataId=<?php echo $evtTechno;?>">
		<li style="width: 90px;" class="kwick opt2"><span>AmbiDextrous</span></li></a>
	<a href="event_details.php?dataId=<?php echo $evtWebDez;?>">
		<li style="width: 90px;" class="kwick opt3" ><span>Lorem Ipsum</span></li></a>
	<a href="event_details.php?dataId=<?php echo $evtProg;?>">
		<li style="width: 90px;" class="kwick opt4"><span>Conundrum</span></li></a>
	<a href="event_details.php?dataId=<?php echo $evtQuiz;?>">
		<li style="width: 90px;" class="kwick opt5"><span>Tech Quiz</span></li></a>
	<a href="event_details.php?dataId=<?php echo $evtGaming;?>">
		<li style="width: 90px;" class="kwick opt6"><span>Fatality</span></li></a>
  </ul>
</div>
<script type="text/javascript">
	var myMenu = new ImageMenu($$('#kwick .kwick'),{openWidth:250,onclick:document.location});
</script></td>
  </tr>
</table>

	<h3>A fitting finally to the great event</h3>
	<p>The mega event - Ambience '07 was very successful with all events going as pre planned and with minimum delays. There were cultural events to grip the attention of audiences when prelims of the competitions were going on. Around 150 participants from about 60 colleges registered for the various events. The response was overwhelming and phenomenal. Deciding the winners in most events was a challenge as the contestants were close in their performances  and technical know how. <a href="show_data.php?dataId=<?php echo $dataResults;?>">more &raquo;</a> </p>
	<h3>A word about Ambience </h3>
	<div id="sponsors_wrapper" class="floatR" style="height:400px;">
	  <h3>Latest news</h3>
	  <p>&middot; Check out the gallery <a href="am_gallery.php">here</a>. (9/11) </p>
	  <p>&middot; <span style="font-weight:bold; color:#FF3300;">See the Event Results.</span> <a href="show_data.php?dataId=<?php echo $dataResults;?>">more &raquo;</a> (1/11) </p>
	  <p>&middot; Check out the resources page for useful stuff and information. <a href="show_data.php?dataId=<?php echo $dataResourc;?>">more &raquo; </a>(12/10) </p>
	  <p>&middot; Register online now. <a href="user_registration.php">more &raquo;</a></p>
	  <p>. Installed the event countdown clock on the homepage. <a href="show_data.php?dataId=<?php echo $dataContact;?>">more &raquo;</a></p>
	  <p>. Curious to find out more about who goes behind all the design, development and maintanence of all graphical works and the website for Ambience '07? <a href="show_data.php?dataId=<?php echo $dataAbout;?>">more &raquo;</a></p>
	  <p><br />
	    <a href="show_data.php?dataId=<?php echo $dataSelTopic;?>"></a></p>
	  </div>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;Ambiece '07 is all about the calm mood offered by the environment where  technocrats from all over the country are united within a single campus. It is the soothing force that brings out the best from  techinical minds. The Computer Science and Engineering Association of Mangalam College of Engineering, Comets is proud to present Ambience '07, the National level Technical Symposium, the first of its kind to be organised in our college.</p>
	  <p>&nbsp;&nbsp;&nbsp;&nbsp;There are 6 technical events to be held and all news and updates this is one source you can have all information that you need from this website. The events are</p>
	  <ul class="items_list">
	    <li> Ilm Talk (Paper Presentation)</li>
	    <li>Conundrum (C Programming)</li>
	    <li>Lorem Ipsum (Web Designing)</li>
	    <li>Fatality (Network Gaming)</li>
	    <li>Manoucre (Technical Quiz)</li>
	    <li> Ambi Dextrous (Best Technocrat)</li>
	</ul>
	  <p>&nbsp;&nbsp;&nbsp; More information about each of these events, the rules and regulations are available under the events page of this site. There is a prize for the <span class="emphasis">best college</span> for maximum points scored. So take this chance to edge the name of your college as the first college to win the coveted <span class="emphasis">Ambience - Best College Trophy</span>. </p>
 	  <p>&nbsp;&nbsp;&nbsp;&nbsp;The dictionary puts ambience as &quot;a particular mood or atmosphere of an environment or surrounding influence&quot; and a technocrat as &quot;a technical expert&quot;. So Ambience '07 is the environment where technocrats from all over the country unite to share their knowledge. </p>
      <p>&nbsp;&nbsp;&nbsp;&nbsp;The events are planned to be held on 29th and 30th of October 2007. Any changes will be reflected here on this site. Registration can be done online, via SMS or on the spot. But we recomend that you register via this site or via SMS.</p>
      </div></td>
  </tr>
  <tr height="16">
    <td><div align="left"><img src="img/body_btm_left.jpg" width="19" height="16" /></div></td>
    <td><div align="right"><img src="img/body_btm_right.jpg" width="19" height="16" /></div></td>
  </tr>
</table>
<div style="height:2px">&nbsp;</div>
<table width="770" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<td><a href="http://www.freedomain.co.nr/" target="_blank">
<img src="http://cemmmma.ne.com.ru/soof62.gif" width="88" height="31" border="0" alt="Free Domain Name Service" /></a></td>
    <td width="19" align="right" valign="top" background="img/footer_bg.jpg"><img src="img/footer_left.jpg" width="19" height="29" /></td>
    <td width="680" background="img/footer_bg.jpg">
	<div id="footer">Powered by <a href="http://www.angelsvista.com" title="Angelsvista" target="_blank">Angelsvista</a> / Design and Maintanence &copy; 2007 <a href="http://www.geocities.com/mhkonline2/ae/index.html" title="Ae" target="_blank">Artistik expressionz</a></div></td>
    <td width="20" align="left" valign="top" background="img/footer_bg.jpg">
	<div align="right"><img src="img/footer_right.jpg" width="19" height="29" /></div></td>
  </tr>
</table>
</div></div>
</body>
</html><!-- Site Designed and maintained by ae Artistik Expressionz (http://www.geocities.com/mhkonline2/)-->