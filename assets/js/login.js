$(document).ready(function() {
	$('#login').on('click', function() {
		$("#login_form").show();
		$("#register_form").hide();
	});
	$('#register').on('click', function() {
		$("#register_form").show();
		$("#login_form").hide();
	});
	$('#butsave').on('click', function() {
		$("#butsave").attr("disabled", "disabled");
		var name = $('#name').val();
		var password = $('#password').val();
		if(name!="" && password!="" ){
			$.ajax({
				url: "app/login_action.php",
				type: "POST",
				data: {
					type: 1,
					name: name,
					password: password
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#butsave").removeAttr("disabled");
						$('#register_form').find('input:text').val('');
						$("#success").show();
						$('#success').html('Registration successful !');
					}
					else if(dataResult.statusCode==201){
						$("#error").show();
					}

				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});
	$('#butlogin').on('click', function() {
		var password = $('#password_log').val();
		if(password!="" ){
			$.ajax({
				url: "save.php",
				type: "POST",
				data: {
					type:2,
					password: password
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						location.href = "welcome.php";
					}
					else if(dataResult.statusCode==201){
						$("#error").show();
						$('#error').html('Invalid Login or Password !');
					}

				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});
});
