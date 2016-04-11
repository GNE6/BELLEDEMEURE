<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Entreprise: Belle Demeure
		---- Site web: belledemeure-ci.com
		---- Developpeurs: Dominique MENSAH , Konan N'GUESSAN
		---- Date: 18-Novembre 2015-->

		<!-- PAGE ESPACE CLIENT EN CONSTRUCTION -->

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
		<!-- affichage du plan du site -->
		<?php include "includes/header.html"; ?>
		<!-- Page Content -->
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<div class="row">

				<div class="col-lg-12">
					<h1 class="page-header">Espace client</h1>
					<ol class="breadcrumb">
						<li><a href="accueil">Accueil</a></li>
						<li>Espace clients</li>
						<li class="active">Déjà client</li>
					</ol>
				</div>
			</div>
			<!--Header avec navigation -->
			<div class="row">
				<div class="col-lg-12">
					<div class="jumbotron">
						<h1><span class="error-404">404</span></h1>
						<p>La page demandée est en cours de construction</p>
						<?php echo $_SESSION['identifiant']; ?>
						<ul>
							<li><a href="accueil">Accueil</a></li>
							<li><a href="qui-sommes-nous">Qui sommes nous</a></li>
							<li>
								<a href="nos-services">Nos services</a>
								<ul>
									<li><a href="nos-services#acqui-terrain">Acquisition / sécurisation de terrains</a></li>
									<li><a href="nos-services#amenagement">Aménagement de terrains</a></li>
									<li><a href="nos-services#construction">Construction</a></li>
									<li><a href="nos-services#promo-gestion">Promotion et gestion immobilière</a></li>
									<li><a href="nos-services#buro-etude">Bureau d'études et de conception</a></li>
								</ul>
							</li>
							<li>
								Projets en cours
								<ul>
									<li><a href="amaryllis">Amaryllis</a></li>
								</ul>	
							</li>
							<li><a href="espace-clients">Espace clients</a></li>
							<li><a href="contact-us">Contacts</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- footer -->
		<?php include('includes/footer.html'); ?>
	</body>
</html>
