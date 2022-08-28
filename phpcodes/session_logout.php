

<!-- HTML Header and codes -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Setting title of the website -->
	<title>NAGFX logout session</title>
	<!-- Bootstrap's CSS library, Jquery, Ajax, Fontawesome libraries -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="../style.css" rel="stylesheet">

</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
	<div class="container-fluid">
		<!-- Adding my logo and buttons for navbar with theme -->
		<a class="navbar-brand" href="#"><img src="../img/nagfx-logo.png" alt="Logo of Nagfx" 
			height="90"> </a>
		<button class="navbar-toggler" type="button" data-toggle="collapse"
		data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>

		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
			<li class="nav-item active">
					<a class="nav-link" href="../index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../about.php">About Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../products.php">Services</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../https://www.deviantart.com/sherryplus">Portfolio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../contact.php">Contact</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../signup.php">Signup</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../login.php">Login</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<!--- About Section -->
<div class ="container-fluid padding">
	<div class="row about text-center">
		<div class="col-12">
			<h1 class="display-2">Session Page!</h1>
		</div>
		<hr>
		<div class="col-12">

    <?php //after logging out
  session_start();

  if (isset($_SESSION['full_name']))
  {
    $name = htmlspecialchars($_SESSION['full_name']);
    
    destroy_session_and_data();
    
    echo "Thank you $name.";
    echo "You have logged out successfully. <br>";
    echo "Please <a href=main_login.php>Click Here</a> to log in again.";
  }
  else echo "Please <a href='../login.php'>Click Here</a> to log in.";
  
  function destroy_session_and_data()
{
   //session_start();
   //$_SESSION = array();
  
   unset($_SESSION['name']);
   $_SESSION = array();
   session_unset();
   setcookie(session_name(), '', time() - 2592000, '/');
   session_destroy();
}

?>


<br><br><br><br><br><br><br><br><br><br><br><br>


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
				<img src="../img/nagfx-logo.png" height="55">
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



