/**
 * Created by cedric on 14/02/2017.
 */
$(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            first_name: {
                validators: {
                    stringLength: {
                        min: 2,
                        message:'Merci de rentrer au moins deux charactères'
                    },
                    notEmpty: {
                        message: 'Merci de rentrer votre prenom'
                    }
                }
            },
            last_name: {
                validators: {
                    stringLength: {
                        min: 2,
                        message:'Merci de rentrer au moins deux charactères'
                    },
                    notEmpty: {
                        message: 'Merci de rentrer votre nom'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Merci de rentrer votre adresse e-mail'
                    },
                    emailAddress: {
                        message: 'Merci de rentrer une adresse e-mail correcte'
                    }
                }
            },
            comment: {
                validators: {
                    stringLength: {
                        min: 10,
                        max: 200,
                        message:'Merci de rentrer entre 10 et 200 charactères'
                    },
                    notEmpty: {
                        message: 'Merci de rentrer un message'
                    }
                }
            }
        }
    })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
            $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});

