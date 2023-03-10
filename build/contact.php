<?php 

$name = $_POST['visitor_name'];
$email = $_POST['visitor_email'];
$message = $_POST['visitor_message'];

$emailHeader = "From: "  . $name . "<" . $email . ">\r\n";
$recipient = 'mrnbnkomo@gmail.com';
$subject = 'Email from Portfolio Site';

mail ($recipient, $subject, $message, $emailHeader) or die("Error!");

echo '
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Essentials -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Title -->
    <title>Nigel Nkomo | Portfolio</title>

    <!-- Styles -->
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;700&family=Tilt+Neon&display=swap");

      html {
        font-size: 150%;
      }

      .page {
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-family: "Tilt Neon", sans-serif;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="page">
      <div class="page__container">
        <h1 class="page__heading">
          Thank you for contacting me. I will get back to you as soon as
          possible.
        </h1>
        <p class="page__text">
          Go back to the
          <a class="page__link" href="index.html">hompepage</a>
        </p>
      </div>
    </div>
  </body>
</html>
';