<?php
    require '/lib/SendGrid.php';
    $sendgrid = new SendGrid("SENDGRID_APIKEY");
    $email    = new SendGrid\Email();
    
    $email->addTo("test@sendgrid.com")
          ->setFrom("you@youremail.com")
          ->setSubject("Sending with SendGrid is Fun")
          ->setHtml("and easy to do anywhere, even with PHP");
    
    $sendgrid->send($email);

?>