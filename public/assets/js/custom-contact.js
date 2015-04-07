$(document).ready(function() {
    $('#contact-form').validate(

	{
			rules: {
					name: {
							minlength: 5,
							required: true
							},
					email: {
							required: true,
							email: true
					},
					phone: {
							number:true,
							minlength: 5,
							maxlength:10,
							required: true
					},
					message: {
							minlength: 2,
							required: true
					}
					},
					highlight: function(element) {
							$(element).closest('.control-group').removeClass('success').addClass('error');
					},
					success: function(element) {
							element
							.text('OK!').addClass('valid')
							.closest('.control-group').removeClass('error').addClass('success');
					}
	});
});
