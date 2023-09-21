<?php
	require_once 'connect.php';
	if(ISSET($_POST['edit_cab'])){
		$cabtype = $_POST['cabtype'];
		$cabdetails = $_POST['cabdetails'];
		$cabfacility = $_POST['cabfacility'];
		$tariff = $_POST['tariff'];
		
		$conn->query("UPDATE `cab` SET `cabtype` = '$cabtype', `cabdetails` = '$cabdetails', `cabfacility` = '$cabfacility',`tariff` = '$tariff' WHERE `cabid` = '$_REQUEST[cabid]'") or die(mysqli_error());
		header("location:cab1.php");
	}
?>