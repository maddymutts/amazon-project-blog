<?php
require 'phpmailer/PHPMailerAutoload.php';
session_start();

$db = mysqli_connect('localhost', 'root', '', 'amazon');

function random_str($length, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
{
    $pieces = [];
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $pieces []= $keyspace[random_int(0, $max)];
    }
    return implode('', $pieces);
}


if(isset($_POST['reg']))
{
	 $reg = mysqli_real_escape_string($db, $_POST['reg']);
	 $query = "SELECT email FROM user WHERE regno='".$reg."'";
	 $result = mysqli_query($db,$query);
     $Results = mysqli_fetch_array($result);
     

    if (!empty($Results))
     {
  
$token = random_str(32);
$link="<a href='localhost/connectin/reset.php?key=".$token."'>Click To Reset password</a>";
$sql="UPDATE user SET passtoken='".$token."' WHERE regno='".$reg."'";
$result = mysqli_query($db,$sql);

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
//$mail->addAddress($Results["email"], 'Joe User');
$mail->addAddress('connectin2018@gmail.com','User');

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Forgot Password';
$mail->Body    = 'Hi, you have forgotten your password and requested for a password change. Report error if this is not you. '.$link;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
    header('Location: index.php');
}

}
}

?>