<?php


if(isset($_GET['email'])) {

$email_to = "nlofgren@nilslofgren.me";
$email_subject = "Contact Request";

}
if((!isset($_GET['name'])) ||
    (!isset($_GET['email'])) ||
    (!isset($_GET['notes']))) {
        die("Error inputs not set");
    }
    $first_name = $_GET['name'];
    $email = $_GET['email'];
    $notes = $_GET['notes'];


    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

if(!preg_match($email_exp,$email)) {

    $error_message = 'The Email Address you entered does not appear to be valid.<br />';

}

    $string_exp = "/^[A-Za-z .'-]+$/";

if(!preg_match($string_exp,$first_name)) {

    $error_message = 'The First Name you entered does not appear to be valid.<br />';

}


if(strlen($notes) < 2) {

    $error_message = 'The Comments you entered do not appear to be valid.<br />';

}

if(strlen($error_message) > 0) {

    die($error_message);

}
function clean_string($string){
    $bad = array("content-type", "bcc:", "to:", "cc:", "href");
    return str_replace($bad, "", $string);
}


$email_message = "Name: ".clean_string($first_name)."\n";
$email_message = "Email Adress".clean_string($email)."\n";
$email_message = "Notes".clean_string($notes)."\n";

$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n".
'X-Mailer: PHP/' . phpversion();
$response = "Sending Your Request!\nSending email to: ".$email_to.".\n";
echo nl2br($response);
mail($email_to, $email_subject, $email_message, $headers);

function died($error) {

    // your error code can go here

    echo "We are very sorry, but there were error(s) found with the form you submitted. ";

    echo "These errors appear below.<br /><br />";

    echo $error."<br /><br />";

    echo "Please go back and fix these errors.<br /><br />";

    die();
}



?>
