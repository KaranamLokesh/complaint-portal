<?php
require 'PHPMailerAutoload.php';
include "order.php";
include "gate.php";
$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'sunnylokesh3@gmail.com';                 // SMTP username
$mail->Password = '********';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('sunnylokesh3@gmail.com', 'supervisor');
$mail->addAddress($email, $name);     // Add a recipient
              // Name is optional
$mail->addReplyTo('sunnylokesh3@gmail.com', 'supervisor');
$mail->addCC($email);
$mail->addBCC('karanamlokesh936@gmail.com');

$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Application for gatepass';
$mail->Body    = 'your gatepass has been registered. you can track your gaatepass using:' .$code;

$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
    
}
