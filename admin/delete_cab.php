<?php
	require_once 'connect.php';
	
$r=$conn->query("DELETE FROM `cab` WHERE `cabid` = '$_GET[cabid]'");

if($r){
echo "delete successful";
}
else{
	header("location:cab1.php");

}
?>