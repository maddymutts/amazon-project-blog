<?php
require 'phpmailer/PHPMailerAutoload.php';
session_start();

$db = mysqli_connect('localhost', 'root', '', 'amazon');


if(isset($_POST['reg']))
{
	 $reg = mysqli_real_escape_string($db, $_POST['reg']);
	 $query = "SELECT email FROM user WHERE regno='".$reg."'";
	 $result = mysqli_query($db,$query);
     $Results = mysqli_fetch_array($result);
     

     if (!empty($Results))
     {
  

$mail = new PHPMailer;

$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'connectin2018@gmail.com';                 // SMTP username
$mail->Password = 'connectin123';                           // SMTP password
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('from@example.com', 'Mailer');
$mail->addAddress($Results["email"], 'Joe User');


$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Forgot Password';
$mail->Body    = 'Click this link to reset your password.https://connect-in.000webhostapp.com/forgotp.php ';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

}
}

?>