jQuery(document).ready(function(){
		jQuery("#done").click(function(){
			$('#messageShow').hide();
			var name=$("#name").val();
			var email=$("#email").val();
			var subject=$("#subject").val();
			var message=$("#message").val();
			var fail="";
			if(name.length<3) {
				fail="Имя не меньше 3 символов";
			}
			// else if(email.split('@').length-1==0||email.split('.').length-1==0){
				// fail="Некоректный Email";
			// }
			else if(subject.length<3){
				fail="Тема сообщения не меньше 3 символов";
			}
			else if(message.length<20){
				fail="Сообщение не меньше 20 символов";
			}
			if(fail!=""){
				$('#messageShow').html(fail+"<div class='clear'> <br /> </div>");
				$('#messageShow').show();
				return false;
			}	
			$.ajax ({
					url:"ajax/feedback.php",
					type:"POST",
					cache:false,
					data:{"name":name,"email":email,"subject":subject,"message":message},
					dataType:"html",
					success: function(data){
							$('#messageShow').html(data+"<div class='clear'><br/></div>");
							$('#messageShow').show();					
					}	
			});
		});	
		
	});