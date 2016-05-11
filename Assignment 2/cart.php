<html>
<head>
	<title>Cart</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
	<!-- Navigation Bar -->
	<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="nav-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="">E-Store</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav navbar-right">
			<li>
				<a href="cart.php"><span class=" glyphicon glyphicon-shopping-cart"></span> Cart</a>
			</li>
			<li>
				<a href="settings.php"><span class="glyphicon glyphicon-user"></span> Settings</a>
			</li>
			<li>
				<a href=""><span class="glyphicon glyphicon-log-in"></span> Logout</a>
			</li>
		</ul>
		</div>
	</div>
	</nav>
	<!-- End Of navigation bar -->

	<!-- Main Content -->
	<center>
	<div class="container-fluid" style="margin-top: 80px">
		<div class="row">
			<div class="col-lg-4"></div>
			<div class="col-lg-4">
				<table class="table">
					<thead>
						<tr>
							<th>Item Number</th>
							<th>Price</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>
	</center>
</body>
</html>