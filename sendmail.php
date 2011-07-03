<?php

require_once 'lib/swift_required.php';

//Create the Transport
$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 25)
  ->setUsername('Shasha the great')
  ->setPassword('varunkthakur')
  ;

/*
You could alternatively use a different transport such as Sendmail or Mail:

//Sendmail
$transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -bs');

//Mail
$transport = Swift_MailTransport::newInstance();
*/

//Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

//Create a message
$message = Swift_Message::newInstance('Wonderful Subject')
  ->setFrom(array('thegreatshasha@gmail.com' => 'John Doe'))
  ->setTo(array('thegreatshasha@gmail.com' => 'A name'))
  ->setBody('Here is the message itself')
  ;
  
//Send the message
$result = $mailer->send($message);

/*
You can alternatively use batchSend() to send the message

$result = $mailer->batchSend($message);
*/
 ?>
