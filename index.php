<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Hotel Online Reservation</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
			<a class="navbar-brand" href="#"><img class="logo" src="images/logo.png" style="width:70%; height:100px;" alt=""></a>
				<a class = "navbar-brand" >Hotel Iris</a>
			</div>
		</div>
	</nav>	
	<ul id = "menu">
		<li><a href = "index.php">Home</a></li> |
		<li><a href = "aboutus.php">About us</a></li> |
		<li><a href = "contactus.php">Contact us</a></li> |
		<li><a href = "gallery.php">Gallery</a></li> |
		<li><a href = "dineandlounge.php">Dine and Lounge</a></li> |			
		<li><a href = "reservation.php">Make a reservation</a></li> |
		<li><a href = "rulesandregulation.php">Rules and Regulation</a></li>
	</ul>
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
				<img src="images/a.jpg" style = "width:100%; height:450px;" />
			</div>
		
			<div class="item">
				<img src="images/b.jpg" style = "width:100%; height:450px;"  />
			</div>
		
			<div class="item">
				<img src="images/c.jpg" style = "width:100%; height:450px;" />
			</div>
		
			<div class="item">
				<img src="images/d.jpg" style = "width:100%; height:450px;" />
			</div>
			
			<div class="item">
				<img src="images/e.jpg" style = "width:100%; height:450px;" />
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
	<br>
	<center><div class="cards-class">
  <div class="card" style="max-width: 600px">
  <img src="images/table.jpg" class="card-img-top" alt="..." style = "width:100%; height:450px;">
  <div class="card-body">
    <h5>Restaurant</h5>
    <p class="card-text">We have a multi cuisine restaurant. We have both buffet and table service.</p>
    <p class="card-text-link"></p>
  </div>
</div>


<div class="card" style="max-width: 600px">
<img src="images/convhall.jpg" class="card-img-top" alt="..." style = "width:100%; height:450px;">
<div class="card-body">
  <h5>Convention Halls</h5>
  <p class="card-text">We have wedding halls, party halls, conference halls and convention halls for various events.</p>
  <p class="card-text-link"></p>
</div>
</div>

<div class="card" style="max-width: 600px">
<img src="images/room.jpg" class="card-img-top" alt="..." style = "width:100%; height:450px;">
<div class="card-body">
  <h5>Stay</h5>
  <p class="card-text">We have deluxe rooms, standard suites and presidential suites.</p>
  <p class="card-text-link"><small><a class="click" href="reservation.php">Click here</a> to book a room.</small></p>
</div>
</div>
</center>
</div>
	
	
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>