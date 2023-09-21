
<!DOCTYPE html>
<html lang = "en">
   <style>
	
#menubar
{ width: 100%;
  height: 72px;
  padding: 0;
  background: #5B2660 url(menu.png) repeat-x;} 

ul#menu, ul#menu li
{ float: left;
  margin: 0; 
  padding: 0;}

ul#menu li
{ list-style: none;}

ul#menu li a
{ letter-spacing: 0.1em;
  font: normal 100% 'lucida sans unicode', arial, sans-serif;
  display: block; 
  float: left; 
  height: 25px;
  padding: 29px 20px 29px 20px;
  text-align: center;
  color: #FFF;
  text-transform: uppercase;
  text-decoration: none;
  background: transparent;} 

ul#menu li a:hover, ul#menu li.selected a, ul#menu li.selected a:hover
{ color: #FFF;
  background:#039 url(menu_select.png) repeat-x;}
	</style>
	<head>
		<title>Simple Hotel Online Reservation</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >Simple Hotel Online Reservation</a>
			</div>
		</div>
	</nav>	
	    <div id="menubar">	
	<ul id = "menu">
		<li><a href = "login.php">Homepage</a></li> |		
		<li><a href = "reservation.php">Make a reservation</a></li> |
		<li><a href = "viewpackage.php">viewpackage</a></li> |
		<li><a href = "rulesandregulation.php">Hotel Rules & Regulation</a></li> |
		<li><a href = "aboutus.php">About us</a></li> |
		<li><a href = "contactus.php">Contact us</a></li> |
       
              <li><a href = "index.php">Logout</a></li>
                    <li><a href = "admin/index.php">Admin Login</a></li>	</ul>
    </div>
	<div style = "margin-left:0;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><h3>MAKE A RESERVATION</h3></strong>
				<?php
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `room` ORDER BY `price` ASC") or die(mysql_error());
					while($fetch = $query->fetch_array()){
				?>
					<div class = "well" style = "height:300px; width:100%;">
						<div style = "float:left;">
							<img src = "photo/<?php echo $fetch['photo']?>" height = "250" width = "350"/>
						</div>
						<div style = "float:left; margin-left:10px;">
							<h3><?php echo $fetch['room_type']?></h3>
							<h4 style = "color:#00ff00;"><?php echo "Price: Php. ".$fetch['price'].".00"?></h4>
							<br /><br /><br /><br /><br /><br />
							<a style = "margin-left:580px;" href = "add_reserve.php?room_id=<?php echo $fetch['room_id']?>" class = "btn btn-info"><i class = "glyphicon glyphicon-list"></i> Reserve</a>
						</div>
					</div>
				<?php
					}
				?>
			</div>
		</div>
	</div>
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		<label></label>
	</div>
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>