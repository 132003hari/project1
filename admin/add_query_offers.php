<?php
	if(ISSET($_POST['add_offers'])){
		$offers = $_POST['offers'];
		$offercode = $_POST['offercode'];
		$details=$_POST['details'];
		$conn->query("INSERT INTO `offer`(offers,offercode,details) VALUES('$offers', '$offercode', '$details')") or die(mysqli_error());
		header("location:offers.php");
	}
?>