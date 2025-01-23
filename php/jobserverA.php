<?php
session_start();

// initializing variables
$firstname = "";
$lastname = "";
$email = "";
$phonenumber = "";
$dateofbirth = "";
$status = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'contactus');


if (isset($_POST['submit'])) {
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phonenumber = mysqli_real_escape_integer($db, $_POST['phonenumber']);  
  $dateofbirth = mysqli_real_escape_integer($dateofbirth, $_POST['dateofbirth']);
  $status = mysqli_real_escape_string($db, $_POST['status']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($firstname)) { array_push($errors, "first name is required"); }
  if (empty($lastname)) { array_push($errors, "last name is required"); }  
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($phonenumber)) { array_push($errors, "phone number is required"); }  
  if (empty($dateofbirth)) { array_push($errors, "date of birt is required"); }
  if (empty($status)) { array_push($errors, "status is required"); }
   
  
   // Finally,  user if there are no errors in the form
  if (count($errors) == 0) {
  	$firstname = md5($firstname);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (firstname,lastname,email,phonenumber,dateofbirth,status) 
  			  VALUES('$firstname', '$lastname', '$email' , '$phonenumber', '$dateofbirth' , '$status' )";
  	mysqli_query($db, $query);
  	$_SESSION['firstname'] = $firstname;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: job.php');
  }

}
?>