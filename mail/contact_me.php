<<<<<<< HEAD
<?php 

// Check for empty fields
// if(empty($_POST['name'])  		||
//    empty($_POST['email']) 		||
//    empty($_POST['phone']) 		||
//    empty($_POST['message'])	||
//    !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
//    {
// 	echo "No arguments Provided!";
// 	return false;
//    }
	
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
require 'PHPMailer/class.phpmailer.php';

//Create a new PHPMailer instance 
require 'mailer/class.phpmailer.php';
$length = 10;
$randstring = rand(6,999999);
$mail = new PHPMailer();

$mail->IsSMTP(); // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com'; // Specify main and backup server
$mail->Port = 587; // Set the SMTP port
$mail->SMTPAuth = true; // Enable SMTP authentication
$mail->Username = 'kshin25bolima@gmail.com'; // SMTP username
$mail->Password = '_kshin25'; // SMTP password
$mail->SMTPSecure = 'tls'; // Enable encryption, 'ssl' also accepted

$mail->From = 'kshin25bolima@gmail.com';
$mail->FromName = 'Sample Website';
$mail->AddAddress ("dione@tagcash.com"); // Add a recipient
//$mail->AddAddress('ellen@example.com'); // Name is optional

$mail->IsHTML(true); // Set email format to HTML

$mail->Subject = 'Activate your account';
$mail->Body = "<h2>Sample Website account</h2>To activate your account copy this confirmation code below <br> <h3>$randstring</h3>";

if(!$mail->Send()) {
}
else{
//mysql_connect("localhost","root","");
//mysql_select_db("philceramics");
//$qry = "INSERT INTO verification(vcode, email) VALUES ('$randstring','$email')";
//mysql_query($qry) or die(mysql_error());
}
=======
<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
	
// Create the email and send the message
$to = 'lloreradondi@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
>>>>>>> 462ac5be42c2d73deded13e1ac46a07b798bc13b
?>