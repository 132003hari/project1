
<?php
	require_once 'connect.php';
	if(ISSET($_POST['add_form1'])){
		$packageid = $_POST['packageid'];
		$days = $_POST['days'];
		$tariff=$_POST['tariff'];
		$query = $conn->query("SELECT * FROM `patransaction` WHERE `packageid` = '$packageid' && `status` = 'Check In'") or die(mysqli_error());
		$row = $query->num_rows;
		$time = date("H:i:s", strtotime("+8 HOURS"));
		if($row > 0){
			echo "<script>alert('package not available')</script>";
		}else{
			$query2 = $conn->query("SELECT * FROM `patransaction` NATURAL JOIN `guest` NATURAL JOIN `pack` WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
			$fetch2 = $query2->fetch_array();
               $cab=$days*$tariff;
			$offer=$days*$fetch2['offers'];
			$total = (($fetch2['chargeinperson'] * $days)-($offer))+$cab;
			$checkout = date("Y-m-d", strtotime($fetch2['checkin']."+".$days."DAYS"));
			$conn->query("UPDATE `patransaction` SET `packageid` = '$packageid', `days` = '$days', `status` = 'Check In', `checkin_time` = '$time', `checkout` = '$checkout', `bill` = '$total' WHERE `transaction_id` = '$_REQUEST[transaction_id]'");
			header("location:checkin1.php");
		}
	}
?>