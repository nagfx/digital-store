<?php

  //Making a connection to our database nmnwebprg stands for naman web programming
  $con=mysqli_connect("localhost","namanweb","12345678","nmnwebprg") or die(mysqli_error());
  //checking for whether the submit button is pressed or not
  if(isset($_POST["submitTheMsg"]))
  {
  //fetching and storing the form data in variables
$Name = $con->real_escape_string($_POST['fullName']);
$Email = $con->real_escape_string($_POST['email']);
$Phone = $con->real_escape_string($_POST['phone']);
$Subject = $con->real_escape_string($_POST['subject']);
$Message = $con->real_escape_string($_POST['message']);
  //query to insert the variable data into the database
$sql="INSERT INTO contactingmsg (fullName, email, phone, subject, message) 
VALUES ('".$Name."','".$Email."', '".$Phone."', '".$Subject."', '".$Message."')";
  //Execute the query and returning a message
if(!$result = $con->query($sql)){
die('Error occured [' . $conn->error . ']');
}
else
echo "<script>";
echo "alert('Thank you! Your contact information is received successfully!');";
echo "window.location = '../emailrcv.php';"; // this will enable redirection with javascript, after the page is loaded
echo "</script>";
}
?>
