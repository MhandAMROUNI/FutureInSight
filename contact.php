<?php 

     $Nom = $_POST['nom'];
     $Email = $_POST['email'];
     $Numero = $_POST['numero'];
     $Message = $_POST['message'];
     $formcontent="From: $Nom \n Numero: $Numero \n Message: $Message";
     $recipient = "amrounimhand@gmail.com";
     $subject = "Contact Form";
     $mailheader = "From: $Email \r\n";
     if( mail($recipient, $subject, $formcontent, $mailheader))
	         echo "Email sent";
        else
             echo "Email sending failed";
 ?>