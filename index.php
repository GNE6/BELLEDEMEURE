<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Entreprise: Belle Demeure
		---- Site web: belledemeure-ci.com
		---- Developpeurs: Dominique MENSAH , Konan N'GUESSAN
		---- Date: 18-Novembre 2015-->

		<!-- PAGE D'ACCUEIL -->

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Belle Demeure SARL est spécialisée dans la construction et la gestion immobilière en Côte d'Ivoire">
		<meta name="author" content="Belle Demeure SARL">
		<link rel="icon" type="image/png" href="images/Logo_BD_Web_2.png" />
		<title>BelleDemeure - Vous offrir bien plus que des maisons</title>
		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Custom CSS -->
		<link href="css/modern-business.css" rel="stylesheet">
		<!-- Custom Fonts -->
		<link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
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
		<!-- Header Carousel -->
		<header id="myCarousel" class="carousel slide">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
				<li data-target="#myCarousel" data-slide-to="4"></li>
				<li data-target="#myCarousel" data-slide-to="5"></li>
				<li data-target="#myCarousel" data-slide-to="6"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<div class="fill" style="background-image:url('images/images_caroussel/image_caroussel_1900x1080_4.jpg');"></div>
					<div class="carousel-caption"></div>
				</div>
				<div class="item">
					<div class="fill" style="background-image:url('images/images_caroussel/image_caroussel_1900x1080_5.jpg');"></div>
					<div class="carousel-caption"></div>
				</div>
				<div class="item">
					<div class="fill" style="background-image:url('images/images_caroussel/image_caroussel_1900x1080_6.jpg');"></div>
					<div class="carousel-caption"></div>
				</div>
				<div class="item">
					<div class="fill" style="background-image:url('images/images_caroussel/facade_duplex_4p.jpg');"></div>
					<div class="carousel-caption"></div>
				</div>
				<div class="item">
					<div class="fill" style="background-image:url('images/images_caroussel/facade_duplex_5p.jpg');"></div>
					<div class="carousel-caption"></div>
				</div>
				<div class="item">
					<div class="fill" style="background-image:url('images/images_caroussel/facade_maison_basse_3p.jpg');"></div>
					<div class="carousel-caption"></div>
				</div>
				<div class="item">
					<div class="fill" style="background-image:url('images/images_caroussel/facade_maison_basse_4p.jpg');"></div>
					<div class="carousel-caption"></div>
				</div>
			</div>
			<!-- Controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="icon-prev"></span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="icon-next"></span>
			</a>
		</header>
		<!-- Page Content -->
		<div class="container">
			<!-- Message d'accueil -->
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"> Bienvenue à Belle Demeure </h3>
				</div>
				<div class="col-lg-12">
					<br></br>
					<p><b>Belle Demeure sarl </b> est une société de construction et de gestion immobilière. Nous intervenons essentiellement dans l’acquisition du foncier, l’aménagement de terrains, la construction, la gestion, et la promotion immobilière...<a href="qui_sommes_nous.php">En savoir plus</a>
					</p>
					<br></br>
					<br></br>
				</div>
				<!-- blocs qui décrivent les services  de Belle Demeure -->
				<div class="col-md-3">
					<div class="panel panel-default mypanel">
						<div class="panel-heading">
							<h4>Acquisition et sécurisation du foncier</h4>
						</div>
						<div class="panel-body">
							<p>Nous réalisons pour le compte de nos clients l'acquisition et la sécurisation du foncier (terrains urbains ou terrains ruraux)... </p>
							<a href="services.php#acqui-terrain" class="btn btn-default">En savoir plus</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="panel panel-default mypanel">
						<div class="panel-heading">
							<h4>Aménagement de terrains</h4>
						</div>
						<div class="panel-body">
							<p>Nous réalisons ici les plans parcellaires de lotissement en vue de leur approbation par arrêté du Ministre en charge de la construction...</p>
							<a href="services.php#amenagement" class="btn btn-default">En savoir plus</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="panel panel-default mypanel">
						<div class="panel-heading">
							<h4>Construction</h4>
						</div>
						<div class="panel-body">
							<p>Nous réalisons la construction de logements du gros œuvre à la finition :
								<ul>
									<li>maçonnerie</li>
									<li>menuiserie...</li>
								</ul>
							</p>
							<a href="services.php#construction" class="btn btn-default">En savoir plus</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="panel panel-default mypanel">
						<div class="panel-heading">
							<h4>Promotion et gestion immobilière</h4>
						</div>
						<div class="panel-body">
							<p>Nous réalisons des promotions immobilières pour le compte de tiers ou pour notre propre compte...</p>
							<a href="services.php#promo-gestion" class="btn btn-default">En savoir plus</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="panel panel-default mypanel">
						<div class="panel-heading">
							<h4>Bureau d'études et de conception</h4>
						</div>
						<div class="panel-body">
							<p>Nous réalisons:
								<ul>
									<li>le plan d'aménagement et d'occupation du site (plan de masse)</li>
									<li>les plans architecturaux des maisons...</li>
								</ul>
							</p>
							<a href="services.php#buro-etude" class="btn btn-default">En savoir plus</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- footer -->
		<?php include('includes/footer.html'); ?>
	</body>
</html>