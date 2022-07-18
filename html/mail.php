<?php
require_once '../vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.mail.ru', 465, 'ssl'))
    ->setUsername('testoviy321@mail.ru')
    ->setPassword('5nYfE0PNAlbyvDekge9L')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Wonderful Subject'))
    ->setFrom(['testoviy321@mail.ru' => 'Vlad'])
    ->setTo(['rinosetou@yandex.ru'])
    ->setBody('Here is the message test of swiftmaler')
;

// Send the message
$result = $mailer->send($message);
var_dump($result);