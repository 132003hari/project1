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
    </div></div>
	<div style = "margin-left:40;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><h3>PACKAGE RESERVATION</h3></strong>
				<br />
				<?php 
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `pack` WHERE `packageid` = '$_REQUEST[packageid]'") or die(mysql_error());
					$fetch = $query->fetch_array();
				?>
				<div style = "height:300px; width:800px;">
					<div style = "float:left;">
						<img src = "photo/<?php echo $fetch['photo']?>" height = "300px" width = "400px">
					</div>
					<div style = "float:left; margin-left:10px;">
						<h3><?php echo $fetch['packagetype']?></h3>
						<h3 style = "color:#00ff00;"><?php echo "Php. ".$fetch['chargeinperson'].".00";?></h3>

					</div>
				</div>
				<br style = "clear:both;" />
				<div class = "well col-md-4">
					<form method = "POST" enctype = "multipart/form-data">
						<div class = "form-group">
							<label>Firstname</label>
							<input type = "text" class = "form-control" name = "firstname" required = "required" />
						</div>
						<div class = "form-group">
							<label>Middlename</label>
							<input type = "text" class = "form-control" name = "middlename" required = "required" />
						</div>
						<div class = "form-group">
							<label>Lastname</label>
							<input type = "text" class = "form-control" name = "lastname" required = "required" />
						</div>
						<div class = "form-group">
							<label>Address</label>
							<input type = "text" class = "form-control" name = "address" required = "required" />
						</div>
						<div class = "form-group">
							<label>Contact No</label>
							<input type = "text" class = "form-control" name = "contactno" required = "required" />
							</div>
							<div class = "form-group">
							<label>packagetype</label>
							<input type = "text" class = "form-control" name = "packagetype" value='<?php echo $fetch['packagetype']?>'required = "required" />
							</div>
							<div class = "form-group">
							<label>offers</label>
							<input type = "text" class = "form-control" name = "offers" value='<?php echo $fetch['offers']?>' required = "required" />
						</div>
						<div class = "form-group">
							<label>offercode</label>
							<input type = "text" class = "form-control" name = "offercode" value='<?php echo $fetch['offercode']?>'>
							<div class = "form-group">
							<label>Cab Type</label>
								<select class = "form-control" name='cabtype' id='cabtype' placeholder='--select--' onchange="show()">
									<option value='--select--' >--select--</option>
									<option value='Shift' >Shift</option>
									<option value='volvo' >volvo</option>
									<option value='renaultduster' >renaultduster</option>
									<option value='maruthi' >maruthi</option>
									<option value='hyndai' >hyndai</option>
								</select>
						</div>
						<script language="javascript">
function obj()
{
if (window.XMLHttpRequest)
  {
  // code for IE7+, Firefox, Chrome, Opera, Safari
  return new XMLHttpRequest();
  }
if (window.ActiveXObject)
  {
  // code for IE6, IE5
  return new ActiveXObject("Microsoft.XMLHTTP");
  } 
}

function show()
{
xmlhttp=obj();
var url="ajax1.php";
url=url+"?cabtype="+document.getElementById('cabtype').value;
xmlhttp.onreadystatechange=stateChanged;
xmlhttp.open("POST",url,true);
xmlhttp.send(null)
}

function stateChanged()
{
if (xmlhttp.readyState==4)
  {
  //alert(xmlhttp.responseText);
   eval(xmlhttp.responseText);
  }
}
function rel()
{

  window.location="category.php";
}
function s()
{
  alert("hai");
  reid.opetions[1].text="nava";
}

</script>
						<div class = "form-group">
							<label>Tariff</label>
							<input type = "text" class = "form-control" name = "tariff" id="tariff"  required = "required" />
						</div>
						</div>
						<div class = "form-group">
							<label>Check in</label>
							<input type = "date" class = "form-control" name = "date" required = "required" />
						</div>
						<br />
						<div class = "form-group">
							<button class = "btn btn-info form-control" name = "add_guest"><i class = "glyphicon glyphicon-save"></i> Submit</button>
						</div>
					</form>
				</div>
				<div class = "col-md-4"></div>
				<?php require_once 'add_query_viewpackage.php'?>
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