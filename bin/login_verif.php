<?php
session_start();

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=belle_demeure;charset=utf8', 'root', '');

}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

		 
if(empty($_POST['identifiant']) ||empty($_POST['mot_de_passe']))
{
	echo "le formulaire contient des erreurs de saisie";
	return false;
}
	
else
	{

	if ( isset($_POST))
		{
			extract($_POST);
			$sql = "SELECT * FROM users WHERE identifiant= '".addslashes($identifiant)."' AND passwd= '".addslashes($mot_de_passe)."'";
			$reponse = $bdd->query($sql);
			$donnees = $reponse->fetch();
			$_SESSION["id_user"]= $donnees['id_user'] ;	
		}
		if (isset($_SESSION['id_user']))
		{ 
			$sql= "SELECT * FROM clients_infos WHERE id_client= '".addslashes($identifiant)."'";
			$reponse = $bdd->query($sql);
			$donnees = $reponse->fetch();
			$_SESSION["nom"]= $donnees['nom'] ;
			$_SESSION["prenoms"]= $donnees['prenoms'] ;
			$_SESSION["statut"]= $donnees['statut'] ;
			$_SESSION["ddn"]= $donnees['ddn'] ;
			$_SESSION["sexe"]= $donnees['sexe'] ;
			return true;
		}
	}
				
?>
