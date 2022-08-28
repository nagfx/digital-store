<?php // signup.php

  require_once 'phpcodes/SQL_login.php';

  try
  {
    $pdo = new PDO($attr, $user, $pass, $opts);
  }
  catch (\PDOException $e)
  {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
  }

  // Start with the PHP code
  if(isset($_POST['signup'])){

    
    $full_name = $username = $passwordcol = $age = $dob = $email = "";

    if (isset($_POST['full_name']))
      $full_name = fix_string($_POST['full_name']);
    if (isset($_POST['username']))
      $username = fix_string($_POST['username']);
    if (isset($_POST['passwordcol']))
      $password = fix_string($_POST['passwordcol']);
    if (isset($_POST['age']))
      $age      = fix_string($_POST['age']);
    if (isset($_POST['dob']))
      $dob = fix_string($_POST['dob']);
    if (isset($_POST['email']))
      $email    = fix_string($_POST['email']);

    $fail = validate_full_name($full_name);
    $fail .= validate_username($username);
    $fail .= validate_password($password);
    $fail .= validate_age($age);
    $fail .= validate_dob($dob);
    $fail .= validate_email($email);

    $stmt = $pdo->prepare("SELECT * FROM theusersdatabase WHERE username=? OR email=?");
    $stmt->execute([$username, $email]);
    $user = $stmt->fetch();

    if($user){
      header("location:signup.php?error=userExists");
      exit();
    }

    function sanitise($pdo, $str)
    {
      $str = htmlentities($str);
      return $pdo->quote($str);
    }	


    if ($fail == "")
    {
      $myusername = sanitise($pdo,$_POST['username']);
      $mypassword =  sanitise($pdo,$_POST['passwordcol']);
      $mypassword	= password_hash($mypassword, PASSWORD_DEFAULT);
      $dob =  sanitise($pdo,$_POST['dob']);
      $age =  sanitise($pdo,$_POST['age']);
      $email =  sanitise($pdo,$_POST['email']);
      $full_name =  sanitise($pdo,$_POST['full_name']);


      $commphpquery="INSERT INTO theusersdatabase ( username, passwordcol, dob, age, email, full_name)
      VALUES($myusername, '$mypassword', $dob, $age, $email, $full_name)"; 
  
      //no need to add null when we have auto-increment for id setup.
      //dob datetime format = 2013-02-02 10:13:20
    

      $result = $pdo->query($commphpquery);
      
      if (! $result){
        die('Error: ' . mysqli_error());
      }

      header("location:signedup.php?username=${myusername}");

      // This is where you would enter the posted fields into a database,
      // preferably using hash encryption for the password.

    exit;
    }else{
      header("location:signup.php?error=${fail}");
      exit();
    }
  }

//   echo <<<_END

//     <!-- The HTML/JavaScript section -->

//     <style>
//       .signup {
//         border: 1px solid #999999;
//       font:   normal 14px helvetica; color:#444444;
//       }
//     </style>

//     <script>
//       function validate(form)
//       {
//         fail  = validatefull_name(form.full_name.value)
//         fail += validateUsername(form.username.value)
//         fail += validatepasswordcol(form.password.value)
//         fail += validateAge(form.age.value)
//         fail += validateDob(form.dob.value)
//         fail += validateEmail(form.email.value)
      
//         if (fail == "")     return true
//         else { alert(fail); return false }
//       }

//       function validatefull_name(field)
//       {
//         return (field == "") ? "No full_name was entered.\\n" : ""
//       }

//       function validateUsername(field)
//       {
//         if (field == "") return "No Username was entered.\\n"
//         else if (field.length < 5)
//           return "Usernames must be at least 5 characters.\\n"
//         else if (/[^a-zA-Z0-9_-]/.test(field))
//           return "Only a-z, A-Z, 0-9, - and _ allowed in Usernames.\\n"
//         return ""
//       }

//       function validatepasswordcol(field)
//       {
//         if (field == "") return "No Password was entered.\\n"
//         else if (field.length < 6)
//           return "Passwords must be at least 6 characters.\\n"
//         else if (!/[a-z]/.test(field) || ! /[A-Z]/.test(field) ||
//                  !/[0-9]/.test(field))
//           return "Passwords require one each of a-z, A-Z and 0-9.\\n"
//         return ""
//       }

//       function validateAge(field)
//       {
//         if (isNaN(field)) return "No Age was entered.\\n"
//         else if (field < 18 || field > 110)
//           return "Age must be between 18 and 110.\\n"
//         return ""
//       }
//       function validateDob(field)
//       {
//         return (field == "") ? "No date of Birth was entered.\\n" : ""
//       }

