<?php
/*
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'D:\xampp\vendor\autoload.php';

$mail = new PHPMailer(true);*/



try {


$to      = 'harshalmali527@gmail.com';
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = 'From: information@fourz.tech'       . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
    header("location: contact.html");

/*


    //Server settings
    $mail->SMTPDebug = 2;                                 
    $mail->isSMTP();                                      
    $mail->Host       = 'smtp.zoho.in';  
    $mail->SMTPAuth   = true;                              
    $mail->Username   = 'information@fourz.tech';                
    $mail->Password   = 'Harshal2117@@';                          
    $mail->SMTPSecure = 'tls';                            
    $mail->Port       = 587;                                

    //Recipients
    $mail->setFrom('', 'Mailer');
    $mail->addAddress('', 'Joe User');     

    // Content
    $mail->isHTML(true);                                  
    $mail->Subject = ;
    $mail->Body    = 'This is the message body: <br><br> Name: '.$_POST['name'].'<br>Email: '.$_POST['email'].'<br>Message: '.;

    $mail->send();
    echo 'Message has been sent';
    header("location: contact.html");

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}*/
?>




