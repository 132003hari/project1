<?php
	if(ISSET($_POST['add_package'])){
        $packagetype = $_POST['packagetype'];
		$packagedetails=$_POST['packagedetails'];
		$offers=$_POST['offers'];
		$offercode=$_POST['offercode'];
		$chargeinperson=$_POST['chargeinperson'];
		$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
		$photo_name = addslashes($_FILES['photo']['name']);
		$photo_size = getimagesize($_FILES['photo']['tmp_name']);
		move_uploaded_file($_FILES['photo']['tmp_name'],"../photo/" . $_FILES['photo']['name']);
        $conn->query("INSERT INTO `pack`(packagetype,photo,packagedetails,offers,offercode,chargeinperson) VALUES('$packagetype','$photo_name','$packagedetails','$offers','$offercode','$chargeinperson')") or die(mysqli_error());
		header("location:package1.php");
	}
?>