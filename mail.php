<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "laurabrisindi11@gmail.com";  
    $subject = "Nuovo messaggio dal form di contatto";
    $body = "Nome: $name\nEmail: $email\nMessaggio:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Email inviata con successo!";
    } else {
        echo "Errore nell'invio dell'email.";
    }
}
?>
