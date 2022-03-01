<?php
   $to_email = "Dpanmail2u@gmail.com";
   $subject = "Simple Email Test via PHP";
   $body = "Hi,\n I love you";
   $headers = "From: isitaghosh28@gmail.com";
 
   if ( mail($to_email, $subject, $body, $headers)) {
      echo("Email successfully sent to $to_email...");
   } else {
      echo("Email sending failed...");
   }
?>