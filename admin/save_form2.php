
<?php
	require_once 'connect.php';
	if(ISSET($_POST['add_form1'])){
		$cabid = $_POST['cabid'];
		$cabtype=$_POST['cabtype'];
		$days = $_POST['days'];
		$query = $conn->query("SELECT * FROM `ctransaction` WHERE `cabid` = '$cabid' && `status` = 'Check In'") or die(mysqli_error());
		$row = $query->num_rows;
		$time = date("H:i:s", strtotime("+8 HOURS"));
		if($row > 0){
			echo "<script>alert('cab not available')</script>";
		}else{
			$query2 = $conn->query("SELECT * FROM `ctransaction` NATURAL JOIN `guest` NATURAL JOIN `cab` WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
			$fetch2 = $query2->fetch_array();
			$total = $fetch2['tariff'] * $days;
			$checkout = date("Y-m-d", strtotime($fetch['checkin']."+".$days."DAYS"));
			$conn->query("UPDATE `ctransaction` SET `cabid` = '$cabid','cabtype'='$cabtype', `days` = '$days', `status` = 'Check In', `checkin_time` = '$time', `checkout` = '$checkout', `bill` = '$total' WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
			header("location:checkin2.php");
		}
	}
?>