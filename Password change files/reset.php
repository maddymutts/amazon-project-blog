<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'amazon');

//Check if token matches the one in the database
if($_GET['key'])
{
	$token=$_GET['key'];
	$query= "SELECT regno FROM user WHERE passtoken='".$token."'";
	$result = mysqli_query($db,$query);
    $Results = mysqli_fetch_array($result);
 
    if(!empty($Results))
    {	$_SESSION['token'] = $token;
    	header('Location:forgotp.php');
    }	
    else echo "Some error occured.";
}



?>

