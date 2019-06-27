<?php
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// $subject = $_POST["subject"];
// $company = $_POST["company"];
// $email = $_POST["email"]
// $name = $_POST["name"];
// $phone = $_POST["phone"];
// $country = $_POST["country"];
// $message = $_POST["message"];

// $mail = new PHPMailer(true);

// try {
//     //Server settings
//     $mail->SMTPDebug = 2;                                       // Enable verbose debug output
//     $mail->isSMTP();                                            // Set mailer to use SMTP
//     $mail->Host       = 'smtp.mailgun.org';  // Specify main and backup SMTP servers
//     $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
//     $mail->Username   = 'postmaster@sandbox42a5c35a76274d11b030d8e7cc88a262.mailgun.org';                     // SMTP username
//     $mail->Password   = 'a2287b143314826ddbea793695b1a88a-2b778fc3-62834de0';                               // SMTP password
//     $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
//     $mail->Port       = 587;                                    // TCP port to connect to

//     //Recipients
//     $mail->setFrom('carrasquel18@gmail.com', 'Mailer');

//     // Content
//     $mail->isHTML(true);                                  // Set email format to HTML
//     $mail->Subject = $subject;
//     $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
//     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
 

//     $mail->send();
//     echo 'Message has been sent';
// } catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }

$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server - MailGun "SMTP Hostname"
$mail->Host = 'smtp.mailgun.org';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - MailGun "Default SMTP Login"
$mail->Username = "postmaster@sandbox42a5c35a76274d11b030d8e7cc88a262.mailgun.org";
//Password to use for SMTP authentication - MailGun "Default Password"
$mail->Password = "a2287b143314826ddbea793695b1a88a-2b778fc3-62834de0";
//Set who the message is to be sent from
$mail->setFrom('From Address', 'Sender Name');
//Set an alternative reply-to address
$mail->addReplyTo('Reply To', 'Sender Name');
//Set who the message is to be sent to
$mail->addAddress('Send To', 'Sender Name');
//Set the subject line
$mail->Subject = 'Test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
// $mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
$msg  = "This is a test message body";
$mail->Body = $msg;
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
// $mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
if (!$mail->send()) {
    header('HTTP/1.1 500 Internal Server Error', true, 500);
} else {
    header('HTTP/1.1 200 OK', true, 200);
}
};

?>

