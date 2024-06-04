<?php include("site_variables.php"); 

error_reporting(0);

include("db_connect.php");

$hasData = false;
$sql = "SELECT * FROM registration";
$currList = "All";
if( isset($_REQUEST["sortby"]) )
{
	$evt = "";
	switch($_REQUEST["sortby"])
	{
		case "evt1" : $evt = "event1"; $currList = "Paper Presentation"; break;
		case "evt2" : $evt = "event2"; $currList = "C Programming"; break;
		case "evt3" : $evt = "event3"; $currList = "Web Designing"; break;
		case "evt4" : $evt = "event4"; $currList = "Best Technocrat"; break;	
		case "evt5" : $evt = "event5"; $currList = "Network Gaming"; break;
		case "evt6" : $evt = "event6"; $currList = "Technical Quiz"; break;
	}
	$sql = "SELECT * FROM registration WHERE $evt = 1";
//	echo $sql;
}

$res = mysql_query($sql,$db);

if($res) $hasData = true;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Style Sheets -->
<link href="am_common.css" type="text/css" rel="stylesheet" />
<link href="am_layout.css" type="text/css" rel="stylesheet" />
<!-- Client side scripts -->
<script language="javascript1.2" src="swfobject.js" type="text/javascript"></script>
<script language="javascript1.2" src="client000.js" type="text/javascript"></script>
<style type="text/css">
.c1{ background-color:#f4f4f4;}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome to Ambience '07 :: Welmcome MHK</title>
</head>

<body onload="show5();"><div align="center">
<div id="outer_wrapper" align="center" style="text-align:left;">
<table width="770" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="466"><img src="img/ambience_logo_big.jpg" height="88" width="346" alt="Ambience '07" /></td>
    <td width="304" valign="top">
	<!-- Core info placed here -->
	<div align="right">
	<table width="250" border="0" cellpadding="0" cellspacing="0" class="tbl_content">
      <tr>
        <td colspan="2" class="tbl_data"><div align="center"><img src="img/top_ad_register.jpg" alt="Register via SMS" width="250" height="60" /></div></td>
      </tr>
      <tr>
        <td><div align="left"><img src="img/body_btm_left.jpg" width="19" height="16" /></div></td>
        <td><div align="right"><img src="img/body_btm_right.jpg" width="19" height="16" /></div></td>
      </tr>
    </table>
</div></td>
  </tr>
</table>
<table width="770" border="0" cellpadding="0" cellspacing="0" id="inner-table" bgcolor="#FFFFFF">
  <tr>
    <td height="117" colspan="2">
	<img src="img/body_top_left.jpg" width="19" height="15" style="float:left" />
	<div id="content">
		<div id="top_data">
			<div id="top_date"><span id="liveclock"></span></div>
			<div id="top_links"><a href="user_registration.php">Register</a> /  
			<a href="show_data.php?dataId=<?php echo $dataNews;?>">News</a> / 
			<a href="show_data.php?dataId=<?php echo $dataContact;?>">Contact</a> / 
			<a href="show_data.php?dataId=<?php echo $dataSitemap;?>">Sitemap</a></div>
	</div>
	<br />
	<table width="770" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="172">
<?php include("main_navigation.php"); ?>		</td>
        <td width="598" align="center" valign="middle">
		<div id="fma"><img src="fma/fma_home_alt.jpg" height="160" width="590" /></div>		</td>
   </tr>
  </table>
	<h4>Administrator Control Panel </h4>
	<p>Clcik on an event name to list participants registered in only that event. </p>
	<!-- If we have data, pump it out -->
<?php
if($hasData)
{
	echo "<p>Currently listing <b>$currList</b>. <a href='am_management.php'>List All Data</a></p>";
	// start to pump out data
	$i = 0;
	echo "<table border='0' width='760' cellspacing=0 cellpadding=5>";
	echo "<tr align='center'><td>#</td><td>Name</td><td>College</td><td>contact</td><td>@ mail-Id</td><td>Accom</td>";
	echo "<td><a href='am_management.php?sortby=evt1'>PP</a></td>";
	echo "<td><a href='am_management.php?sortby=evt2'>CP</a></td>";
	echo "<td><a href='am_management.php?sortby=evt3'>WD</a></td>";
	echo "<td><a href='am_management.php?sortby=evt4'>BT</a></td>";
	echo "<td><a href='am_management.php?sortby=evt5'>NG</a></td>";
	echo "<td><a href='am_management.php?sortby=evt6'>TQ</a></td>";
	echo "<tr><td colspan='12'><hr noshade='noshade' style='height:1px;' color='#FF9900' /></td></tr>";
	while( $row = mysql_fetch_row($res) )
	{
		$i++;
		echo "<tr align=center><td>$i</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td>";
		echo "<td class=c1>$row[6]</td><td>$row[7]</td><td class=c1>$row[8]</td><td>$row[9]</td>";
		echo "<td class=c1>$row[10]</td><td>$row[11]</td>";
	}
	echo "</table>";
	echo "<p>There are <b>$i</b> items listed.</p>";
?>
<hr noshade="noshade" style="height:1px;" color="#FF9900" />
<br />
<div class="floatR"><a href="#nogo" onclick="toggleDisplay('legend');">Show/Hide Legend</a></div>
<div id="legend" style="display:none;">
<h4>Legend</h4>
<ul class="items_list">
  <li>Accom - Accomodation Required</li>
  <li>PP - Paper Presentation</li>
  <li>CP - C Programming</li>
  <li>WD - Web Designing </li>
  <li>BT - Best Technocrat</li>
  <li>NG - Network Gaming</li>
  <li>TQ - Technical Quiz </li>
</ul></div>
<?
}
else
	echo "<span class='error'>Error in database connectivity</span>";



?>	  
<span class="small_text">R & D (c) Centrum inc Software Solutions / Midhun Harikumar</span>
</td>
  </tr>
  <tr height="16">
    <td><div align="left"><img src="img/body_btm_left.jpg" width="19" height="16" /></div></td>
    <td><div align="right"><img src="img/body_btm_right.jpg" width="19" height="16" /></div></td>
  </tr>
</table>
<div style="height:2px">&nbsp;</div>
<table width="770" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="19" background="img/footer_bg.jpg"><img src="img/footer_left.jpg" width="19" height="29" /></td>
    <td width="741" background="img/footer_bg.jpg">
	<div id="footer">Powered by <a href="http://www.angelsvista.com" title="Angelsvista" target="_blank">Angelsvista</a> / Design and Maintanence &copy; 2007 <a href="http://www.geocities.com/mhkonline2/ae/index.html" title="Ae" target="_blank">Artistik expressionz</a></div></td>
    <td width="20" background="img/footer_bg.jpg">
	<div align="right"><img src="img/footer_right.jpg" width="19" height="29" /></div></td>
  </tr>
</table>
</div></div>
</body>
</html><!-- Site Designed and maintained by ae Artistik Expressionz (http://www.geocities.com/mhkonline2/)-->