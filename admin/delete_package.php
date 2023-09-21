<?php
	require_once 'connect.php';
	
$r=$conn->query("DELETE FROM `pack` WHERE `packagetype` = '$_GET[packageid]'");

if($r){
echo "delete successful";
}
else{
	header("location:package1.php");

}
?>