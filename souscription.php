<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Entreprise: Belle Demeure
		---- Site web: belledemeure-ci.com
		---- Developpeurs: Dominique MENSAH , Konan N'GUESSAN
		---- Date: 18-Novembre 2015-->

		<!-- PAGE QUI SOMMES-NOUS -->

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Belle Demeure SARL, Souscrivez à notre newsletter et vous serez tenu informé sur tous nos projets">
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
						<li class="active">souscription</li>
					</ol>
				</div>
			</div>
			<div class="row">
			<br></br>
			<div class="col-lg-12">
			<form action='/phpmynewsletter-2.0/subscription.php' method='post' target='_blank'>
			<label>Email:</label>
			<input type='text' name='email_addr' value='' size='30'>
			<input type='hidden' name='list_id' value='1'>
			<input type='hidden' name='op' value='join'>
			<input type='submit' value='souscrire'>
			</form>
			</div>
			</div>
			</div>
			
				<!-- footer -->
		<?php include('includes/footer.html'); ?>
	</body>
</html>