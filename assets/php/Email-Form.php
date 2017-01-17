<?php
/**
 * This example shows sending a message using PHP's mail() function.
 */
require '../PHPMailerAutoload.php';
//Create a new PHPMailer instance
$mail = new PHPMailer;
$email_from = $_POST['email'];
$name = $_POST['name'];
//Set who the message is to be sent from
$mail->setFrom($email_from, $name);
//Set an alternative reply-to address
$mail->addReplyTo('nlofgren@villanova.edu', 'Nils Lofgren');
//Set who the message is to be sent to
$mail->addAddress('nlofgren@nilslofgren.me', 'Nils Lofgren');
//Set the subject line
$mail->Subject = 'PHPMailer mail() test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('index-revised.html'), dirname(__FILE__));
//Replace the plain text body with one created manually
$notes = $_POST['notes'];
$mail->AltBody = $notes;
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
