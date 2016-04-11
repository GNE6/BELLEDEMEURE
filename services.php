<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Entreprise: Belle Demeure
		---- Site web: belledemeure-ci.com
		---- Developpeurs: Dominique MENSAH , Konan N'GUESSAN
		---- Date: 18-Novembre 2015-->

		<!-- PAGE NOS SERVICES-->

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Belle Demeure intervient dans l’acquisition du foncier, l’aménagement de terrains, la construction, la gestion immobilière et la promotion immobilière">
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
		<script src="js/jquery.js"></script>
		<script type="text/javascript">
			function chargement()
			{
			var url = document.location.toString();
			if (url.match('#')) {
			  $('.mynavtab a[href=#'+url.split('#')[1]+']').tab('show') ;
			  }
			}
		</script>
	</head>
	<body onload="chargement();">
		<!-- header avec navigation -->
		<?php include "includes/header.html"?>
		<!-- Page Content -->
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<div class="row">
				<div class="col-lg-12">
					<ol class="breadcrumb">
						<li><a href="accueil">Accueil</a></li>
						<li class="active">Nos Services</li>
					</ol>
				</div>
			</div>
			<!-- Service Tabs -->
			<div class="row">
				<div class="col-lg-12">
					<ul id="myTab" class="nav nav-tabs nav-justified mynavtab">
						<li class="active"><a href="#acqui-terrain" data-toggle="tab"><h4>Acquisition et sécurisation de terrains</h4></a></li>
						<li class=""><a href="#amenagement" data-toggle="tab"><h4>Am&eacutenagement de terrains</h4></a></li>
						<li class=""><a href="#construction" data-toggle="tab"><h4>Construction</h4></a></li>
						<li class=""><a href="#promo-gestion" data-toggle="tab"><h4>Promotion et gestion immobilière</h4><br /></a></li></li>
						<li class=""><a href="#buro-etude" data-toggle="tab"><h4>Bureau d'études et de conception</h4><br /></a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="acqui-terrain">
							<h4><small><i>Acquisition et sécurisation de terrains</i></small></h4>
							<p>Nous réalisons pour le compte de nos clients l'acquisition et la sécurisation du foncier
							(terrains urbains ou terrains ruraux) : <br/>
								<ul>
									<li>prospection</li>
									<li>négociation des coûts d'acquisition </li>
									<li>établissement des dossiers techniques</li>
									<li>suivi des différentes étapes allant de l'immatriculation au foncier à l'Attestation de Concession Définitive (ACD)</li>
								</ul>
							</p>
						</div>
						<div class="tab-pane fade" id="amenagement">
							<h4><small><i>Aménagement de terrains</i></small></h4>
							<p>Nous réalisons ici les plans parcellaires de lotissement en vue
							de leur approbation par arrêté du Ministre en charge de la construction :<br/>
							<ul><li>plan de masse</li>
							<li>morcellement</li>
							<li>montage du dossier de demande d'approbation</li>
							<li>suivi du dossier de lotissement jusqu’à l'approbation</li></ul>
							</p>
						</div>
						<div class="tab-pane fade" id="construction">
							<h4><small><i>Construction</i></small></h4>
							<p>Nous réalisons la construction de logements du gros œuvre à la finition :<br/> 
								<ul>
									<li>maçonnerie</li>
									<li>menuiserie</li>
									<li>électricité</li>
									<li>plomberie</li>
									<li>peinture</li>
								</ul><br/>
								Nous construisons des maisons économiques, de moyen standing et de haut standing
							</p>
							<!-- Images non cliquable affichées dans la rubrique construction-->
							<div class="row">
								<div class="col-md-4 col-sm-6">
										<img class="img-responsive img-portfolio img-hover" src="images/thumb_villa_eco_socio_3P_700x300.jpg" alt=""/>
										<span><h3>Villa Eco Socio 3 pièces</h3></span>
								</div>
								<div class="col-md-4 col-sm-6">
										<img class="img-responsive img-portfolio img-hover" src="images/thumb_villa_eco_socio_4P_700x300.jpg" alt=""/>
										<span><h3>Villa Eco Socio 4 pièces</h3></span>
								</div>
								<div class="col-md-4 col-sm-6">
										<img class="img-responsive img-portfolio img-hover" src="images/thumb_duplex_4P_700x300.jpg" alt="">
										<span><h3>Duplex 4 pièces</h3></span>
								</div>
								<div class="col-md-4 col-sm-6">
										<img class="img-responsive img-portfolio img-hover" src="images/thumb_duplex_5P_700x300.jpg" alt="">
										<span><h3>Duplex 5 pièces</h3></span>
								</div>
								<div class="col-md-4 col-sm-6">
										<img class="img-responsive img-portfolio img-hover" src="images/thumb_moyen_standing_700x300.jpg" alt="">
										<span><h3>Villa moyen standing</h3></span>
								</div>
								<div class="col-md-4 col-sm-6">
										<img class="img-responsive img-portfolio img-hover" src="images/thumb_haut_standing_700x300.jpg" alt="">
										<span><h3>Villa haut standing</h3></span>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="promo-gestion">
							<p> Nous réalisons des promotions immobilières pour le compte de tiers ou pour notre propre compte.
								<h4><small><i>Promotion immobilière</i></small></h4>
								<ul>
									<li> élaboration de plans de maisons</li>
									<li>démarche d'approbation pour le permis de construire</li>
									<li>construction</li>
								</ul>
								<h4><small><i>Gestion immobilière</i></small></h4>
								<p> Nous gérons le patrimoine immobilier mis à notre disposition par des tiers.</p>
							</p>
						</div>
						<div class="tab-pane fade" id="buro-etude">
							<h4><small><i>Bureau d'études et de conception</i></small></h4>
							<p>Nous réalisons:
								<ul>
									<li>le plan d'aménagement et d'occupation du site (plan de masse)</li>
									<li>les plans architecturaux des maisons</li>
									<li>le calcul de structure</li>
									<li>le dossier de faisabilité technique de projets immobiliers</li>
									<li>le dossier de rentabilité économique et financière</li>
								</ul>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- footer -->
		<?php include('includes/footer.html'); ?>
	</body>
</html>