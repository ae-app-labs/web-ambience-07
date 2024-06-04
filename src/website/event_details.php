<?php include("site_variables.php"); 
// get dataid from request and fill variables to display in the template page
$hasData = false;
switch($_REQUEST["dataId"])
{
	case $evtAll 		: $pageName = "data_all_events.php"; 	$hasData = true;	$fmaImage = "fma_home_alt.jpg";  break;
	case $evtPaper 		: $pageName = "data_papyrus.php"; 		$hasData = true;	$fmaImage = "fma_home_alt.jpg";  break;
	case $evtQuiz		: $pageName = "data_tech_quiz.php"; 	$hasData = true;	$fmaImage = "fma_home_alt.jpg"; break;
	case $evtProg 		: $pageName = "data_programming.php"; 	$hasData = true;	$fmaImage = "fma_home_alt.jpg";	 break;
	case $evtGaming		: $pageName = "data_gaming.php"; 		$hasData = true;	$fmaImage = "fma_gaming.jpg"; break;
	case $evtTechno		: $pageName = "data_technocrat.php"; 	$hasData = true;	$fmaImage = "fma_home_alt.jpg"; break;
	case $evtWebDez 	: $pageName = "data_web_designing.php";	$hasData = true;	$fmaImage = "fma_web_deigning.jpg";	 break;
	case $evtSchedule 	: $pageName = "data_schedule.php"; 	$hasData = true;	$fmaImage = "fma_schedule.jpg";	 break;
}
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
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome to Ambience '07 :: Home Page</title>
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
        <td colspan="2" class="tbl_data"><div align="center"><img src="img/top_ad_date.jpg" alt="Program Date" width="250" height="60" /></div></td>
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
			<a href="show_data.php?dataId=<?php echo $dataResourc;?>">Resources</a> /  
			<a href="show_data.php?dataId=<?php echo $dataNews;?>">News</a> / 
			<a href="show_data.php?dataId=<?php echo $dataContact;?>">Contact</a> / 
			<a href="show_data.php?dataId=<?php echo $dataSitemap;?>">Sitemap</a></div>
	</div>
	<br />
	<table width="770" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="172">
<?php include("main_navigation.php"); ?>
		</td>
        <td width="598" align="center" valign="middle">
		<div id="fma">
		<?php echo "<img src='fma/$fmaImage' height='155' width='565' />";?>
		</div>
	</td>
   </tr>
  </table>
  <?php
  
  if($hasData) // show the requested page
	  include ($pageName);
  else
  { // show some default content or filler text!
  ?>
	<h3>404 - Nothing to display </h3>
	<p class="textBlock">Lorem Ipsum <br />
	  <br />
	  <br />
	  Sorry data element not found. </p>
	<?php	  } ?>
	  </div>
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