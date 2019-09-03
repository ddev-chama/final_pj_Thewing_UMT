<?php
$s = 1;
if(empty($_POST["UtypeB"] || $_POST["UPhone"] || $_POST["Uemail"] || $_POST["Uname"])){ 
    header("location:javascript:history.go(-1)");
}
else
{//start_else
$client_msg_name =  $_POST["Uname"] ;
$client_msg_mail = $_POST["Uemail"]; 
$client_msg_phone = $_POST["UPhone"] ;
$client_msg_business = $_POST["UtypeB"] ;

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Asia/Bangkok');

require 'PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
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
$mail->Host = "smtp.gmail.com";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 465;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'ssl';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "ddev.chama@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "Earth123@";
//Set who the message is to be sent from
$mail->setFrom('ddev.chama@gmail.com', 'Thewing_Alert');
//Set who the message is to be sent to
$mail->addAddress('ak3167@gmail.com', 'Chama');
//Set the subject line
$mail->Subject = 'Message from '.$client_msg_name;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('content.html'), dirname(__FILE__));
$mail->msgHTML("ผู้สนใจ :".$client_msg_name."<br>ประเภทธุรกิจ :".$client_msg_business."<br>เบอร์ติดต่อ :".$client_msg_phone."<br>Email Address :".$client_msg_mail);

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
    header("location:index.php?status=success")
}

}//end_else