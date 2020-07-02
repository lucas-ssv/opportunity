<?php
    $email = $_POST['email'];
    $to = $email;
    $subject = "My subject";
    $txt = "Hello world!";
    $headers = "From: lucasdasilvavieira@gmail.com" . "\r\n" .
    "CC: " . $email;

    mail($to,$subject,$txt,$headers);
    header('Location: http://opportunityclient.000webhostapp.com/index.html');
?>

