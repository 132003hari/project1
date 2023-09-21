<?php
session_start();
?>
<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Simple Hotel Online Reservation</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
	</head>
    <style>
	
#menubar
{ width: 100%;
  height: 72px;
  padding: 0;
  background: #5b2660 url(menu.png) repeat-x;} 

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
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		
			<div class = "navbar-header">
				<a class = "navbar-brand" >Simple Hotel Online Reservation</a>
			</div>
		</div>
	</nav>
    <div class="container-fluid">
          <div id="menubar">	
	<ul id = "menu">
		<li><a href = "login.php">Homepage</a></li> 		
		<li><a href = "reservation.php">Make a reservation</a></li> 
		<li><a href = "review1.php">review</a></li> 
		<li><a href = "rulesandregulation.php">Hotel Rules & Regulation</a></li> 
		<li><a href = "aboutus.php">About us</a></li> 
		<li><a href = "contactus.php">Contact us</a></li> 
       <li><a href = "logout.php">Logout</a></li>
    	<li><a href = "admin/index.php">Admin Login</a></li></ul>
    </div></div>
    <div  class = "container-fluid">
	<div id="myCarousel" class="carousel slide container-fluid" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
			<li data-target="#myCarousel" data-slide-to="5"></li>
			<li data-target="#myCarousel" data-slide-to="6"></li>
		</ol>
        		<div style = "margin:auto;" class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="images/h.jpg" style = "width:100%; height:450px;" />
			</div>
		
			<div class="item">
				<img src="images/hh.jpg" style = "width:100%; height:450px;"  />
			</div>
		
			<div class="item">
				<img src="images/e.jpg" style = "width:100%; height:450px;" />
			</div>
		
			<div class="item">
				<img src="images/gg.jpg" style = "width:100%; height:450px;" />
			</div>
			
			<div class="item">
				<img src="images/ii.jpg" style = "width:100%; height:450px;" />
			</div>
			
			<div class="item">
				<img src="images/f.jpeg" style = "width:100%; height:450px;" />
			</div>
			
			<div class="item">
				<img src="images/g.png" style = "width:100%; height:450px;" />
			</div>
			
			
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>	
	</div>
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		<label> </label>
	</div>
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>