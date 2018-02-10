<?php
session_start();

// initializing variables
$name = "";
$email    = "";
$reg    = "";
$year    = "";
$dept    = "";
$password_1 ="";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'blogapp');

// REGISTER USER
if (isset($_POST['register_user'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $reg = mysqli_real_escape_string($db, $_POST['reg']);
  //$year = mysqli_real_escape_string($db, $_POST['year']);
  //$dept = mysqli_real_escape_string($db, $_POST['dept']);
  if (isset($_POST['year'])) {
    $year = $_POST['year'];
}
if (isset($_POST['dept'])) {
    $dept = $_POST['dept'];
}
  $password_1 = mysqli_real_escape_string($db, $_POST['password']);
  $passmatch = mysqli_real_escape_string($db, $_POST['passmatch']);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $passmatch) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user WHERE email='$email' OR regno='$reg' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['regno'] === $reg) {
      array_push($errors, "User already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	//$pass = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO user (regno, name, email, password, year, dept) 
  			  VALUES('$reg', '$name', '$email', '$password_1', '$year', '$dept')";
  	mysqli_query($db, $query);
  	$_SESSION['name'] = $name;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: homepage.php');
  }
}
//Login user

  if (isset($_POST['login_user'])) {
  $reg = mysqli_real_escape_string($db, $_POST['reg']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($reg)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

   if (count($errors) == 0) {
    //$password = md5($password);
    $query = "SELECT * FROM user WHERE regno='$reg' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['reg'] = $reg;
      $_SESSION['success'] = "You are now logged in";
      header('location: homepage.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

?>