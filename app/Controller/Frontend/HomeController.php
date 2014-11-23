<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HomeController
 *
 * @author My PC
 */
//require_once "HttpRequest.php";
App::uses('CakeEmail', 'Network/Email');
App::import('Lib', 'PHPMailerAutoload');

class HomeController extends AppController {

  public function index() {
    $this->set("message", "Hello World");
  }

  public function post() {
    $this->set("message", "Hello World " . __METHOD__);
    $this->render("Home", "index");
  }

  public function writefile() {
    $file = fopen("file.csv", "r+");
    $text = "Không chỉ lập kỷ lục tại Trung quốc, bộ phim còn được nhiều thị trường quốc tế đón nhận một cách nồng nhiệt như Hàn Quốc, Anh, Nga, Pháp và Đức.Không chỉ lập kỷ lục tại Trung quốc, bộ phim còn được nhiều thị trường quốc tế đón nhận một cách nồng nhiệt như Hàn Quốc, Anh, Nga, Pháp và Đức.Không chỉ lập kỷ lục tại Trung quốc, bộ phim còn được nhiều thị trường quốc tế đón nhận một cách nồng nhiệt như Hàn Quốc, Anh, Nga, Pháp và Đức.Không chỉ lập kỷ lục tại Trung quốc, bộ phim còn được nhiều thị trường quốc tế đón nhận một cách nồng nhiệt như Hàn Quốc, Anh, Nga, Pháp và Đức.Không chỉ lập kỷ lục tại Trung quốc, bộ phim còn được nhiều thị trường quốc tế đón nhận một cách nồng nhiệt như Hàn Quốc, Anh, Nga, Pháp và Đức.Không chỉ lập kỷ lục tại Trung quốc, bộ phim còn được nhiều thị trường quốc tế đón nhận một cách nồng nhiệt như Hàn Quốc, Anh, Nga, Pháp và Đức.Không chỉ lập kỷ lục tại Trung quốc, bộ phim còn được nhiều thị trường quốc tế đón nhận một cách nồng nhiệt như Hàn Quốc, Anh, Nga, Pháp và Đức.";
    $i = 0;
    while ($i < 100000) {
      fwrite($file, $text . "\n");
      if ($i === 79999) {
        fwrite($file, 'COMPLETE TO THE LINE' . "\n");
      }
      if ($i / 10000 == 0) {
        usleep(60);
      }
      $i++;
    }
    fclose($file);
  }

  public function search($keyword = '') {
    $d1 = new DateTime();
    echo '<pre>';
    echo $d1->getTimestamp() . "\n";
    $file = fopen('file.csv', 'r');
    $pos = '';
    $i = 0;
    while ($line = fgets($file)) {
      $pos = strpos($line, $keyword);
      if ($pos !== FALSE) {
        //break;
      }
      $i++;
    }
    if ($pos != '' || $pos) {
      echo $pos . "\n";
    }
    fclose($file);
    echo $i . "\n";
    $d2 = new DateTime();
    echo $d2->getTimestamp() . "\n";
    echo '</pre>';
  }

  public function sendmail($body) {
    $Email = new CakeEmail(array(
        'transport' => 'Smtp',
        'from' => array('dev@dev-sites.byethost15.com'),
        //'host' => 'phpinfo.byethost11.com',
        'host' => 'smtp.gmail.com',
        'port' => 587,
        'timeout' => 30,
        'username' => '"dev.exp.hl.pc@gmail.com',
        'password' => 'long1184759',
        'client' => null,
        'log' => false,
        'tls' => true
      //'charset' => 'utf-8',
      //'headerCharset' => 'utf-8',
    ));
    $Email->to('b3117026@trbvm.com');
    $Email->subject('About');
    //$Email->config();
    var_dump($Email->send('My message'));

//    $to = 'exp.hl.pc@gmail.com';
//    $cc = '';
//
//    $recipients = $to . ", " . $cc;
//
//    $headers['From'] = 'dev@dev-sites.byethost15.com';
//    $headers['To'] = $to;
//    $headers['Subject'] = 'Test message';
//    $headers['Cc'] = 'cc@example.com';
//    $headers['Reply-To'] = 'from@example.com';
//
//    $smtp = mail($to, $recipients, $cc);

    echo '<pre>';

//    echo $send = $smtp->send($recipients, $headers, $body);
    echo '</pre>';
  }

  public function send($content = '') {

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
    for ($i = 0; $i < 3000; $i++) {
      $mail->Subject = '[News] Test ' . $i . ' ' . $i * $i;
      $mail->Body = 'Testing afjasdfjlajdlafmilderPHP' . $content . ' --- ' . $i;
      if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
      } else {
        echo "Message sent!";
      }
      if ($i / 100 == 0) {
        usleep(1000);
      } else {
        usleep(100);
      }
    }
  }

  public function sendThread() {
    $is_ok = http_response('http://dev-sites.byethost15.com/cake/admin');
    var_dump($is_ok);
  }

  public function sendThread2() {
    // Initialize session and set URL.
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, '/admin/');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_MAXREDIRS, 3);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 'http://dev-sites.byethost15.com/cake');
    // Set so curl_exec returns the result instead of outputting it.
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1');
    curl_setopt($ch, CURLOPT_REFERER, 'http://dev-sites.byethost15.com/cake/');

    // Get the response and close the channel.
    $response = curl_exec($ch);
    var_dump(curl_getinfo($ch,CURLINFO_HTTP_CODE)); 

    var_dump($response);
    curl_close($ch);
  }

  public function test(){
    
  }
}
