<?php

if (isset($_POST)) {
    $email = $_POST['email'];
    $motif = $_POST['motif'];
    $depart = $_POST['depart'];
    $retour = $_POST['retour'];
    $message = $_POST['message'];
    // send mail to admin from email
    $to = "";
    $subject = "Demande de congé";
    $txt = "Bonjour, je vous contacte pour vous demander un congé du $depart au $retour pour le motif suivant : $motif. $message";
    $headers = "From: $email";
    $mail = mail($to,$subject,$txt,$headers);
    if($mail){
        echo ("<h6>Mail envoyé</h6>");
    }else{
        echo ("<h6>Erreur</h6>");
    }
}