//       function validateEmail(field)
//       {
//         if (field == "") return "No Email was entered.\\n"
//           else if (!((field.indexOf(".") > 0) &&
//                      (field.indexOf("@") > 0)) ||
//                     /[^a-zA-Z0-9.@_-]/.test(field))
//             return "The Email address is invalid.\\n"
//         return ""
//       }
//     </script>
//   </head>
//   <body>

//     <table border="0" cellpadding="2" cellspacing="5" bgcolor="#eeeeee">
//       <th colspan="2" align="center">Signup Form</th>

//         <tr><td colspan="2">Sorry, the following errors were found<br>
//           in your form: <p><font color=red size=1><i>$fail</i></font></p>
//         </td></tr>

// 		<form method="post" role="form" action="Validations.php" onSubmit="return validate(this)" >
//                 <div class="form-group"><br><p class="lead">Your Username</p>
//                   <input type="text" name="username" class="form-control" id="username" placeholder="your username" data-rule="minlen:6" data-msg="Please enter at least 6 chars" required>
                 
//                 </div>
//                 <div class="form-group"><br><p class="lead">Your password</p>
//                   <input type="password" class="form-control" name="passwordcol" id="passwordcol"  placeholder="Your password" reqired>
                  
//                 </div>
// 				<div class="form-group"><br><p class="lead">Your password</p>
//                   <input type="password" class="form-control" placeholder="Your password"reqired>
                  
//                 </div>
				
//                 <div class="form-group"><br><p class="lead">Your Date of birth</p>
//                   <input type="text" class="form-control" name="dob" id="dob" placeholder="Your date of birth"  data-msg="Write dob in 2013-02-02 format" reqired>
                  
//                 </div>
// 				<div class="form-group"><br><p class="lead">Your age between 18 and 110</p>
//                   <input type="number" class="form-control" name="age" id="age" placeholder="Your age between 18 and 110"  data-msg="Write dob in 2013-02-02 format" reqired>
                  
//                 </div>
//                 <div class="form-group"><br><p class="lead">Your email</p>
//                   <input type="email" class="form-control" name="email" id="email" placeholder="Write your email"  data-msg="Please enter your email address" required>
                  
//                 </div>
//                 <div class="form-group"><br><p class="lead">Your full name</p>
//                   <input type="text" name="full_name" class="form-control" id="full_name" placeholder="Your full name please"  data-rule="minlen:2" data-msg="Please enter at least 2 chars" required>
                 
//                 </div>
//                 <div class="text-center">
//                   <button class="btn btn-primary" type="submit" name="submitTheMsg" title="Sign Up">Sign Up</button>
//                 </div>
// 			</form>
//     </table>
//   </body>
// </html>

// _END;

  // The PHP functions

  function validate_full_name($field)
  {
  	return ($field == "") ? "No full name was entered<br>": "";
  }
  
  
  function validate_username($field)
  {
    if ($field == "") return "No Username was entered<br>";
    else if (strlen($field) < 5)
      return "Usernames must be at least 5 characters<br>";
    else if (preg_match("/[^a-zA-Z0-9_-]/", $field))
      return "Only letters, numbers, - and _ in usernames<br>";
    return "";		
  }
  
  function validate_password($field)
  {
    if ($field == "") return "No Password was entered<br>";
    else if (strlen($field) < 6)
      return "Passwords must be at least 6 characters<br>";
    else if (!preg_match("/[a-z]/", $field) ||
             !preg_match("/[A-Z]/", $field) ||
             !preg_match("/[0-9]/", $field))
      return "Passwords require 1 each of a-z, A-Z and 0-9<br>";
    return "";
  }
  
  function validate_age($field)
  {
    if ($field == "") return "No Age was entered<br>";
    else if ($field < 18 || $field > 110)
      return "Age must be between 18 and 110<br>";
    return "";
  }
  function validate_dob($field)
  {
  	return ($field == "") ? "No date of birth was entered<br>": "";
  }
  function validate_email($field)
  {
    if ($field == "") return "blankemail";
      else if (!((strpos($field, ".") > 0) &&
                 (strpos($field, "@") > 0)) ||
                  preg_match("/[^a-zA-Z0-9.@_-]/", $field))
        return "invalidemail";
    return "";
  }
  
  function fix_string($string)
  {
    if (get_magic_quotes_gpc()) $string = stripslashes($string);
    return htmlentities ($string);
  }
?>