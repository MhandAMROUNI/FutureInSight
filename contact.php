<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Assurez-vous d'avoir installé PHPMailer via Composer

$Nom = $_POST['nom'];
$Email = $_POST['email'];
$Numero = $_POST['numero'];
$Message = $_POST['message'];

$mail = new PHPMailer(true);

try {
    // Configuration du serveur SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.example.com'; // Remplacez par l'adresse du serveur SMTP
    $mail->SMTPAuth = true;
    $mail->Username = 'votre_email@example.com'; // Remplacez par votre adresse e-mail
    $mail->Password = 'votre_mot_de_passe'; // Remplacez par votre mot de passe
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Destinataire et expéditeur
    $mail->setFrom($Email, $Nom);
    $mail->addAddress('amrounimhand@gmail.com'); // Remplacez par l'adresse e-mail du destinataire

    // Contenu de l'e-mail
    $mail->Subject = 'Contact Form';
    $mail->Body = "From: $Nom \nNumero: $Numero \nMessage: $Message";

    // Envoi de l'e-mail
    $mail->send();
    echo 'Email sent';
} catch (Exception $e) {
    echo 'Email sending failed: ' . $mail->ErrorInfo;
}
?>
