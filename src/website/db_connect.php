<?php
$HOST = "localhost";
$USERNAME = "";
$PASSWORD = "";
$DATABASE_NAME = "ambience";

// Connection to the datbase
$db = mysql_connect($HOST, $USERNAME, $PASSWORD);
$dbSel = mysql_select_db($DATABASE_NAME, $db);
?>