<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Entreprise: Belle Demeure
		---- Site web: belledemeure-ci.com
		---- Developpeurs: Dominique MENSAH , Konan N'GUESSAN
		---- Date: 18-Novembre 2015-->

		<!-- PAGE LOGIN -->

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content=" ce site web présente l'entreprise Belle Demeure SARL en Côte d'Ivoire, spécialisée dans la construction et la gestion immobilière">
		<meta name="author" content="Belle Demeure SARL">
		<link rel="icon" type="image/png" href="images/Logo_BD_Web_2.png" />
		<title>BelleDemeure - Vous offrir bien plus que des maisons</title>
		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Custom CSS -->
		<link href="css/modern-business.css" rel="stylesheet">
		<!-- Custom Fonts -->
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="css/style.css" rel="stylesheet">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- Header avec navigation -->
		<?php include "includes/header.html"; ?>
		<!-- Page Content -->
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<div class="row">
				<div class="col-lg-12">
					<ol class="breadcrumb">
						<li><a href="accueil">Accueil</a></li>
						<li class="active">Espace clients</li>
					</ol>
				</div>
			</div>
			<div class="row">
				<!-- Section Déjà client -->
				<div class="col-md-6">
					<h1 >Déjà client</h1>
					
					<form name="login" id="login" action="404.php" method="post">
						<fieldset>
							<legend>Authentification</legend>
							<div class="control-group form-group">
								<div class="controls">
									<input type="text" class="form-control" id="identifiant" required data-validation-required-message="Entrer votre identifiant." placeholder="identifiant">
								</div>
							</div>
							<div class="control-group form-group">
								<div class="controls">
									<input type="text" class="form-control" id="mot_de_passe" required data-validation-required-message="Entrer votre mot de passe." placeholder="mot_de_passe">
									<p class="help-block"></p>
								</div>
							</div>
							<div id="success3">
							</div>
							<button type="submit" class="btn btn-primary">connexion</button>
						</fieldset>
					</form>
					<br/>
					<a href="page-en-construction"> Accéder à l'espace client </a>
				</div>
			<!-- Section Devenir Client-->
				<div class="col-md-6">
					<h1>Devenir client</h1>
					<br></br>
					<form name="sign_in" id="sign_in" novalidate>
						<fieldset>	
							<legend>Inscription |&nbsp <a class="manif_interet" href="./download/fiche_souscription.pdf" download="Fiche de souscription.pdf"> Télécharger la fiche de manifestation d'intérêt</a></legend>
							<div class="control-group form-group">
								<div class="controls">
									<input type="text" class="form-control" id="nom" placeholder="Nom" required data-validation-required-message="Veuillez entrer votre nom.">
									<p class="help-block"></p>
								</div>
							</div>
							<div class="control-group form-group">
								<div class="controls">
									<input type="text" class="form-control" id="prenom" placeholder="Prénom" required data-validation-required-message="Veuillez entrer votre prénom.">
									<p class="help-block"></p>
								</div>
							</div>
							<div class="control-group form-group">
								<div class="controls">
									<input type="email" class="form-control" id="email" placeholder="Adresse email"  required data-validation-required-message="Veuillez entrer votre addresse email.">
									<p class="help-block"></p>
								</div>
							</div>
							<div class="control-group form-group">
								<div class="controls">
									<input type="tel" class="form-control" id="phone" placeholder="Numéro de téléphone:" required data-validation-required-message="Veuillez entrer votre numéro de téléphone.">
								</div>
							</div>
							<div class="control-group form-group">
								<fieldset>
									<legend>Motif(s)</legend>
									<div class="controls">
										<div class="checkbox">
											<label>
												<input type="checkbox" id="acquis_foncier" name="motif_checkboxes[]" value="acquis_foncier" aria-invalid="true" data-validation-minchecked-minchecked="1" data-validation-minchecked-message="Vous devez cocher au moins une case ">
													acquisition du foncier
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" id="secu_foncier" name="motif_checkboxes[]" value="secu_foncier" aria-invalid="false">
												   sécurisation du foncier
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" id="amena_terrain" name="motif_checkboxes[]" value="amena_terrain" aria-invalid="false" >
													aménagement de terrains
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" id="construction" name="motif_checkboxes[]" value="construction" aria-invalid="false" >
													construction
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" id="promo_immo" name="motif_checkboxes[]" value="promo_immo" aria-invalid="false" >
													promotion immobilière
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" id="gestion_immo" name="motif_checkboxes[]" value="gestion_immo" aria-invalid="false" >
													gestion immobilière
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" id="plan_amena" name="motif_checkboxes[]" value="plan_amena" aria-invalid="false" >
													plan d'aménagement et d'occupation du site
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" id="plan_maison" name="motif_checkboxes[]" value="plan_maison" aria-invalid="false" >
													plans architecturaux des maisons
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" id="calcul" name="motif_checkboxes[]" value="calcul" aria-invalid="false" >
													calcul de structures
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" id="dossier_tech" name="motif_checkboxes[]" value="dossier_tech" aria-invalid="false" >
													dossier de faisabilité technique des projets immobiliers
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" id="dossier_fin" name="motif_checkboxes[]" value="dossier_fin" aria-invalid="false" >
													dossier de rentabilité économique et financière
											</label>
										</div>		
										<p class="help-block">*Cochez au moins une case</p>
									</div>
								</fieldset>
							</div>
							<div id="success"></div>
							<div id="success2"></div>
							<!-- For success/fail messages -->
							<button type="submit" class="btn btn-primary">Envoyer</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
		<!-- footer -->
		<?php include('includes/footer.html'); ?>
		<script src="js/jqBootstrapValidation.js"></script>
		<script src="js/login_inscription.js"></script>
		<script src="js/login_test.js"></script>
	</body>
</html>