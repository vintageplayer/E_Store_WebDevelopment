<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
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
			<a class="navbar-brand" href="">E- Store</a>
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
	<div class="container" style="margin-top: 80px">
		<div class="row">
			<div class="col-lg-10">
				<h2>LIVE SUPPORT</h2>
				<h4>24 hours | 7 days a week | 365 days a year Live Technical Support</h4>
				<p>It's a long establised fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem lpsum is that it has a more-or-less normal distribution of letters. There are many variations of passages of Lorem lpsum availablem, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem lpsum, you need to be sure there isn't anything embarassing hidden in the middle of text.</p>
			</div>
			<div class="col-lg-2">
				<center>
					<img src="../resources/contact.png">
				</center>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8">
				<h2>CONTACT US</h2>
				<form action="">
					<div class="form-group">
						<label>Name</label>
						<input class="form-control" id="name"></input>
					</div>
					<div class="form-group">
						<label>Email:</label>
						<input class="form-control" id="email"></input>
					</div>
					<div class="form-group">
						<label>Message:</label>
						<textarea class="form-control" rows="5"></textarea>
					</div>
					<div>
						<button type="submit" class="btn btn-primary
						">Submit</button>
					</div>
				</form>
			</div>
			<div class="col-lg-4">
				<h2>Company Information</h2>
				<p>500 Lorem lpsum Dolor Sit,</p>
				<p>22-56-2-9 Sit Amet, Lorem,</p>
				<p>USA</p>
				<p>Phone:(00) 222 666 444</p>
				<p>Fax:(00) 000 00 00 0</p>
				<p>Email: info@mycompany.com</p>
				<p>Follow on: Facebook, Twitter</p>
			</div>
		</div>
	</div>
	<br>

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
					<div><a href="#login" style="color: #fff"  role="button" data-toggle="modal">Login</a></div>
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