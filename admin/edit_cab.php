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
				<div class = "alert alert-info">Transaction / cab / Change cab</div>
				<br />
				<div class = "col-md-4">
					<?php
						$query = $conn->query("SELECT * FROM `cab` WHERE `cabid` = '$_REQUEST[cabid]'") or die(mysqli_error());
						$fetch = $query->fetch_array();
					?>
					<form method = "POST" enctype = "multipart/form-data">
						<div class = "form-group">
							<label>cabtype </label>
							<select class = "form-control" required = required name = "cabtype">
								<option value = "">Choose an option</option>
								<option value = "Shift" <?php if($fetch['cabtype'] == "Shift"){echo "selected";}?>>Shift</option>
								<option value = "volvo" <?php if($fetch['cabtype'] == "volvo"){echo "selected";}?>>Volvo</option>
								<option value = "renaultduster" <?php if($fetch['cabtype'] == "renaultduster"){echo "selected";}?>>renaultduster</option>
								<option value = "maruthi" <?php if($fetch['cabtype'] == "maruthi"){echo "selected";}?>>maruthi</option>
								<option value = "hyundai" <?php if($fetch['cabtype'] == "hyundai"){echo "selected";}?>>hyundai</option>
							</select>
						</div>
                        <div class = "form-group">
							<label>cabdetails</label>
							<input type = "text"  value = "<?php echo $fetch['cabdetails']?>" class = "form-control" name = "cabdetails" />
						</div>
                        <div class = "form-group">
							<label>cabfacility </label>
							<select class = "form-control" required = required name = "cabfacility">
								<option value = "">Choose an option</option>
								<option value = "3" <?php if($fetch['cabfacility'] == "3"){echo "selected";}?>>3</option>
								<option value = "4" <?php if($fetch['cabfacility'] == "4"){echo "selected";}?>>4</option>
								<option value = "5" <?php if($fetch['cabfacility'] == "5"){echo "selected";}?>>5</option>
								<option value = "6" <?php if($fetch['cabfacility'] == "6"){echo "selected";}?>>6</option>
								<option value = "morethan6" <?php if($fetch['cabfacility'] == "morethan6"){echo "selected";}?>>morethan6</option>
							</select>
						<div class = "form-group">
							<label>tariff </label>
							<input type = "number" min = "0" max = "999999999" value = "<?php echo $fetch['tariff']?>" class = "form-control" name = "tariff" />
						</div>
		
						</div>
						<br />
						<div class = "form-group">
							<button name = "edit_cab" class = "btn btn-warning form-control"><i class = "glyphicon glyphicon-edit"></i> Save Changes</button>
						</div>
					</form>
					<?php require_once 'edit_query_cab.php'?>
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