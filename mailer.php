<?php
/**
 * This example shows sending a message using a local sendmail binary.
 */
date_default_timezone_set('Etc/UTC');

require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';



 $first_name = $_POST['first_name'];
 $email = $_POST['email'];
 $company = $_POST['company'];
 $phone = $_POST['phone'];
 $message = $_POST['comment'];
 
 $err = 0;
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'validated';
 }
 else{
	$err++;
 }

 if (strlen($email) > 1) {
    echo 'validated';
 }
 else{
	$err++;
 }
  if (strlen($first_name) > 1) {
    echo 'validated';
 }
 else{
	$err++;
 }
   if (strlen($phone) > 1) {
    echo 'validated';
 }
 else{
	$err++;
 }
   if (strlen($message) > 1) {
    echo 'validated';
 }
 else{
	$err++;
 }

if  ($captcha.getResponse() != ""){
     echo 'validated';
} else{
    alert("You can't proceed!");
    $err++;
}

if($err >1){
	 header('Location: contact.php?failed=true');
       exit;
}
else{
	$mail = new PHPMailer;

	//$mail->SMTPDebug = 3;                               // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.mandrillapp.com';  // Specify main and backup SMTP servers
    $mail->Port = 2525;     
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'paranpatrickjoseph@gmail.com';                 // SMTP username
	$mail->Password = '0oaX2_DR5IaYsRRhrSwU6Q';                           // SMTP password
	$mail->SMTPSecure = 'tls';                               
	                               // TCP port to connect to

	$mail->setFrom('from@nav-design.com', 'New message from customer');
	$mail->addAddress('info@nav-design.com', 'Nav Design');     // Add a recipient
	             // Name is optional
	//$mail->addReplyTo('info@nav-design.com', 'Information');
	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = 'New user has sign-in';
	$mail->Body    = 'Hi Nav-Design,<br><br>'.$first_name.' have a message for you.<br> Email: '.$email.'<br> Comapany:'.$company.'<br> Phone:'.$phone.'<br> Message:'.$message.'.'  ;
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    header('Location: contact.php?failed=false');
        exit;
	}
}
