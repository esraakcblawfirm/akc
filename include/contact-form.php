<?php

session_cache_limiter('nocache');
header('Expires: ' . gmdate('r', 0));
header('Content-type: application/json');

require_once('php-mailer/PHPMailerAutoload.php');
$mail = new PHPMailer();

// Enter your email address. If you need multiple email recipes simply add a comma: email@domain.com, email2@domain.com
$to = "info@akcblawfirm.com";

// Form Fields
$name = isset($_POST["widget-contact-form-name"]) ? $_POST["widget-contact-form-name"] : "Undefined Name";
$email = $_POST["widget-contact-form-email"];
$message = isset($_POST["widget-contact-form-message"]) ? $_POST["widget-contact-form-message"] : "Message";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'relay-hosting.secureserver.net';
    $mail->Port = 25;
    $mail->ssl = false;
    $mail->authentication = false;
    $mail->addAddress($to, "Name");
    $mail->isHTML();
    $mail->Subject = "New Submission From " . $email;
    $mail->Body = '<html><body>';
    $mail->Body .= '<p>Gönderenin Mail Adresi : ' . $email . '</p>';
    $mail->Body .= '<p>Gönderenin Adı         : ' . $name . '</p>';
    $mail->Body .= '<P>Mail içeriği           : ' . '</P>';
    $mail->Body .= '<p>' . $message . '</p>';
    $mail->Body .= '</body></html>';
    $mail->setFrom('', 'Test');

    if (!$mail->Send()) {
        $response = array('response' => 'error', 'message' => $mail->ErrorInfo);
    } else {
        $response = array('response' => 'success');
    }
    echo json_encode($response);
}
?>