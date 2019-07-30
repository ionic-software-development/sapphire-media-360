<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'sonti96@live.co.uk';
    $email_subject = "SapphireMedia 360 Client Update";
    $body = "You have recieved an e-mail from : $name . \n".
            "Their e-mail address is as follows : $email . \n".
            "Message : $message . \n".

    $to = "sonti96@live.co.uk'";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";
    mail($to,$email_subject,$body,$headers);
    header("Location: ../index.html");
?>