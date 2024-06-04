<?php 
include("site_variables.php"); 

//error_reporting(0);
// add registration info into the db

include("db_connect.php");

$showForm = true;
$hasErrors = false;
$message = "";
if(isset($_POST["resubmit"]))
{
	// possibly, we have good data and ready to update the db
	$uname = $_POST["uname"];
	$ucolg = $_POST["ucollege"];
	$contact = $_POST["mob_no"];
	$mailid  = $_POST["mail_id"];
	
	$accom = $_POST["accom"];
	
	$event1 = ($_POST["event1"])?"1":"0";
	$event2 = ($_POST["event2"])?"1":"0";
	$event3 = ($_POST["event3"])?"1":"0";
	$event4 = ($_POST["event4"])?"1":"0";
	$event5 = ($_POST["event5"])?"1":"0";
	$event6 = ($_POST["event6"])?"1":"0";

	$sql = "INSERT INTO `registration` (`uname` , `ucollege` , `contact_no` , `contact_mail` , `accomodation` , `event1` , `event2` , `event3` , `event4` , `event5` , `event6` )"
			."VALUES ( '$uname', '$ucolg', '$contact', '$mailid', '$accom', '$event1', '$event2', '$event3', '$event4', '$event5', '$event6')";
//	echo $sql;

	$res = mysql_query($sql,$db);
	
	if($res)
	{
		$showForm = false;
		$message  = "<br><br>Your registration information have been successfully saved.<br>Thank you for registering!<br><br>";
	}
	else
	{
		$hasErrors = true;
		$message   = "<br><br>There was an error processing your query. Please try again some other time.<br><br>";
	}
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
<title>Welcome to Ambience '07 :: User Registration</title>
</head>

<body onload="show5();">
<div align="center">
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
			<a href="show_data.php?dataId=<?php echo $dataResourc;?>">Resources</a> / 
			<a href="show_data.php?dataId=<?php echo $dataNews;?>">News</a> / 
			<a href="show_data.php?dataId=<?php echo $dataContact;?>">Contact</a> / 
			<a href="show_data.php?dataId=<?php echo $dataSitemap;?>">Sitemap</a></div>
	</div>
	<br />
	<table width="770" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="172"><?php include("main_navigation.php"); ?>
        </td>
        <td width="598" align="center" valign="middle"><div id="fma">
		<img src="fma/fma_registration.jpg" height="160" width="590" alt="Register" />
		</div></td>
      </tr>
    </table>
	<h3>Register Online  </h3>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;You can register online for the Technical Festival through this site. </p>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;You can even register by sending an <strong>SMS</strong> to <strong>5676775</strong>. The SMS format should be <strong>AV&lt;space&gt;YourName</strong> where AV is the keyword followed by a space and your name. Its that Simple.</p>
	<?php if($showForm){ ?>
    <form id="form1" name="form1" method="post" action="user_registration.php">
	 	  <table width="488" border="0" cellspacing="4" cellpadding="4">
            <tr>
              <td width="290">Name <span class="reqd">*</span> </td>
              <td width="170">
                <input type="text" name="uname" />             </td>
            </tr>
            <tr>
              <td>College <span class="reqd">*</span> </td>
              <td><input type="text" name="ucollege" /></td>
            </tr>
            <tr>
              <td>Contact no <span class="reqd">*</span> </td>
              <td><input type="text" name="mob_no" /></td>
            </tr>
            <tr>
              <td>e-mail id <span class="reqd">*</span> </td>
              <td><input type="text" name="mail_id" /></td>
            </tr>
            <tr>
              <td>Whether accomodation is required </td>
              <td><label>
                <input name="accom" type="radio" value="1" />Yes 
                <input name="accom" type="radio" value="0" checked="checked" />No</label>
			  </td>
            </tr>
            <tr>
              <td>Choose the events that you wish to participate </td>
              <td>
			  	<label><input type="checkbox" name="event1" value="evt1" /> Paper Presentation</label><br />
				<label><input type="checkbox" name="event2" value="evt2" /> C Programming</label><br />
				<label><input type="checkbox" name="event3" value="evt3" /> Web Designing</label><br />
				<label><input type="checkbox" name="event4" value="evt4" /> Best Technocrat</label><br />
				<label><input type="checkbox" name="event5" value="evt5" /> Network Gaming</label><br />
				<label><input type="checkbox" name="event6" value="evt6" /> Technical Quiz</label>
			</td>
            </tr>
            <tr>
              <td colspan="2"><div align="right">
			  	<input type="hidden" name="resubmit" value="yes" />
				<input type="submit" name="Submit" value="Register" onclick="return validateForm(this.form);" />
              </div></td>
              </tr>
          </table>
         </form>
	<?php } else {$cl = ($hasErrors)?"success":"error"; echo "<span class='$cl'>$message</span>";} ?>
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