jQuery(document).ready(function(){
		jQuery("#done").click(function(){
			$('#messageShow').hide();
			var login = $("#login").val();
			var pasword = $("#password").val();
			var repeatPassword =$("#repeatPassword").val();
			var email =$("#e-mail").val();
			var message = $("#messageShow").val();
			var fail="";
			// if(login.length<4) {
				// fail="Логин не меньше 4 символов";
			// }

			// else if(pasword.length < 2){
				// fail="Пароль  не меньше 2 символов";
			// }

			// if(fail!=""){
				// $('#messageShow').html(fail+"<div class='clear'> <br /> </div>");
				// $('#messageShow').show();
				// return false;
			// }	
			$.ajax ({
					url:"controlers/choise.php",
					type:"POST",
					cache:false,
					data:{"login":login,"password":pasword,"email":email},
					dataType:"html",
					success: function(data){
							$('#messageShow').html(data+"<div class='clear'><br/></div>");
							$('#messageShow').show();					
					}	
			});
		});	
		
		jQuery("#reg").click(function(){
			$('#messageShow').hide();
			var login = $("#login").val();
			var pasword = $("#password").val();
			var repeatPassword =$("#repeatPassword").val();
			var email =$("#e-mail").val();
			var message = $("#messageShow").val();
			var fail="";
			if(login.length < 3) {
				fail="Логин не меньше 3 символов";
			}
			else if(pasword.length < 3){
				fail="Пароль  не меньше 4 символов";
			}
			else if(pasword !=repeatPassword){
				fail="Пароли не совпадают";
			}
			else if(email.split('@').length-1==0||email.split('.').length-1==0){
				fail="Некоректный Email";
			}
			if(fail!=""){
				$('#messageShow').html(fail+"<div class='clear'> <br /> </div>");
				$('#messageShow').show();
				return false;
			}	
			$.ajax ({
					url:"controlers/reg.php",
					type:"POST",
					cache:false,
					data:{"login":login,"password":pasword,"email":email},
					dataType:"html",
					success: function(data){
							$('#messageShow').html(data+"<div class='clear'><br/></div>");
							$('#messageShow').show();					
					}	
			});
		});	
		
		
		
		
		
		
		
		
		
	});