<?php

if (isset($_post['submit'])) {

$nom = $_post['nom'];
$prenom = $_post['prenom'];
$mailFrom = $_post['email'];
$message = $_post['message'];

$mailTo = "kevin.jams974@gmail.com";
$headers = "From: " .$mailFrom;
$txt = "Vous avez reçu un e-mail from" . $nom . " " . $prenom . ".\n\n" . $message;

mail($mailTo, $txt, $headers);

header("Location : formulaire.php?mailsend");
}

?>