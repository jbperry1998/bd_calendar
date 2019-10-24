<?php

//$send_email = 'hoocooks@gmail.com';
//$send_password = '@Hoocooks19';

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message1 = $_POST['message'];

$message = $message1 + '\r\nFrom: ' + $name + '\r\nWith Email: ' + $email + '\r\n ';

$to      = 'hoocooks@gmail.com';
$headers = 'From: hoocooks@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

header('Location: index.html');
?>