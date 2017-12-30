$(document).ready(function(){
	$('#done').click(function(){	
		$("#result").hide();
		var login = $("#login").val();
		var pasword = $("#pasword").val();
		var repeatPassword = $("#repeatPassword").val();
		var check = false;
		var fail = "";
		if(login.length <= 3 )		
			fail = "Логин не меньше 4 символов";
		if(pasword.length <= 7 )
			fail = "пароль не меньше 7 символов";
		if(repeatPassword.length <= 7 )
			fail = "пароль не меньше 7 символов";
		if(pasword === repeatPassword)
			check = true;
		if(fail != ""){				
				$('#messageShow').html(fail + "<div class='clear'> <br /> </div>");
				$('#messageShow').show();
				return false;
			}	
		if(check){
			$.ajax({
				url:"php/registr.php",
				type:"POST",
				cache: false,
				data:{"login":login,"pasword":pasword},
				dataType:"html",
				success: function(html){
					$("#messageShow").html(html + "<div class='clear'> <br /> </div>");
					$("#messageShow").show();	
				}					
			});
		}
	});	
});