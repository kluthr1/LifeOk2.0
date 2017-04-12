<?php
// Check for empty fields
if(empty($_COOKIE['the_email'])     ||
   empty($_POST['message'])	||
   !filter_var($_COOKIE['the_email'],FILTER_VALIDATE_EMAIL))
   {
	echo "Well Errors :)";
	return false;
   }
if(empty($_COOKIE['name'])){
	$name = " ";
}else{
	$name = strip_tags(htmlspecialchars($_COOKIE['name']));
}

$email_address = strip_tags(htmlspecialchars($_COOKIE['the_email']));
if(empty($_COOKIE['email'])){
	$emailof = "none";
}else{
	$emailof = strip_tags(htmlspecialchars($_COOKIE['email']));
}
$message = strip_tags(htmlspecialchars($_POST['message']));
	
// Create the email and send the message
$to = $email_address; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Help Requested".$name ;
$email_body = "You have received a new message $name"."Here are the details:\n\nName: $name \n\nEmail: $emailof \n\nMessage:\n$message";
$headers = "From: karanluthria@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $emailof";	
mail($to,$email_subject,$email_body,$headers);
echo "Thank You For Using Life Ok";
return true;			
?>
