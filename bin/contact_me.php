<?php

/*-- Entreprise: Belle Demeure
		---- Site web: belledemeure-ci.com
		---- Developpeurs: Dominique MENSAH , Konan N'GUESSAN
		---- Date: 18-Novembre 2015

		 FONCTION QUI ENVOI UN EMAIL A L'ADMINISTRATEUR DE BELLE DEMEURE A LA SUITE D'UNE DEMANDE DE CONTACT */


	// check if fields passed are empty
	if(empty($_POST['name'])  		||
	   empty($_POST['phone']) 		||
	   empty($_POST['email']) 		||
	   empty($_POST['message'])	||
	   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
	   {
			echo "No arguments Provided!";
			return false;
	   }
		
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email_address = $_POST['email'];
	$message = $_POST['message'];
		
	// create email body and send it	
	$to = 'info@belledemeure-ci.com'; // PUT YOUR EMAIL ADDRESS HERE
	$email_subject = "Nouvelle demande de contact:  $name"; // EDIT THE EMAIL SUBJECT LINE HERE
	$email_body = "Vous avez reçu une demande de contacts sur le site web belledemeure-ci.com.\n\n"."Voici les détails:\n\nNom: $name\n\nTéléphone: $phone\n\nEmail: $email_address\n\nMessage:\n$message \n\nVous avez un délai de 48 heures maximum pour traiter ce message";
	$headers = "From: info@belledemeure-ci.com\n";
	$headers .= "Reply-To: $email_address";	
	mail($to,$email_subject,$email_body,$headers);

	return true;			
?>