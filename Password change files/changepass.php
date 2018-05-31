<?php

$db = mysqli_connect('localhost', 'root', '', 'amazon');
$salt="@!Amazon#Blog";

if (isset($_POST['reset_pass']))
{ 
  $token=mysqli_real_escape_string($db, $_POST['passtoken']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password']);
  $passmatch = mysqli_real_escape_string($db, $_POST['passmatch']);
  
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $passmatch) {
	array_push($errors, "The two passwords do not match");  }

  $password_1=$password_1.$salt;
  $password_1=sha1($password_1);


  if (count($errors) == 0) {
  	$query = "UPDATE user set password='$password_1' where passtoken='".$token."'";
  	$results=mysqli_query($db, $query);
  	$query ="UPDATE user set passtoken='Null' where passtoken='".$token."'";
  	$results=mysqli_query($db, $query);
  	$message = "Password changed successfully.Login again.";
  	echo "<script type='text/javascript'>alert('$message'); window.location='index.php'; </script>";
  	
  }


}






?>