


$(document).ready(function() {

$("#submitBtn").unbind('click').bind('click', function() {
		// remove the error text

		
		
		$(".text-danger").remove();
		// remove the form error
		$('.form-group').removeClass('has-error').removeClass('has-success');			

		var fullName = $("#fullName").val();
		var email = $("#email").val();
		var subject = $("#subject").val();
		var message = $("#message").val();
		
		if(fullName == "") {
			$("#fullName").after('<p class="text-danger">Full name is required</p>');
			$('#fullName').closest('.form-group').addClass('has-error');
		} else {
			// remov error text field
			$("#fullName").find('.text-danger').remove();
			// success out for form 
			$("#fullName").closest('.form-group').addClass('has-success');	  	
		}


		if(email == "") {
			$("#email").after('<p class="text-danger">Email is required</p>');
			$('#email').closest('.form-group').addClass('has-error');
		} else {
			// remov error text field
			$("#email").find('.text-danger').remove();
			// success out for form 
			$("#email").closest('.form-group').addClass('has-success');	  	
		}

		if(subject == "") {
			$("#subject").after('<p class="text-danger">Subject is required</p>');
			$('#subject').closest('.form-group').addClass('has-error');
		} else {
			// remov error text field
			$("#subject").find('.text-danger').remove();
			// success out for form 
			$("#subject").closest('.form-group').addClass('has-success');	  	
		}

		if(message == "") {
			$("#message").after('<p class="text-danger">Message is required</p>');
			$('#message').closest('.form-group').addClass('has-error');
		} else {
			// remov error text field
			$("#message").find('.text-danger').remove();
			// success out for form 
			$("#message").closest('.form-group').addClass('has-success');	  	
		}


		
if(fullName && email && subject && message ){

var form = $("#contactForm");
			// button loading
			$("#submitBtn").button('loading');

			$.ajax({
				url : form.attr('action'),
				type: form.attr('method'),
				data: form.serialize(),
				dataType: 'json',
				success:function(response) {
					// button loading
					$("#submitBtn").button('reset');

					if(response.success == true) {
											
              			// patientTable.ajax.reload(null, false);						

  	  			// reset the form text
						$("#contactForm")[0].reset();
						// remove the error text
						$(".text-danger").remove();
						// remove the form error
						$('.form-group').removeClass('has-error').removeClass('has-success');
  	  			
  	  			$('#contact-messages').html('<div class="alert alert-success">'+
            '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
            '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> '+ response.messages +
          '</div>');

  	  			$(".alert-success").delay(500).show(10, function() {
							$(this).delay(3000).hide(10, function() {
								$(this).remove();
							});
						}); // /.alert
					}  // if

				} // /success
			}); // /ajax	

}

return false;
});



});





