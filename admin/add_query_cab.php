<?php
	if(ISSET($_POST['add_cab'])){
		$cabid = $_POST['cabid'];
        $cabtype = $_POST['cabtype'];
        $cabdetails=$_POST['cabdetails'];
        $cabfacility=$_POST['cabfacility'];
		$tariff=$_POST['tariff'];
        $conn->query("INSERT INTO `cab`(cabid,cabtype,cabdetails,cabfacility,tariff) VALUES('$cabid', '$cabtype','$cabdetails','$cabfacility','$tariff')") or die(mysqli_error());
		header("location:cab1.php");
	}
?>