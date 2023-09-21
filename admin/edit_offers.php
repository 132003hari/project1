<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<html lang = "en">
	<head>
		<title>Hotel Online Reservation</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >Hotel Online Reservation</a>
			</div>
			<ul class = "nav navbar-nav pull-right ">
				<li class = "dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class = "glyphicon glyphicon-user"></i> <?php echo $name;?></a>
					<ul class="dropdown-menu">
						<li><a href="logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<div class = "container-fluid">	
		<ul class = "nav nav-pills">
						<li ><a href = "home.php">Home</a></li>
			<li><a href = "viewcus.php">viewcus</a></li>
			<li><a href = "account.php">Accounts</a></li>
			<li><a href = "reserve.php">Room Reservation</a></li>
			<li><a href = "room.php">Room</a></li>
			<li><a href ="preserve.php">Package Reservation</a></li>
            <li><a href ="package1.php">Package</a></li>
			<li><a href ="cab1.php">Cab</a></li>
            <li class='active'><a href ="offers.php">Offers</a></li>
            <li><a href ="review.php">Reviews</a></li>			
		</ul>	
	</div>
	<br />
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Transaction / offers / Change offers</div>
				<br />
				<div class = "col-md-4">
					<?php
						$query = $conn->query("SELECT * FROM `offer` WHERE `offerid` = '$_REQUEST[offerid]'") or die(mysqli_error());
						$fetch = $query->fetch_array();
					?>
					<form method = "POST" enctype = "multipart/form-data">
						<div class = "form-group">
							<label>offers </label>
							<select class = "form-control" required = required name = "offers">
								<option value = "">Choose an option</option>
								<option value = "50" <?php if($fetch['offers'] == "50"){echo "selected";}?>>50</option>
								<option value = "40" <?php if($fetch['offers'] == "40"){echo "selected";}?>>40</option>
								<option value = "30" <?php if($fetch['offers'] == "30"){echo "selected";}?>>30</option>
								<option value = "20" <?php if($fetch['offers'] == "20"){echo "selected";}?>>20</option>
							</select>
						</div>
                        <div class = "form-group">
							<label>offercode</label>
							<input type = "text"  value = "<?php echo $fetch['offercode']?>" class = "form-control" name = "offercode" />
						</div>
                        <div class = "form-group">
							<label>details</label>
							<input type = "text"  value = "<?php echo $fetch['details']?>" class = "form-control" name = "details" />
						</div>
                        
						<div class = "form-group">
							<button name = "edit_offers" class = "btn btn-warning form-control"><i class = "glyphicon glyphicon-edit"></i> Save Changes</button>
						</div>
					</form>
					<?php require_once 'edit_query_offers.php'?>
				</div>
			</div>
		</div>
	</div>
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		<label>&copy; Copyright HOR 2017 </label>
	</div>
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		$pic = $('<img id = "image" width = "100%" height = "100%"/>');
		$lbl = $('<center id = "lbl">[Photo]</center>');
		$("#photo").change(function(){
			$("#lbl").remove();
			var files = !!this.files ? this.files : [];
			if(!files.length || !window.FileReader){
				$("#image").remove();
				$lbl.appendTo("#preview");
			}
			if(/^image/.test(files[0].type)){
				var reader = new FileReader();
				reader.readAsDataURL(files[0]);
				reader.onloadend = function(){
					$pic.appendTo("#preview");
					$("#image").attr("src", this.result);
				}
			}
		});
	});
</script>
</html>