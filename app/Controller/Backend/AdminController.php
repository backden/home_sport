<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminController
 *
 * @author My PC
 */
App::import('Lib', 'PHPMailerAutoload');

class AdminController extends AppController {

  public function index() {
    $mail = new PHPMailer;
//Tell PHPMailer to use SMTP
    $mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
    $mail->SMTPDebug = 1;
//Ask for HTML-friendly debug output
    $mail->Debugoutput = 'html';

//Set the hostname of the mail server
//Set the SMTP port number - likely to be 25, 465 or 587
    $mail->Port = 587;
//Whether to use SMTP authentication
    $mail->SMTPAuth = true;
//Username to use for SMTP authentication
    $mail->Username = "dev.exp.hl.pc@gmail.com";
//Password to use for SMTP authentication
    $mail->Password = "long1184759";
//Set who the message is to be sent from
    $mail->setFrom('dev.exp.hl.pc@gmail.com', 'First Last');
//Set an alternative reply-to address
    //$mail->addReplyTo('replyto@example.com', 'First Last');
//Set who the message is to be sent to
    $mail->addAddress('backden@yopmail.com', 'John Doe');
//Set the subject line
//    $mail->Subject = 'PHPMailer SMTP test' . $content;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
    //$mail->msgHTML('Mailer PHP testing...');
    //$mail->Body = 'Testing afjasdfjlajdlafmilderPHP' . $content;
//Replace the plain text body with one created manually
    //$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
    //$mail->addAttachment('images/phpmailer_mini.png');

    $mail->SMTPSecure = 'tls';
    //$mail->Host = "mx.byetcluster.com";
    $mail->Host = "smtp.gmail.com";
//send the message, check for errors
    $mail->Subject = '[News] Test cURL';
    $mail->Body = 'cURL sent';
    if (!$mail->send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
      echo "Message sent!";
    }
    exit;
  }

}
