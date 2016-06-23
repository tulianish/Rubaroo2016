<?php
if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];

//send email
$to = "tulianish@gmail.com";

$subject = 'Rubaroo Response';
$from = $email;

 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$msg1 = '<html><body>';
$msg1 .= '<h3> From : '.$name.'</h3>';
$msg1 .= '<h3> Email : '.$email.'</h3>';
$msg1 .= '<h3>'.$msg.'</h3>';
$msg1 .= '</body></html>';
 
// Sending email
if(mail($to, $subject, $msg1, $headers)){
	header('Location: https://srmrubaroo-anishtuli.rhcloud.com/thank.html');
} else{
    echo 'Unable to send email. Please try again later.';
}}


?>