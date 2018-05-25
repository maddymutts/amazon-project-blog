<?php

include 'server.php';

$reg_no=$_SESSION['reg'];

$name= mysqli_real_escape_string($db,$_POST['name']);
$query="update user set name='$name' where regno='$reg_no'";
mysqli_query($db,$query);

$email=mysqli_real_escape_string($db,$_POST['email']);
$query="update user set email='$email' where regno='$reg_no'";
mysqli_query($db,$query);

$reg=mysqli_real_escape_string($db,$_POST['reg']);
$query="update user set regno='$reg' where regno='$reg_no'";
mysqli_query($db,$query);

$dept=$_POST['dept'];
$query="update user set dept='$dept' where email='$email'";
mysqli_query($db,$query);

$year=$_POST['year'];
$query="update user set year='$year' where email='$email'";
mysqli_query($db,$query);