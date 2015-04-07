$(document).ready(function(){
   Stripe.setPublishableKey('pk_QB5oPVotBrqUViny4cPvf8V5J6i0C');
   var stripeResponseHandler = function(status, response) {
     var $form = $('#form-payment');
     if (response.error) {
       // Show the errors on the form
       $form.find('.payment-errors').text(response.error.message);
       $form.find('button').prop('disabled', false);
      alert('error :'+response.error.message);
     } else {
       // token contains id, last4, and card type
		var url;
		var btn;
		var postbtn;
		var msg;
		if($('#formtype').val() == "update"){
			 url = '/payment/tokenUpdate';
			 btn = '<center><i class="fa fa-refresh fa-spin"></i> Updating.....</center>';
			 postbtn = '<center><i class="fa fa-refresh fa-spin"></i> Update </center>';
			 msg = 'Card Updated Successfuly';
		 }
		 else{
			 url = '/payment/getSubscribed';
			 btn = '<center><i class="fa fa-refresh fa-spin"></i> Payment Processing.....</center>';
			 postbtn = '<center>Payment Proceed</center>';
			 msg = 'Plan Successfully Subscribed';
		 }

      		var token = response.id;
	       // Insert the token into the form so it gets submitted to the server
	       $form.append($('<input type="hidden" name="stripeToken" />').val(token));
	       $.ajax({
			url 		: url,
			beforeSend  : function(){
						$('#payment_btn').html(btn);
								}, 
			data 		: 'token='+token+'&plan='+$("#planId").val(),
			type		: 'post',	
			success		: function(data){
						$('#payment_btn').html(postbtn);
						document.location.href='dashboard';
						$.rtnotify({message: msg,type: "success",timeout:5});
				}
		   });
       return false;
     }
   };

     $('#form-payment').submit(function(e) {

       var $form = $(this);

       // Disable the submit button to prevent repeated clicks
       $form.find('button').prop('disabled', true);

       Stripe.card.createToken($form, stripeResponseHandler);

       // Prevent the form from submitting with the default action
       return false;
     });
		
});
