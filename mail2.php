<?php




if($_POST){
    $name = $_POST['email_reg'];

//send email
$to = "tulianish@gmail.com";

$subject = 'Rubaroo Response';
$from = $name;

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Compose the HTML email message
$msg1 = '<html><body>';
$msg1 .= '<h3> Email : '.$from.'h3>';
$msg1 .= '<h3>Interest in external registrations</h3>';
$msg1 .= '</body></html>';
 // Sending email
if(mail($to, $subject, $msg1, $headers)){
	header('Location: http://srmrubaroo.com/thank.html');
} else{
    echo 'Unable to send email. Please try again later.';
}}





?>
