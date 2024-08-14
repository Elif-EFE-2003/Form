<?php

// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// Create an instance; passing `true` enables exceptions
	$mail = new PHPMailer(true);

	// Get email from the form input
	$to_email = isset($_POST['email']) ? $_POST['email'] : '';

	try {
		// Server settings
		$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
		$mail->isSMTP();                                            // Send using SMTP
		$mail->Host = 'smtp.mail.yahoo.com';                       // Set the SMTP server to send through
		$mail->SMTPAuth = true;                                   // Enable SMTP authentication
		$mail->Username = 'efe.elif@yahoo.com';                    // SMTP username
		$mail->Password = '********';                       // SMTP password
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            // Enable implicit TLS encryption
		$mail->Port = 465;                                        // TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

		// Recipients
		$mail->setFrom('efe.elif@yahoo.com', 'Mailer');
		$mail->addAddress($to_email, 'Recipient');     // Add a recipient

		// Content
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = 'Here is the subject';
		$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		$mail->send();
		echo 'Message has been sent';
	} catch (Exception $e) {
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
} else {
	echo 'Form has not been submitted';
}
?>

