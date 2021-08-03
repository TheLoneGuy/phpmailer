<?php
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */
//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Asia/Kuala_Lumpur');
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$msg = "Hewwo";
//Create a new PHPMailer instance
$mail = new PHPMailer\PHPMailer\PHPMailer();
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "tinghongtan07@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "jqjhgscqovquiiex";
//Set who the message is to be sent from
$mail->setFrom('tinghongtan07@gmail.com', 'Tan TingHong');
//Set an alternative reply-to address
// $mail->addReplyTo('replyto@example.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress('justlekhoo@gmail.com', 'Justin Khoo');
//Set the subject line
$mail->Subject = 'Run Boi';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($msg);
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
// $mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}


// require_once    ('PHPMailer-master/class.phpmailer.php');
// require_once    ('PHPMailer-master/class.smtp.php');

// $mail               = new PHPMailer();
// $body               = "<h1> Sending HTML Mails using gmail</h1><p>it's great !!</p>";
// $mail->IsSMTP();                                        // telling the class to use SMTP
// $mail->SMTPDebug    = 1;                                // enables SMTP debug information (for testing)
// $mail->SMTPAuth     = true;                             // enable SMTP authentication
// $mail->SMTPSecure   = "tls";                            // sets the prefix to the servier
// $mail->Host         = "smtp.gmail.com";                 // sets GMAIL as the SMTP server
// $mail->Port         = 587;                              // set the SMTP port for the GMAIL server

// $mail->Username     = "YOUR_GMAIL_ACCOUNT"  ;           // GMAIL username
// $mail->Password     = 'YOUR_GMAIL_PASSWORD' ;           // GMAIL password

// $mail->SetFrom('VALID_USER@gmail.com', 'Anis Halayem');
// $mail->Subject    = "Test Send Mails";
// $mail->MsgHTML($body);
// $address = "VALID_USER@gmail.com";
// $mail->AddAddress($address, "USER NAME");

// // $mail->AddAttachment("images/phpmailer.gif");        // attachment
// // $mail->AddAttachment("images/phpmailer_mini.gif");   // attachment

// if(!$mail->Send()) {
//     echo "Mailer Error: " . $mail->ErrorInfo;
// } 
// else {
//     echo "Message sent!";
// }

?>