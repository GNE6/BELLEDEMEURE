/*
  Jquery Validation using jqBootstrapValidation
   example is taken from jqBootstrapValidation docs 
  */
$(function() {

    $("#login").find("input").not("[type=submit]").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // something to have when submit produces an error ?
            // Not decided if I need it yet
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var identifiant = $("input#identifiant").val();
			var mot_de_passe = $("input#mot_de_passe").val();
			
            $.ajax({
                url: "./bin/login_verif.php",
                type: "POST",
                data: {
					identifiant: identifiant,
					mot_de_passe: mot_de_passe
                },
                cache: false,
                success: function() {
                    // Success message
                    $('#success3').html("<div class='alert alert-success'>");
                    $('#success3 > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success3 > .alert-success')
                        .append("<strong>connexion réussie.<br/> veuillez patienter...</strong>");
                    $('#success3 > .alert-success')
                        .append('</div>');
                    //clear all fields
                    $('#sign_in').trigger("reset");

setTimeout(function() {

                    location.href = "http://localhost/AdminLTE-master" }, 2000);
                },
                error: function() {
                    // Fail message
                    $('#success3').html("<div class='alert alert-danger'>");
                    $('#success3 > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success3 > .alert-danger').append("<strong>connexion non établie...</strong> veuillez réessayer");
                    $('#success3 > .alert-danger').append('</div>');
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
    $('#success3').html('');
});
