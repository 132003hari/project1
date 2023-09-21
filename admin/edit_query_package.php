<?php
	require_once 'connect.php';
	if(ISSET($_POST['edit_pack'])){
        $packagetype = $_POST['packagetype'];
        $packagedetails=$_POST['packagedetails'];
		$chargeinperson = $_POST['chargeinperson'];
		$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
		$photo_name = addslashes($_FILES['photo']['name']);
		$photo_size = getimagesize($_FILES['photo']['tmp_name']);
		move_uploaded_file($_FILES['photo']['tmp_name'],"../photo/" . $_FILES['photo']['name']);
		$conn->query("UPDATE `pack` SET  `packagetype` = '$packagetype', `packagedetails` = '$packagedetails',`chargeinperson` = '$chargeinperson',`photo` = '$photo_name' WHERE `packageid` = '$_REQUEST[packageid]'") or die(mysqli_error());
		header("location:package1.php");
	}
?>