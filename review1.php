<?php
	include("admin/connect.php");
					if(isset($_POST['submit']))
					{
					$reviewid=$_POST['reviewid'];
					$cusid=$_POST['cusid'];
					$cusname=$_POST['cusname'];
					$reviewdetails=$_POST['reviewdetails'];
					$reviewdate=$_POST['reviewdate'];
					//$pdate = $_REQUEST['urpass'];
					$qry="insert into rev(reviewid,cusid,cusname,reviewdetails,reviewdate) values('$reviewid','$cusid','$cusname','$reviewdetails','$reviewdate')";
					
						if($conn->query($qry)){
							echo "posted Successfully...";
							header("location:review1.php?name=review posted_Completed_Succesfully");
						}
						else
						{
							echo "not posted";
						}
						}
						?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<style>
/* Made with love by Mutiullah Samim*/

@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 370px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #FFC312;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}

.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}
</style>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>review</h3>
			</div>
			<div class="card-body">
				<form action="" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"></span>
						</div>
						<input type="text" class="form-control" placeholder="reviewid"  name="reviewid" required="">
                       </div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="cusid"  name="cusid" required="">
                       </div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"></span>
						</div>
						<input type="text" class="form-control" placeholder="cusname"  name="cusname" required="">
                       </div>
                  <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"></span>
						</div>
						<input type="text" class="form-control" placeholder="reviewdetails"  name="reviewdetails" required="">
                        </div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"></span>
						</div>
						
						  <input type="date" class="form-control" placeholder="reviewdate"  name="reviewdate" required="">
					 </div>
					  <br>
					    <input type="submit" value="post" class="btn float-center login_btn"  name="submit">
                       &nbsp;&nbsp;<a href="review1.php"></a>	
                       <p>&nbsp;</p>				
					<div class="form-group">
						<p>&nbsp;</p>
						<p>&nbsp;</p>
					</div>
				</form>
			</div>
			<div class="card-footer">
			</div>
</body>
</html>


				