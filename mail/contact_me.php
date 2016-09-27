<?php 

// Check for empty fields

	
// $name = strip_tags(htmlspecialchars($_POST['name']));
// $email_address = strip_tags(htmlspecialchars($_POST['email']));
// $phone = strip_tags(htmlspecialchars($_POST['phone']));
// $message = strip_tags(htmlspecialchars($_POST['message']));
	
// // Create the email and send the message
// $to = 'lloreradondi@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
// $email_subject = "Website Contact Form:  $name";
// $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
// $headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
// $headers .= "Reply-To: $email_address";	
// mail($to,$email_subject,$email_body,$headers);

// return true;		
require 'mailer/class.phpmailer.php';
$length = 10;
$randstring = rand(6,999999);
$mail = new PHPMailer();

//$mail->IsSMTP(); // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com'; // Specify main and backup server
$mail->Port = 587; // Set the SMTP port
$mail->SMTPAuth = true; // Enable SMTP authentication
$mail->Username = 'lloreradondi@gmail.com'; // SMTP username
$mail->Password = 'loreradondi0A'; // SMTP password
$mail->SMTPSecure = 'tls'; // Enable encryption, 'ssl' also accepted

$mail->From = 'lloreradondi@gmail.com';
$mail->FromName = 'Dione LLorera';

$mail->AddAddress ("lloreradondi@gmail.com", "Dione Llorera"); // Add a recipient
//$mail->AddAddress('ellen@example.com'); // Name is optional

$mail->IsHTML(true); // Set email format to HTML

$mail->Subject = 'Portfolio Contact';
$mail->Body = 'Hello I am '.$_POST['name'].'.<br>My Contact Number is '.$_POST['phone'].' '.'<br>'.$_POST['message'];
$isSuccess = true;
if(empty($_POST['name'])||empty($_POST['email']) ||empty($_POST['phone'])||empty($_POST['message'])||!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
	$isSuccess = false;
}else{
	if(!$mail->Send()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
		$isSuccess = false;
	}else{
		echo "mail_send";
	}	
} 
return $isSuccess;
?>
