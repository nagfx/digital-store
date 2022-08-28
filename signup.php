<!-- PHP code -->

<!-- <?php 

require_once 'phpcodes/SQL_login.php';


if(isset($_POST['username']) && isset($_POST['passwordcol'])){

      try
      {
        $pdo = new PDO($attr, $user, $pass, $opts);
      }
      catch (\PDOException $e)
      {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
      }
	

	// username and password sent from form and sanitise
	$myusername= sanitise($pdo,$_POST['username']);
	$mypassword=  sanitise($pdo,$_POST['passwordcol']);
    $mypassword		= password_hash($mypassword, PASSWORD_DEFAULT);
	$dob=  sanitise($pdo,$_POST['dob']);
	$age=  sanitise($pdo,$_POST['age']);
	$email=  sanitise($pdo,$_POST['email']);
    $fullName=  sanitise($pdo,$_POST['full_name']);
        
	$commphpquery="INSERT INTO theusersdatabase ( username, passwordcol, dob, age, email, full_name) 
        VALUES($myusername, '$mypassword', $dob, $age, $email, $fullName)"; 
		
		//no need to add null when we have auto-increment for id setup.
        //dob datetime format = 2013-02-02 10:13:20
    	
	
        $result = $pdo->query($commphpquery);
        
	if (! $result){
		 die('Error: ' . mysqli_error());
	}
	header("location:signedup.php");
}

   function sanitise($pdo, $str)
  {
    $str = htmlentities($str);
    return $pdo->quote($str);
  }	

?> -->

<!-- HTML Header and codes -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Setting title of the website -->
	<title>NAGFX Signup</title>
	<!-- Bootstrap's CSS library, Jquery, Ajax, Fontawesome libraries -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
<!-- Javascript functionality form validation for fullname username password age date of birth and email -->
    <script>
      function validate(form)
      {
        fail  = validatefull_name(form.full_name.value)
        fail += validateUsername(form.username.value)
        fail += validatepasswordcol(form.passwordcol.value)
        fail += validateAge(form.age.value)
        fail += validateDob(form.dob.value)
        fail += validateEmail(form.email.value)
      
        if (fail == "")     return true
        else { alert(fail); return false }
      }

      function validatefull_name(field)
      {
        return (field == "") ? "No full_name was entered.\\n" : ""
      }

      function validateUsername(field)
      {
        if (field == "") return "No Username was entered.\\n"
        else if (field.length < 5)
          return "Usernames must be at least 5 characters.\\n"
        else if (/[^a-zA-Z0-9_-]/.test(field))
          return "Only a-z, A-Z, 0-9, - and _ allowed in Usernames.\\n"
        return ""
      }

      function validatepasswordcol(field)
      {
        if (field == "") return "No Password was entered.\\n"
        else if (field.length < 6)
          return "Passwords must be at least 6 characters.\\n"
        else if (!/[a-z]/.test(field) || ! /[A-Z]/.test(field) ||
                 !/[0-9]/.test(field))
          return "Passwords require one each of a-z, A-Z and 0-9.\\n"
        return ""
      }

      function validateAge(field)
      {
        if (isNaN(field)) return "No Age was entered.\\n"
        else if (field < 18 || field > 110)
          return "Age must be between 18 and 110.\\n"
        return ""
      }
      function validateDob(field)
      {
        return (field == "") ? "No date of Birth was entered.\\n" : ""
      }

      function validateEmail(field)
      {
        if (field == "") return "No Email was entered.\\n"
          else if (!((field.indexOf(".") > 0) &&
                     (field.indexOf("@") > 0)) ||
                    /[^a-zA-Z0-9.@_-]/.test(field))
            return "The Email address is invalid.\\n"
        return ""
      }
    </script>
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
              <h4>Kindly sign up </h4>

		<?php
			if(isset($_GET['error'])){
				$error = $_GET['error'];
				if($_GET['error'] == "userExists"){
					echo '<div class="alert alert-danger" role="alert">User Already Exists</div>';
				}
				if($_GET['error'] == "invalidfields"){
					echo '<div class="alert alert-danger" role="alert">${error}</div>';
				}
			}
		?>

		<form method="POST" role="form" action="Validations.php" onSubmit="return validate(this)" >
                <div class="form-group"><br><p class="lead">Your Username</p> 
                  <input type="text" name="username" class="form-control" id="username" placeholder="your username" data-rule="minlen:6" data-msg="Please enter at least 6 chars" required>
                 
                </div>
                <div class="form-group"><br><p class="lead">Your password</p>
                  <input type="password" class="form-control" name="passwordcol" id="passwordcol"  placeholder="Your password" reqired>
                  
                </div>
				<div class="form-group"><br><p class="lead">Your password</p>
                  <input type="password" class="form-control" placeholder="Your password"reqired>
                  
                </div>
				
                <div class="form-group"><br><p class="lead">Your Date of birth</p>
                  <input type="text" class="form-control" name="dob" id="dob" placeholder="Your date of birth"  data-msg="Write dob in 2013-02-02 format" reqired>
                  
                </div>
				<div class="form-group"><br><p class="lead">Your age between 18 and 110</p>
                  <input type="number" class="form-control" name="age" id="age" placeholder="Your age between 18 and 110"  data-msg="Write dob in 2013-02-02 format" reqired>
                  
                </div>
                <div class="form-group"><br><p class="lead">Your email</p>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Write your email"  data-msg="Please enter your email address" required>
                </div>
                <div class="form-group"><br><p class="lead">Your full name</p>
                  <input type="text" name="full_name" class="form-control" id="full_name" placeholder="Your full name please"  data-rule="minlen:2" data-msg="Please enter at least 2 chars" required>
                 
                </div>
                <div class="text-center">
                  <button class="btn btn-primary" type="submit" name="signup" title="Sign Up">Sign Up</button>
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



