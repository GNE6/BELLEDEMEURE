/*
  Jquery Validation using jqBootstrapValidation
   example is taken from jqBootstrapValidation docs 
  */
$(function() {

    $("#sign_in").find("input,textarea").not("[type=submit]").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // something to have when submit produces an error ?
            // Not decided if I need it yet
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var nom = $("input#nom").val();
			var prenom = $("input#prenom").val();
            var phone = $("input#phone").val();
            var email = $("input#email").val();
			var motifs="";
			
			if (document.getElementById("acquis_foncier").checked){
				motifs = motifs.concat("aquisition du foncier;\n");
			}
			if (document.getElementById("secu_foncier").checked){
				motifs = motifs.concat("sécurisation du foncier;\n");
			}
			if (document.getElementById("amena_terrain").checked){
				motifs = motifs.concat("aménagement de terrains;\n");
			}
			if (document.getElementById("construction").checked){
				motifs = motifs.concat("construction;\n");
			}
			if (document.getElementById("promo_immo").checked){
				motifs = motifs.concat("promotion immobilière;\n");
			}
			if (document.getElementById("gestion_immo").checked){
				motifs = motifs.concat("gestion immobilière;\n");
			}
			if (document.getElementById("plan_amena").checked){
				motifs = motifs.concat("plan d'aménagement et d'occupation du site;\n");
			}
			if (document.getElementById("plan_maison").checked){
				motifs = motifs.concat("plans architecturaux des maisons;\n");
			}
			if (document.getElementById("calcul").checked){
				motifs = motifs.concat("calcul de structures;\n");
			}
			if (document.getElementById("dossier_tech").checked){
				motifs = motifs.concat("dossier de faisabilité technique des projets immobiliers;\n");
			}
			if (document.getElementById("dossier_fin").checked){
				motifs = motifs.concat("dossier de rentabilité économique et financière;\n");
			}
			
            var firstName = prenom; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = prenom.split(' ').slice(0, -1).join(' ');
            }
			var lastName = nom; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (lastName.indexOf(' ') >= 0) {
                lastName = nom.split(' ').slice(0, -1).join(' ');
            }
			
            $.ajax({
                url: "./bin/login_inscription.php",
                type: "POST",
                data: {
					nom: nom,
					prenom: prenom,
                    email: email,
                    phone: phone,
                    motifs: motifs
                },
                cache: false,
                success: function() {
                    // Success message
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-success')
                        .append("<strong>votre message a été envoyé avec succès. </strong>");
                    $('#success > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#sign_in').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-danger').append("<strong>Désolé " + firstName + "  "+ lastName + " il semblerait que notre serveur de mail ne réponde pas...</strong> pourriez-vous nous contacter directement à l'adresse email suivante <a href='info@belledemeure-ci.com?Subject=Nous_contacter from belledemeure-ci.com;>info@belledemeure-ci.com</a> ? Désolé pour la gêne occasionnée.");
                    $('#success > .alert-danger').append('</div>');
                    //clear all fields
                    $('#sign_in').trigger("reset");
                },
            });
			$.ajax({
                url: "./bin/confirm_login_inscription.php",
                type: "POST",
                data: {
					nom: nom,
					prenom: prenom,
                    email: email,
                    phone: phone,
                    motifs: motifs
                },
                cache: false,
                success: function() {
                    // Success message
                    $('#success2').html("<div class='alert alert-success'>");
                    $('#success2 > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success2 > .alert-success')
                        .append("<strong>Un email de confirmation vous a été envoyé. </strong>");
                    $('#success2 > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#sign_in').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#success2').html("<div class='alert alert-danger'>");
                    $('#success2 > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success2 > .alert-danger').append("<strong>Désolé " + firstName + "  "+ lastName + " il semblerait que notre serveur de mail ne réponde pas...</strong> pourriez-vous nous contacter directement à l'adresse email suivante <a href='info@belledemeure-ci.com?Subject=Nous_contacter from belledemeure-ci.com;>info@belledemeure-ci.com</a> ? Désolé pour la gêne occasionnée.");
                    $('#success2 > .alert-danger').append('</div>');
                    //clear all fields
                    $('#sign_in').trigger("reset");
                },
            });
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});


/*When clicking on Full hide fail/success boxes */
$('#nom').focus(function() {
    $('#success').html('');
});
