<?php

error_reporting(0);
$conn=mysql_connect("localhost","srmrubar_admin","srm1234");
if(! $conn )
   {
     die('Could not connect: ' . mysql_error());
   }
   //echo 'Connected successfully';
$sel=mysql_select_db("srmrubar_contact");
if(! $sel )
   {
     die('Could not connect: ' . mysql_error());
   }
    //echo 'DATABASE successfully'; 

if(isset($_POST['submit']))
{
	$date=date("Y-m-d H:i:s");
	$sql = "INSERT INTO enquiry (name,email,message,datetime)
VALUES ('".$_POST['name']."', '".$_POST['email']."','".$_POST['message']."','".$date."')";  
mysql_query($sql);
}


if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];

//send email
$to = "tulianish@gmail.com";

$subject = 'Rubaroo Response';
$from = $email;

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose the HTML email message
$msg1 = '<html><body>';
$msg1 .= '<h3> From : '.$name.'</h3>';
$msg1 .= '<h3> Email : '.$email.'</h3>';
$msg1 .= '<h3>'.$msg.'</h3>';
$msg1 .= '</body></html>';
 // Sending email
if(mail($to, $subject, $msg1, $headers)){
	header('Location: http://srmrubaroo.com/thank.html');
} else{
    echo 'Unable to send email. Please try again later.';
}}





?>