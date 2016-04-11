<?php

/*-- Entreprise: Belle Demeure
		---- Site web: belledemeure-ci.com
		---- Developpeurs: Dominique MENSAH , Konan N'GUESSAN
		---- Date: 18-Novembre 2015

		 FONCTION QUI ENVOI UN EMAIL DE CONFIRMATION A LA SUITE D'UNE DEMANDE DE CONTACT */

	// check if fields passed are empty
	if(empty($_POST['name'])  		||
	   empty($_POST['phone']) 		||
	   empty($_POST['email']) 		||
	   empty($_POST['message'])		||
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
	$to = "$email_address"; // PUT YOUR EMAIL ADDRESS HERE
	$email_subject = "Belledemeure-ci votre demande de contact"; // EDIT THE EMAIL SUBJECT LINE HERE
	$email_body = "Le service commercial de Belle Demeure vous remercie de votre visite sur son site.\nNous vous garantissons une suite à votre message dans un délai de 48 heures maximum. \n\nCordialement,\n\nL'équipe de Belle Demeure ";
	$headers = "From: info@belledemeure-ci.com\n";
	$headers .= "Reply-To: info@belledemeure-ci.com";	
	mail($to,$email_subject,$email_body,$headers);

	return true;			
?>