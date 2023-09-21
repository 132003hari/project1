<?php
	include("admin/connect.php");
					if(isset($_POST['addreview']))
					{
					$cusid=$_POST['cusid'];
					$cusname=$_POST['cusname'];
					$reviewdetails=$_POST['reviewdetails'];
					$reviewdate=$_POST['reviewdate'];
					//$pdate = $_REQUEST['urpass'];
					$qry="insert into rev(cusid,cusname,reviewdetails,reviewdate) values($cusid','$cusname','$reviewdetails','$reviewdate')";
					
					//$rs=mysql_query($conn,$qry);
						if($conn->query($qry)){
							echo "Registered Successfully...";
							header("location:add_query_review.php?name=review posted_Completed_Succesfully");
						}
						else
						{
							echo "not posted";
						}
						}
						?>
     <?php
	if(ISSET($_POST['addreview'])){
        $cusid=$_POST['cusid'];
		$cusname=$_POST['cusname'];
		$reviewdetails=$_POST['reviewdetails'];
		$reviewdate=$_POST['reviewdate'];
		$conn->query("INSERT INTO `rev` (cusid,cusname,reviewdetails,reviewdate ) VALUES('$cusid', '$cusname', '$reviewdetails','$reviewdate')") or die(mysqli_error());
		header("location:review1.php");
	}
?>