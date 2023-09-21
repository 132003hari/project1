<?php
	require_once 'connect.php';
	if(ISSET($_POST['edit_pack'])){
        $packageid = $_POST['packageid'];
        $packagetype = $_POST['packagetype'];
        $packagedetails=$_package['packagedetails'];
		$chargeinperson = $_POST['chargeinperson'];
		$conn->query("UPDATE `pack` SET `packageid` = '$packageid', `packagetype` = '$packagetype', `packagedetails` = '$packagedetails',`chargeinperson` = '$chargeinperson',`photo` = '$photo' WHERE `packageid` = '$_POST[packageid]'") or die(mysqli_error());
		header("location:package1.php");
	}
?>