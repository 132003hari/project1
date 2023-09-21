
<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<html lang = "en">
	<head>
		<title>Simple Hotel Online Reservation</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >Simple Hotel Online Reservation</a>
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
				<div class = "alert alert-info">Transaction / viewcus</div>
				<a class = "btn btn-success" href = "viewcus.php"><i class = "glyphicon glyphicon-plus"></i>viewcus</a>
				<br />
				<br />
				<table id = "table" class = "table table-bordered">
					<thead>
						<tr>
							<th>firstname</th>
							<th>lastname</th>
							<th>mobile</th>
                                                        <th>mail</th>
                                                        <th>password</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$query = $conn->query("SELECT * FROM `signup`") or die(mysqli_error());
						while($fetch = $query->fetch_array()){
					?>	
						<tr>
					
							<td><?php echo $fetch['firstname']?></td>
							<td><?php echo $fetch['lastname']?></td>
							<td><?php echo $fetch['mobile']?></td>
                                                        <td><?php echo $fetch['mail']?></td>
                                                        <td><?php echo $fetch['password']?></td>
													
						</tr>
						
					<?php
						}
					?>	
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<br />
	<br />
	
</body>
</html>