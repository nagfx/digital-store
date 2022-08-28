<!-- HTML Header and codes -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Setting title of the website -->
	<title>NAGFX Contact</title>
	<!-- Bootstrap's CSS library, Jquery, Ajax, Fontawesome libraries -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">

</head>
<body>
	<?php 
	include 'phpcodes/contactphp.php';
	?>
<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
	<div class="container-fluid">
		<!-- Adding my logo and buttons for navbar with theme -->
		<a class="navbar-brand" href="#"><img src="img/nagfx-logo.png" alt="Logo of Nagfx" 
			height="90"> </a>
		<button class="navbar-toggler" type="button" data-toggle="collapse"
		data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>

		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">				
			<li class="nav-item active">
					<a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="about.php">About Us</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="shop/products.php">Services</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="https://www.deviantart.com/sherryplus">Portfolio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="contact.php">Contact</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="signup.php">Signup</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="login.php">Login</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<!--- Content Header Section -->
<div class ="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-2">Contact Us</h1>
		</div>
		<hr>
		<div class="col-12">
			<p>NAGFX is a professional team of freelancers driven to complete project on a deadline. </p>

		</div>
	</div>
</div>
<!--- Jumbotron -->
<div class="container-fluid">
	<div class="row jumbotron">
		<!-- Google Maps location! -->
	
	<div class="col-lg-6">
		<h3>Find our team here </h3>
		<br>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.103222392427!2d101.60135171475709!3d3.0670775977665063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4c8f5912644b%3A0x77612fa0225cad69!2sSunway%20University!5e0!3m2!1sen!2smy!4v1626329176262!5m2!1sen!2smy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
			<p class="lead">Contact form here.
			</p>
			<!-- Form for contact using HTML form validation here -->
			
			<div class="col-lg-6">  
              <h4>Send us a message</h4>
              <form action="phpcodes/contactphp.php" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="fullName" placeholder="Your Full Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                 
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-msg="Please enter a valid email" required>
                  
                </div>
				
                <div class="form-group">
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Your phone number with country code e.g. +60 " data-rule="minlen:7" data-msg="Please kindly type minimum 7 chars" required>
                  
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-msg="Please enter at least 8 chars of subject" required>
                  
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="8" data-msg="Please write something for us" placeholder="Your message here" required></textarea>
                 
                </div>
                <div class="text-center">
                  <button class="btn btn-primary" type="submit" name="submitTheMsg" title="Send Message">Send Message</button>
                </div>
              </form>
            </div>
		</div>


	</div>
</div>



<!--- Connect -->
<div class="container-fluid padding">
	<div class="row text-center padding">
		<div class="col-12">
			<h2>Stalk us!</h2>
		</div>
		<div class="col-12 social padding">
			<a href="#"><i class="fab fa-facebook"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fab fa-twitter"></i></a>
			<a href="#"><i class="fab fa-youtube"></i></a>		
			<a href="#"><i class="fab fa-snapchat"></i></a>		

		</div>
	</div>
</div>

<!--- Footer -->
<footer>
	<div class="container-fluid padding">
		<div class="row text-center">
			<div class="col-md-4">
				<img src="img/nagfx-logo.png" height="55">
				<hr class="light">
				<p>+601127037080</p>
				<p>naman@naman.com</p>
				<p>Selangor Sunway</p>
				<p>47500, NS281</p>
				
			</div>
			<div class="col-md-4">
				<hr class="light">
				<h5>Operational hours</h5>
				<hr class="light">
				<p>Mon-Fri:8am-7pm</p>
				<p>Sat: 10am-4pm</p>
				<p>Sun: 10am-12pm</p>
			</div>
			<div class="col-md-4">
				<hr class="light">
				<h5>Situated in</h5>
				<hr class="light">
				<p>Krypton</p>
				<p>Saturn</p>
				<p>Vegeta</p>
				<p>Apokolips</p>
			</div>
			<div class="col-12">
				<hr class="light">
				<h5>&copy; NAGFX</h5>
			</div>
		</div>
	</div>
</footer>



</body>
</html>



