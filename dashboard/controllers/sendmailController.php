<?php

require_once(__DIR__ . '/../../constants.php');
// echo  __FILE__.'<br>';
// echo dirname(__FILE__).'<br>==================<br>';
// echo __DIR__.'<br>';
// echo dirname(__DIR__).'<br>';

// echo dirname('/dashboard/controllers/')."<br>";
// echo dirname('/vendor/autoload.php');
//echo  "<br>==============================================". __DIR__.'/../../vendor/autoload.php';
require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . "/../../constants.php";

// Create the Transport
$transport = (new Swift_SmtpTransport(EMAIL_HOST, EMAIL_PORT, 'ssl'))
    ->setUsername(EMAIL)
    ->setPassword(PASSWORD);

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);


function send_verify_link($userEmail, $token)
{
    global $mailer;

    $body = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Verify Email</title>
    </head>
    <body>
        <div class="conttainer">
        <p>Thanks for signing up on our website. Please click on this link to verify your email</p>
     <a href="//' . $_SERVER["HTTP_HOST"] . '/?v_token=' . $token . '">
     Verify Your Account </a>
        </div>
    </body>
    </html>';
    // Create a message
    $message = (new Swift_Message('Verify Your Email Address'))
        ->setFrom(EMAIL)
        ->setTo($userEmail)
        ->setBody($body, 'text/html');

    // Send the message
    $mailer->send($message);
}
