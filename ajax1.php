<?php session_start();
include("admin/connect.php");
if(isset($_REQUEST['cabtype']))
{
	$cat=$_REQUEST['cabtype'];
	$qry=$conn->query("select * from cab where cabtype='".$cat."'");
	$fetch = $qry->fetch_array();
	echo "document.getElementById('tariff').value='".$fetch['tariff']."';";
	//echo "document.getElementById('mname').value='".$rs[2]."';";
	//	echo "document.getElementById('stc').value='".$rs[4]."';";
		
}
else if(isset($_REQUEST['cid']))
{
	$cid=$_REQUEST['cid'];
	$qry="select * from tbl_users where userid='".$cid."'"	;
	$rs=mysql_fetch_array(mysql_query($qry));
	echo "document.getElementById('umail').value='".$rs[7]."';";
}
else if(isset($_REQUEST['ooid']))
{
	$oid=$_REQUEST['ooid'];
	$qry="select * from tbl_product where pid=(select pid from tbl_order where oid=".$oid.")";
	$rs=mysql_fetch_array(mysql_query($qry));
	echo "document.getElementById('pid').value='".$rs[0]."';";
	echo "document.getElementById('pname').value='".$rs[2]."';";
}
else if(isset($_REQUEST['cat']))
{
	$cat=$_REQUEST['cat'];
	$qry="select * from tbl_product where cat='".$cat."'";
	$rs=mysql_query($qry);
	$chk=mysql_num_rows($rs);
	$i=0;
	echo "document.getElementById('pid').options.length=0;";
	if($chk>0)
{
	while($row=mysql_fetch_array($rs))
	{
		echo "document.getElementById('pid').options[".$i."] = new Option('".$row[0]."','".$row[0]."');";
		$i=$i+1;
	}
}
}
else if(isset($_REQUEST['pid']))
{
	$pid=$_REQUEST['pid'];
	$qry="select * from tbl_product where pid='".$pid."'";
	$rs=mysql_fetch_array(mysql_query($qry));
	echo "document.getElementById('pname').value='".$rs[2]."';";
}
?>