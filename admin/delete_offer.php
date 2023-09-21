<?php
	require_once 'connect.php';
	mysql_query("DELETE FROM `offer` WHERE `offerid` = '$_REQUEST[offerid]'") or die(mysql_error());
	header("location:offers.php");
?>