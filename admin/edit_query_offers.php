<?php
	require_once 'connect.php';
	if(ISSET($_POST['edit_offers'])){
		$offers = $_POST['offers'];
		$offercode = $_POST['offercode'];
		$details = $_POST['details'];
		$conn->query("UPDATE `offer` SET `offers` = '$offers', `offercode` = '$offercode', `details` = '$details' WHERE `offerid` = '$_REQUEST[offerid]'") or die(mysqli_error());
		header("location:offers.php");
	}
?>