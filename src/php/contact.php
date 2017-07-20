<?php 
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$name = $request->name;
$email = $request->email;
$phone = $request->phone;
$message = $request->message;
$formcontent="From: $name \n Message: $message";
$recipient = "javierperezferrada@gmail.com";
$subject = "Formulario de Contacto";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>