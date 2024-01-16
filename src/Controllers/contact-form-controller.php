<?php

namespace Portfolio\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';



class Contact_Form_Controller
{

    public function get_mail_params()
    {

        if (!isset($_POST['name']) && !isset($_POST['email']) && !isset($_POST['text'])) {
            return;
        }

        $name = $_POST['name'];

        $email = $_POST['email'];

        $text = $_POST['text'];


        $this->send_mail($name, $email, $text);
    }

    public function send_mail($name, $email, $text)
    {

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer();

        try {
            //Server settings
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'localhost';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = false;                                   //Enable SMTP authentication                              //SMTP password
            //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 1025;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`


            //Recipients
            $mail->setFrom($email, $name);
            $mail->addAddress('cristian.lafuente.martinez@gmail.com', 'Cristian Lafuente Martinez');     //Add a recipient
            //$mail->addAddress('ellen@example.com');               //Name is optional
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Contacto Web Portfolio';
            $mail->Body    = $text;


            $mail->send();
            //echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
