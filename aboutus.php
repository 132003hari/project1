
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
<body >
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
		<li><a href = "rulesandregulation.php">Hotel Rules & Regulation</a></li> |
		<li><a href = "aboutus.php">About us</a></li> |
		<li><a href = "contactus.php">Contact us</a></li> |
       
              <li><a href = "index.php">Logout</a></li>
                    <li><a href = "admin/index.php">Admin Login</a></li>	</ul>
    </div>
	<div style = "margin-left:0;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><h3>ABOUT US</h3></strong>
				<p style = "position:relative; float:left; width:850px;">Hotel unveils a celebrated balance of nostalgia and contemporary style, capturing its original Southern elegance, luxury, and decadence. Machuca tiles form cool geometric patterns in the hallways. Hotel hardwood floors contrast modern furnishings and amenities in the dramatic suites.
					The Hotel lifestyle offers guests the finest sensory indulgences: soothing organic toiletries, heirloom recipes, and unmatched privacy and tranquility</p>
				<img style = "float:right;" src = "images/about.jpg" width = "250px" height = "250px" />
				<br style = "clear:both;" />
				<br />
				<br />
				<hr style = "border:1px dotted #000;" />
				<br />
				<div style = "float:left; margin-left:40px; width:300px; height:300px; ">
					<center><img src = "images/1.jpg" width = "250px" height = "250px"  style = "margin-top:5px;"/></center>
					<center><h4 style = "color:rgba(0, 255, 0, 1);">Standard</h4></center>
					<center><label>Small Size Bed</label> <label style = "color:red;">Php. 1,000.00</label></center>
				</div>
				<div style = "float:left; margin-left:40px; width:300px; height:300px; ">
					<center><img src = "images/2.jpg" width = "250px" height = "250px"  style = "margin-top:5px;"/></center>
					<center><h4 style = "color:rgba(0, 255, 0, 1);">Extra Bed</h4></center>
					<center><label style = "color:red;">Php. 800.00</label></center>
				</div>
				<div style = "float:left; margin-left:40px; width:300px; height:300px; ">
					<center><img src = "images/3.jpg" width = "250px" height = "250px"  style = "margin-top:5px;"/></center>
					<center><h4 style = "color:rgba(0, 255, 0, 1);">Quad A Room</h4></center>
					<center><label>1 Medium Size Bed</label> <label style = "color:red;">Php. 1,900.00 </label></center>
				</div>
				<br style = "clear:both;"/>
				<br />
				<div style = "float:left; margin-left:40px; width:300px; height:300px; ">
					<center><img src = "images/4.jpg" width = "250px" height = "250px"  style = "margin-top:5px;"/></center>
					<center><h4 style = "color:rgba(0, 255, 0, 1);">Queen Size Room</h4></center>
					<center><label>2 Medium Size Bed</label> <label style = "color:red;">Php. 3,000.00 </label></center>
				</div>
			
				<div style = "float:left; margin-left:40px; width:300px; height:300px; ">
					<center><img src = "images/6.jpg" width = "250px" height = "250px"  style = "margin-top:5px;"/></center>
					<center><h4 style = "color:rgba(0, 255, 0, 1);">King Suite Room</h4></center>
					<center><label>Matrimonial</label> <label style = "color:red;">Php. 3,500.00 </label></center>
				</div>
				<br style = "clear:both;"/>
				<br />
				<br />
				<strong><h3>Amenities and Services</h3></strong>
				<ul>
					<li><label>24 Hour room service</label></li>
					<li><label>21" Flat screen TV with cable service</label></li>
					<li><label>Hot & cold shower</label></li>
					<li><label>Refrigerator and mini bar on demand in all suites and superior rooms</label></li>
					<li><label>Coffee & tea set, bottled water, organic tolletries in suites and superior rooms</label></li>
					<li><label>Hair dryer in suite rooms</label></li>
					<li><label>Personal safety boxes in every room</label></li>
					<li><label>Laundry & pressing</label></li>
					<li><label>Free use Wifi</label></li>
					<li><label>In room massage services</label></li>
					<li><label>Personal Safe in Every Room</label></li>
					<li><label>Mini Bar</label></li>
					<li><label>7 Function & Meeting Rooms</label></li>
					<li><label>Road Trip Airport Transfers & Special City Tour</label></li>
					<li><label>Swimming Pool</label></li>
					<li><label>Gift Shop</label></li>
					<li><label>Business Center</label></li>
					<li><label>Free Parking for Guest</label></li>
				</ul>
			</div>
		</div>
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