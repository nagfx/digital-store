<!-- PHP code -->
<?php // authenticate database details
  require_once 'phpcodes/SQL_login.php';

  try
  {
    $pdo = new PDO($attr, $user, $pass, $opts);
  }
  catch (\PDOException $e)
  {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
  }

if(isset($_POST['username']) && isset($_POST['passwordcol'])){
	
    $un_temp = sanitise($pdo,$_POST['username']);
    $pw_temp = sanitise($pdo,$_POST['passwordcol']);
    $query   = "SELECT * FROM theusersdatabase WHERE username=$un_temp";
    $result  = $pdo->query($query);

    if (!$result->rowCount()) die("User not found");

    $row = $result->fetch();
    $fn  = $row['full_name'];
    $un  = $row['username'];
    $pw  = $row['passwordcol'];
	$admin = $row['is_admin'];

    //if (password_verify(str_replace("'", "", $pw_temp), $pw))
    if (password_verify( $pw_temp, $pw))
    {
      session_start();

      $_SESSION['full_name'] = $fn;

	  if($admin == 1){
		  header("location:superuser.php");
	  }
     
      echo htmlspecialchars(" Hi $fn,
        you are now logged in as '$un'");
      die ("<p><a href='continue.php'>Click here to continue</a></p>
            <br><p><a href='phpcodes/session_logout.php'>Click here to logout</a></p>");
    }
    else echo("Invalid username/password combination");
  }
  else
  {

    echo ("Please enter your username and password");
  }

  function sanitise($pdo, $str)
  {
    $str = htmlentities($str);
    return $pdo->quote($str);
  }
?>
<!-- HTML Header and codes -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Setting title of the website -->
	<title>NAGFX login</title>
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
			<h1 class="display-2">Sign up</h1>
		</div>
		<hr>
		<div class="col-12">
			<p>Kindly sign up (register) yourself as a user by filling the details below out and submitting it.</p>

		</div>
	</div>
</div>
<!--- Jumbotron -->
<div class="container-fluid">
	<div class="row jumbotron">
		
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
			<p class="lead">Contact form here.
			</p>
			<!-- Form for contact using HTML form validation here -->
			
			<div class="col-lg-6">  
              <h4>Kindly login </h4>

		<form action="login.php" method="post" role="form">
                <div class="form-group">
                  <input type="text" name="username" class="form-control" id="username" placeholder="your username" data-rule="minlen:6" data-msg="Please enter at least 6 chars" required>
                 
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="passwordcol" id="passwordcol" placeholder="Your password" data-rule="minlen:8" data-msg="Please enter your password" reqired>
                  
				  <div class="text-center">
                  <button class="btn btn-primary" type="submit" name="submitTheMsg" title="Login">Login</button>
                </div>
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



