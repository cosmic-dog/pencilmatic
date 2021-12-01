<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/phpmailer/src/Exception.php';
require_once __DIR__ . '/vendor/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/vendor/phpmailer/src/SMTP.php';

// passing true in constructor enables exceptions in PHPMailer
$mail = new PHPMailer(true);

try {
    // Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
    $mail->SMTPDebug = false; 
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = 'pencilmatic@gmail.com'; // YOUR gmail email
    $mail->Password = '301Hotwell'; // YOUR gmail password

    // Sender and recipient settings
    $mail->setFrom('info@pencilmatic.yu', 'Sender Name');
    $mail->addAddress('pencilmatic@gmail.com', 'Receiver Name');
    $mail->addReplyTo($_POST['email'], 'Sender Name'); // to set the reply to

    // Setting the email content
    $mail->IsHTML(true);
    $mail->Subject = "pencilmatic.co.uk Contact Us form";
    $mail->Body = '<b>Email: ' . $_POST['email'] . '</b><br><b>Message:</b> ' . $_POST['message'];
    
    $mail->send();

    header("Location: /?email-sent=true#form-response");
    die();
} catch (Exception $e) {
    header("Location: /?email-error={$mail->ErrorInfo}#form-response");
}
?>
