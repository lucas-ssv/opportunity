<?php
    $email = $_POST['email'];
    $to = $email;
    $subject = "My subject";
    $txt = "Hello world!";
    $headers = "From: lucasdasilvavieira@gmail.com" . "\r\n" .
    "CC: " . $email;

    mail($to,utf8_decode($subject),utf8_decode($txt),$headers);
    header('Location: http://opportunityclient.000webhostapp.com/faq.html');
?>

