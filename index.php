<!-- HTML Header and codes -->
<!DOCTYPE php>
<php lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Setting title of the website -->
	<title>NAGFX Freelancer</title>
	<!-- Bootstrap's CSS library, Jquery, Ajax, Fontawesome libraries -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">

</head>
<body>

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

<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#slides" data-slide-to="0" class="active">
			
		</li>
		<li data-target="#slides" data-slide-to="1">
			
		</li>
		<li data-target="#slides" data-slide-to="2">
			
		</li>
		<li data-target="#slides" data-slide-to="3">
			
		</li>
	</ul>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="img/background1.png">
			<div class="carousel-caption">
				<h1 class="display-2">NAGFX</h1>
				<h3>Freelancer NAGFX's website</h3>
				<button type="button" class="btn btn-outline-light btn-lg">
					View More
				</button>
				<button type="button" class="btn btn-primary btn-lg">Get Started</button>

			</div>
		</div>
		<div class="carousel-item">
			<img src="img/background2.png">
		</div>
		<div class="carousel-item">
			<img src="img/background.png">
		</div>
		<div class="carousel-item">
			<img src="img/background3.png">
		</div>

	</div>
</div>

<!--- Jumbotron -->
<div class="container-fluid">
	<div class="row jumbotron">
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
			<p class="lead">NAGFX has been in business of Web and Graphics design since 2011
				and till present we have completed over 3500 major projects! Contact us to get to know
				how we can help your business to the next level visually
			</p>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
			<a href="#"><button type="button" class="btn btn-outline-secondary btn-lg">
				Web Consult
			</button></a>
		</div>
	</div>
</div>

<!--- Welcome Section -->
<div class ="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-3">Built using PBJHCF</h1>
		</div>
		<hr>
		<div class="col-12">
			<p class="lead">Welcome to my website where I built using PHP, Bootstrap, Jquery, Html, Css and font awesome library and more.
				built with style in mind and you can have such a website too! </p>

		</div>
	</div>
</div>

<!--- Three Column Section -->
<div class="container-fluid padding">
	<div class="row text-center padding">
		<div class="col-xs-12 col-sm-6 col-md-4">
			<i class="fas fa-code"></i>
			<h3>HTML5</h3>
			<p> Built using HTML 5</p>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<i class="fas fa-bold"></i>
			<h3>BOOTSTRAP</h3>
			<p> Built using Bootstrap 4</p>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<i class="fab fa-php"></i>
			<h3>PHP</h3>
			<p> Built using PHP</p>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<i class="fab fa-css3"></i>
			<h3>CSS3</h3>
			<p> Built using CSS3 </p>
		</div>

	</div>
	<hr class="my-4">

</div>

<!--- Two Column Section -->
<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-lg-6">
			<h2>Why us?...</h2>
			<p>We have been in the market since a decade and we know the industrial standards and practices</p>
			<p>You are paying for our experience literally</p>
			<p>You would want to pay a professional team than someone who is not experienced, so to avoid unnecessary bugs and issues.</p>
			<br>
			<a href="contact.php" class="btn btn-primary">Contact us</a>
		</div>
			<div class="col-lg-6">
				<img src="img/working.png" class="img-fluid">
			</div>

	</div>
</div>

<hr class="my-4">
<!--- Fixed background -->
<figure>
	<div class="fixed-wrap">
		<div id="fixed">

		</div>
	</div>
</figure>

<!--- Accepting Crypto -->
<button class="cryptoCollapse" data-toggle="collapse" data-target="#crypto">Click for Crypto we Accepting</button>
<div id="crypto" class="collapse">
	<div class="container-fluid padding">
		<div class="row text-center">
			<div class="col-sm-6 col-md-3">
				<img class="cryptoGif" src="img/gif/bitcoin.gif">
			</div>
			<div class="col-sm-6 col-md-3">
				<img class="cryptoGif" src="img/gif/doge.gif">
			</div>
			<div class="col-sm-6 col-md-3">
				<img class="cryptoGif" src="img/gif/polkadot.gif">
			</div>
			<div class="col-sm-6 col-md-3">
				<img class="cryptoGif" src="img/gif/shiba.gif">
			</div>
		</div>	
	</div>
</div>
<!--- The team section block -->
<div class="container-fluid padding">
	<div class="row welcome text-center">
	 <div class="col-12">
		 <h1 class="display-4"> Meet the designers & coders</h1>
	 </div>
	 <hr>
	</div>
</div>

<!--- Staff section -->
<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="img/staffBryana.jpg">
				<div class="card-body">
					<h4 class="card-title">Bryana Lei</h4>
					<p class="card-text">Bryana is from the Amazon university &
						 loves to design and party. Has 10 years of experience! </p>
						 <a href="#" class="btn btn-outline-secondary">See LinkedIn</a>
				</div>
			</div>
		</div> 
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="img/staffLeoana.jpg">
				<div class="card-body">
					<h4 class="card-title">Leona Paula</h4>
					<p class="card-text">Leona is from the Namanian university &
						 loves to code and plan. Has 4 years of experience! </p>
						 <a href="#" class="btn btn-outline-secondary">See LinkedIn</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="img/staffNaman.jpg">
				<div class="card-body">
					<h4 class="card-title">Naman Ho</h4>
					<p class="card-text">Naman is from the Lancaster university &
						 loves to design and party. Has 2 years of experience</p>
						 <a href="#" class="btn btn-outline-secondary">See LinkedIn</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="img/staffVikra.jpg">
				<div class="card-body">
					<h4 class="card-title">Vikra Easwaran</h4>
					<p class="card-text">Vikra is from the Kampung university &
						 loves to geek out and code. Has 12 years of experience! </p>
						 <a href="#" class="btn btn-outline-secondary">See LinkedIn</a>
				</div>
			</div>
		</div>
	
	</div>
</div>

<!--- Two Column Section.  Including a block of paragraph -->
<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-lg-6">
			<h2>Our work ethics</h2>
			<p>We strive to deliver nothing but quality, started as a group of friends in garage and now we have our
				own office
			</p>
			<p>You would want to pay a professional team than someone who is not experienced, so to avoid unnecessary bugs and issues.</p>
			<br>
			<a href="contact.php" class="btn btn-primary">Contact us</a>
		</div>
			<div class="col-lg-6">
				<img src="img/think.jpg" class="img-fluid">
			</div>

	</div>
	<hr class="my-4">
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
</php>



