<?php

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';


//Load Composer's autoloader
require 'PHPMailer-master/vendor/autoload.php';
$mail = new PHPMailer\PHPMailer\PHPMailer( true ); // create a new object
$mail->IsSMTP(); // enable SMTP
//$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "vehicle.rental.service01@gmail.com";
$mail->Password = "ashish1212";
$mail->SetFrom($email);
$mail->AddAddress($email);
$mail->Subject = "Your Rental Car & Bike Booking Message";
$body ="<p><strong>Hello " .$name. ",</strong> <br><br> <strong>Your Booking Details Below</strong> <br><br> Rental Vehicale : " .$select_vehicle. " <br> Name : " .$name. " <br> Mobile Number : " .$phone. " <br> Pickup loaction : " .$pickup_location. " <br> Pickup date : " .$pickup_date. " <br> Retrurn date : " .$return_date. " <br> Insurance : " .$insurance_vehicle." <br> Payment Type : " .$payment_type." <br><br> Thank You!</p>";
$mail->Body = $body;
$mail->AltBody = strip_tags($body);
if(!$mail->Send()) {
	echo "Mailer Error: " . $mail->ErrorInfo;
}
	
?>