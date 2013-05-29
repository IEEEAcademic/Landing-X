<?php
$email = $_POST['email'];
 
$to = 'knuxus@gmail.com';
$subject = 'academic x - new mail';
$message = 'FROM: '.$email;
$headers = 'From: academic@academic.com' . "\r\n";
 
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {  
mail($to, $subject, $message, $headers);  
echo "Your email was sent!";  
}else{
echo "Invalid Email, please provide an correct email.";
}

?>