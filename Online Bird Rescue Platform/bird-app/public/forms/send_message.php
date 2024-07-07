<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    function sendEmail() {
        //Server settings
        $mail = new PHPMailer(true);                     //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = "ssl://smtp.gmail.com";                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'shams1.client@gmail.com';                     //SMTP username
        $mail->Password   = 'twadbdxmdwgfnsxz';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('shams1.client@gmail.com');
        $mail->addAddress('mazharul.islam1478@gmail.com');     //Add a recipient
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Subject = $_POST["name"];              
        $mail->Body = "<p><strong>Name:</strong> ".$_POST["name"]."</p>"; 
        $mail->Body .= "<p><strong>Email:</strong> ".$_POST["email"]."</p>";
        $mail->Body .= "<p><strong>Subject:</strong> ".$_POST["subject"]."</p>";
        $mail->Body .= "<p><strong>Message:</strong> ".$_POST["message"]."</p>"; 
        if (isset($_FILES['photo']) && $_FILES['photo']['error'] == UPLOAD_ERR_OK) {
            $mail->addAttachment($_FILES['photo']['tmp_name'], $_FILES['photo']['name']);
        }

        $data = '';

        try {
            // Attempt to send the email
            $mail->send();
            $data = 'success'; // terminate the script after sending the JSON response
        } catch (Exception $e) {
            // Handle errors
            $data = 'error';// terminate the script after sending the JSON response
        }
        echo json_encode($data);
        
}
}
sendEmail();
?>

