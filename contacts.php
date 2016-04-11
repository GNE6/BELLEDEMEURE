<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Entreprise: Belle Demeure
		---- Site web: belledemeure-ci.com
		---- Developpeurs: Dominique MENSAH , Konan N'GUESSAN
		---- Date: 18-Novembre 2015-->

		<!-- PAGE CONTACTS -->
		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content=" Contacter notre siège social à Abidjan par téléphone au (+225) 22 50 02 65; par email à l'adresse info@belledemeure-ci.com. Contacter Belle Demeure à l'étranger par téléphone au (+33) 676 56 68 00 / (+225) 54 47 58 54 ou par mail à l'adresse international@belledemeure-ci.com">
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
	<body onload="initialize()">
		<!-- Header avec navigation -->
		<?php include "includes/header.html"; ?>
		<!-- Page Content -->
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<div class="row">
				<div class="col-lg-12">
					<ol class="breadcrumb">
						<li><a href="accueil">Accueil</a></li>
						<li class="active">Contact</li>
					</ol>
				</div>
			</div>
			<br></br>
			<!-- Siège social en Côte d'Ivoire-->
			<div class="row">
				<!-- Géolocalisation avec Google Maps-->
				<div class="col-md-8">
					<div id="map_canvas"></div>
				</div>
				<div class="col-md-4">
					<p>	<h4>Siège social en Côte d'Ivoire</h4>
						Siège social: Abidjan, Cocody Angré star 12, face CNPS <br></br>
						Adresse postale: 04 BP 12 Abidjan 04 <br/>
					</p>
					<p><i class="fa fa-phone"></i> 
						<abbr title="Phone">Contacts téléphoniques </abbr>:
						<ul>
							<li>(+225) 22 50 02 65</li>
							<li>(+225) 08 83 89 96</li>
							<li>(+225) 08 83 89 96 (DG)</li>
							<li>(+225) 78 87 94 34 (Responsable)</li>
						</ul>
						<abbr title = "Fax">Fax</abbr>:
						<ul>
							<li>(+225) 22 50 02 47</li>
						</ul>
					</p>
					<p>
						<i class="fa fa-envelope-o"></i> 
						<abbr title="Email">Adresse email</abbr>:
						<ul>
							<li><a href="mailto:info@belledemeure-ci.com">info@belledemeure-ci.com</a></li>
							<li><a href="mailto:malorimarie@hotmail.com">malorimarie@hotmail.com (DG)</a></li>
							<li><a href="mailto:lobagilles7@gmail.com">lobagilles7@gmail.com (Responsable)</a></li>
						</ul>
					</p>
					<ul class="list-unstyled list-inline list-social-icons">
						<li><a href="#"><i class="fa fa-facebook-square fa-2x"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
					</ul>
				</div>
			</div>
			<br></br>
			<!-- Représentation en France -->
			<div class="row">
				<!-- Géolocalisation avec Google Maps-->
				<div class="col-md-8">
					<iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=48.8912235,2.3588707&amp;spn=48.8912235,2.3588707&amp;t=m&amp;z=18&amp;output=embed"></iframe>
				</div>
				<!-- Contact Details Column -->
				<div class="col-md-4">
					<p>
						<h4>Représentation en France</h4>
						Adresse: Paris, 15 rue de la chapelle</br>
						75018 Paris, France<br/>
					</p>
					<p>
						<i class="fa fa-phone"></i> 
						<abbr title="Phone">Contacts téléphoniques </abbr>:
						<ul>
							<li>(+33) 676 56 68 00</li>
							<li>(+225) 54 47 58 54</li>
							<li>(+225) 08 83 89 96 (Représentant)</li>
						</ul>
					</p>
					<p>
						<i class="fa fa-envelope-o"></i> 
						<abbr title="Email">Adresse email</abbr>:
						<ul>
							<li><a href="mailto:international@belledemeure-ci">international@belledemeure-ci.com</a></li>
							<li><a href="mailto:hassaneouattara@yahoo.fr">hassaneouattara@yahoo.fr (Représentant)</a></li>

						</ul>
					</p>
					<ul class="list-unstyled list-inline list-social-icons">
						<li><a href="#"><i class="fa fa-facebook-square fa-2x"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
					</ul>
				</div>
			</div>
			<!-- Contact Form -->
			<!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
			<div class="row">
				<div class="col-md-8">
					<h3>Envoyez-nous un message</h3>
					<form name="sentMessage" id="contactForm" novalidate>
						<div class="control-group form-group">
							<div class="controls">
								<label>Nom complet:</label>
								<input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
								<p class="help-block"></p>
							</div>
						</div>
						<div class="control-group form-group">
							<div class="controls">
								<label>Téléphone:</label>
								<input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
							</div>
						</div>
						<div class="control-group form-group">
							<div class="controls">
								<label>Addresse email:</label>
								<input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
							</div>
						</div>
						<div class="control-group form-group">
							<div class="controls">
								<label>Message:</label>
								<textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
							</div>
						</div>
						<div id="success"></div>
						<div id="success2"></div>
						<!-- For success/fail messages -->
						<button type="submit" class="btn btn-primary">Envoyer</button>
					</form>
				</div>
			</div>
		</div>
		<!-- footer -->
		<?php include('includes/footer.html'); ?>
		<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<script>
			function initialize() {
				var villes = [['Belle Demeure sarl', 5.385211,-3.971378]];

				var mapOptions = {
					zoom: 15,
					center: new google.maps.LatLng(5.385211,-3.971378),
					mapTypeId: google.maps.MapTypeId.ROADMAP
				}
				var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
				var image = 'images/point_map.png';
				var myLatLng = new google.maps.LatLng(5.385211,-3.971378);
				
				setMarkers(map, villes);
			}
			function setMarkers(map, locations) {
				var image = 'images/point_map.png';
				for (var i = 0; i < locations.length; i++) {
					var villes = locations[i];
					var myLatLng = new google.maps.LatLng(villes[1], villes[2]);
					var infoWindow = new google.maps.InfoWindow();
					var marker = new google.maps.Marker({
						position: myLatLng,
						map: map,
						animation: google.maps.Animation.DROP,
						icon: image
					});
				(function(i) {
					google.maps.event.addListener(marker, "click", function() {
						var villes = locations[i];
						infoWindow.close();
						infoWindow.setContent("<div id='boxcontent' style='font-family:Calibri'><strong style='color:green'>" + villes[0] + "</strong><span style='font-size:12px;color:#333'> Abidjan, Cocody Angré star 12,<br/> face CNPS.</span></div>");
						infoWindow.open(map, this);
					});
				})(i);
				}
			}
		</script>
		<script src="js/jqBootstrapValidation.js"></script>
		<script src="js/contact_me.js"></script>
	</body>
</html>
