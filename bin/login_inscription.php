<?php

/*-- Entreprise: Belle Demeure
		---- Site web: belledemeure-ci.com
		---- Developpeurs: Dominique MENSAH , Konan N'GUESSAN
		---- Date: 18-Novembre 2015

		 FONCTION QUI ENVOI UN EMAIL A L'ADMINISTRATEUR DE BELLE DEMEURE A LA SUITE D'UNE DEMANDE D'INSCRIPTION */
		 
	// check if fields passed are empty
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
	$to = "info@belledemeure-ci.com"; // PUT YOUR EMAIL ADDRESS HERE
	$email_subject = "Nouvelle demande d'inscription"; // EDIT THE EMAIL SUBJECT LINE HERE
	$email_body = "Vous avez reçu une nouvelle demande d'inscription sur le site belledemeure-ci.com.\n"."Voici les détails:\n\nNom: $nom\n\nPrenom: $prenom\n\nTéléphone: $phone\n\nEmail: $email_address\n\nMotifs:\n$motifs \nVous avez un délai de 48 heures maximum pour traiter cette demande.\n";
	$headers = "From: info@belledemeure-ci.com\n";
	$headers .= "Reply-To: $email_address";	
	mail($to,$email_subject,$email_body,$headers);

	return true;		
?>