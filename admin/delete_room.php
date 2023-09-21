<?php
	require_once 'connect.php';
	
$r=$conn->query("DELETE FROM `room` WHERE `room_id` = '$_GET[room_id]'");

if($r){
echo "delete successful";
}
else{
	header("location:room.php");

}
?>