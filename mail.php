<?php
//get data from form  
$name = $_POST['firstName'];
$email= $_POST['emailaddress'];
$message= $_POST['message'];
$to = "youremail@mail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@sdlocalsales.com" . "\r\n" .
"CC: novahunicorn@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>