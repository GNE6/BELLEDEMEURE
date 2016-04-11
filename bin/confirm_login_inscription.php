<?php

/*-- Entreprise: Belle Demeure
		---- Site web: belledemeure-ci.com
		---- Developpeurs: Dominique MENSAH , Konan N'GUESSAN
		---- Date: 18-Novembre 2015

		 FONCTION QUI ENVOI UN EMAIL DE CONFIRMATION A LA SUITE D'UNE DEMANDE D'INSCRIPTION */

	if(empty($_POST['nom'])  		||
	   empty($_POST['prenom'])  	||
	   empty($_POST['phone']) 		||
	   empty($_POST['email']) 		||
	   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
	   {
			echo "le formulaire contient des erreurs de saisie";
			return false;
	   }
		
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$phone = $_POST['phone'];
	$email_address = $_POST['email'];
	$motifs = $_POST['motifs'];

	// create email body and send it	
	$to = "$email_address"; // PUT YOUR EMAIL ADDRESS HERE
	$email_subject = "Votre demande d'inscription sur le site belledemeure-ci.com"; // EDIT THE EMAIL SUBJECT LINE HERE
	$email_body = "Le service commercial de Belle Demeure vous remercie de votre visite sur son site.\nUn commercial vous recontactera dans un délai de 48 heures maximum.\nNous vous invitons à régulièrement consulter vos mails.\n\nCordialement,\n\nL'équipe de Belle Demeure ";
	$headers = "From: info@belledemeure-ci.com\n";
	$headers .= "Reply-To: infos@belledemeure-ci.com";	
	mail($to,$email_subject,$email_body,$headers);

	return true;			
?>