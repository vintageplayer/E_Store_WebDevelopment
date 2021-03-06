<html>
<head>
	<title>Welcome</title>
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
				<a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
			</li>
			<li>
				<a href="#login" role="button" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span> Login</a>
			</li>
			<li>
				<a href="about.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a>
			</li>
			<li>
				<a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a>
			</li>
		</ul>
		</div>
	</div>
	</nav>
	<!-- End Of navigation bar -->

	<!-- Main Content -->
	<div class="container-fluid" style="margin-top: 80px">
		<div class="row">
			<div class="col-sm-4">
				<div class="panel panel-default">
					<div class="panel-heading">Mobile 1</div>
					<div class="panel-body">
						<center>
							<img src="../resources/Mobile1.gif">
						</center>
						<p>4.2' Screen, snap-dragon processor, 1GB RAM, 4GB Internal memory, Rs 5000.</p>
						<a href="#login" data-toggle="modal"><button class="btn btn-primary btn-block">Order Now!</button></a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="panel panel-default">
					<div class="panel-heading">Mobile 2</div>
					<div class="panel-body">
						<center>
							<img src="../resources/Mobile2.jpg">
						</center>
						<p>Numeric keypad, 2MP Camera, Internet browsing,<br>Rs 4000.</p>
						<a href="#login" data-toggle="modal"><button class="btn btn-primary btn-block">Order Now!</button></a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="panel panel-default">
					<div class="panel-heading">Mobile 3</div>
					<div class="panel-body">
						<center>
							<img src="../resources/Mobile3.png">
						</center>
						<p>4' Screen, snap-dragon processor, Android 3.2, 1GB RAM, 4GB internal memory, Rs 4000</p>
						<a href="#login" data-toggle="modal"><button class="btn btn-primary btn-block">Order Now!</button></a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<div class="panel panel-default">
					<div class="panel-heading">Mobile 4</div>
					<div class="panel-body">
						<center>
							<img src="../resources/Mobile4.jpg">
						</center>
						<p>4.2' Screen, snap-dragon processor, 1GB RAM, 4GB Internal memory, Rs 5000.</p>
						<a href="#login" data-toggle="modal"><button class="btn btn-primary btn-block">Order Now!</button></a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="panel panel-default">
					<div class="panel-heading">Mobile 5</div>
					<div class="panel-body">
						<center>
							<img src="../resources/Mobile5.jpg">
						</center>
						<p>Numeric keypad, 2MP Camera, Internet browsing,<br>Rs 4000.</p>
						<a href="#login" data-toggle="modal"><button class="btn btn-primary btn-block">Order Now!</button></a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="panel panel-default">
					<div class="panel-heading">Mobile 6</div>
					<div class="panel-body">
						<center>
							<img src="../resources/Mobile6.jpg">
						</center>
						<p>4' Screen, snap-dragon processor, Android 3.2, 1GB RAM, 4GB internal memory, Rs 4000</p>
						<a href="#login" data-toggle="modal"><button class="btn btn-primary btn-block">Order Now!</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<div style="background-color: #444">
		<div class="container">
			<div class="row" style="color: #fff; margin-bottom: 5px;">
				<div class="col-lg-4">
					<div><h3>Information</h3></div>
					<div ><a href="about.php" style="color: #fff">About Us</a></div>
					<div><a href="contact.php" style="color: #fff">Contact Us</a></div>
				</div>
				<div class="col-lg-4">
					<div><h3>My Account</h3></div>
					<div><a href="#login" role="button" data-toggle="modal" style="color: #fff">Login</a></div>
					<div><a href="signup.php" style="color: #fff">Signup</a></div>
				</div>
				<div class="col-lg-4">
					<div><h3>Contact Us</h3></div>
					<div><p>Contact: +91-123-0000000</p></div>
				</div>
			</div>
		</div>
	</div>
	<!-- End of Footer -->

	<!-- Modal -->
	<div id="login" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">x</button>
					<h4 class="modal-title">LOGIN</h4>
				</div>
				<div class="modal-body">
					<p>Don't have an account? Register</p>
					<form action="">
						<div class="form-group"><input type="email" class="form-control" placeholder="Email" name="email"></input></div>
						<div class="form-group"><input type="password" class="form-control" placeholder="Password" name="pwd"></input></div>
						<button type="submit" class="btn btn-primary">Login</button>
					</form>
					<br>
					<a href="">Forgot Password?</a>
				</div>
			</div>
		</div>
	</div>
	<!-- End of Modal -->
</body>
</html>