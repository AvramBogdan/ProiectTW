$(document).ready(function(){
	$("#name").focusout(function(){

		var value = $("#name").val();
		if(value.length < 3){
		var HTML = 'Invalid name, too short!';
		$("#nameMessage").html(HTML);

		}
	});


	$("#password").focusout(function(){

		var value = $("#password").val(); 
		if(value.length < 6) { 

				var HTML = 'Password too short!';
				$("#passwordMessage").html(HTML);
		}


	}); 


	$("#password-confirm").focusout(function(){

		var value1 = $("#password").val();
		var value2 = $("#password-confirm").val(); 

		 

		if(value1 != value2){ 

				var HTML = "Passwords doesn't match!";
				$("#passwordConfirmMessage").html(HTML);
	}


	}); 


		$("#telephone").focusout(function(){

		var value = $("#telephone").val(); 
		var expression = 'zxcvbnm,QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiop[]asdfghjkl;!@#$%^&*()zxcvbnm,./';
		

		for(i = 0; i<value.length; i++) 
			if(expression.search(value.charAt(i)) >0){

			
				var HTML = 'The number is wrong';
				$("#telephoneMessage").html(HTML);
				i=value.length;
		}


	});



	$("#country").focusout(function(){

		var value1 = $("#country").val(); 
		if(value1.length == 0){

				var HTML = "Please enter the country!";
				$("#countryMessage").html(HTML);
	}


	}); 



	$("#city").focusout(function(){

		var value1 = $("#city").val(); 
		if(value1.length == 0){

				var HTML = "Please enter the city!";
				$("#cityMessage").html(HTML);
	}


	}); 


	$("#company").focusout(function(){

		var value1 = $("#company").val(); 
		if(value1.length == 0){

				var HTML = "Please enter the airline!";
				$("#airlineMessage").html(HTML);
	}


	}); 




});