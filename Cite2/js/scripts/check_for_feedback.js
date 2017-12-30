$(document).ready(function(){
	$("#button").click(function(){
		$('#fail_message').hide();
		var name = $("#name").val();
		var email = $("#e-mail").val();
		var subject = $("#subject").val();
		var message = $("#message").val();
		var fail = "";
		if(name.length <= 2){
			fail = "Длинна имени должна быть не меньше 2 букв";
		} else
		if(email.split('@').length-1==0||email.split('.').length-1==0){
			fail = "Некоректный Email";
		} else
		if(subject.length < 4){
			fail = "Длинна теми должна быть не меньше 4 букв";
		} else
		if(message.length < 10){
			fail = "Длинна сообщения должна быть не меньше 10 букв";
		}
		if(fail != ""){
				$('#error').replaceWith('<div id = "fail_message"></div>');
				$('#fail_message').html(fail+"<div class='clear'> <br /> </div>");
				$('#fail_message').show();
				return false;
		}
		$.ajax({
			type : "POST",
			url :"php/feedback.php",
			cache : false,
			data:{"name":name,"email":email,"subject":subject,"message":message},
			dataType:"html",
			succes : function(data){
				if(data){
					$('#error').replaceWith('<div id = "fail_message"></div>');
					$('#fail_message').html(data+"<div class='clear'> <br /> </div>");
					$('#fail_message').show();
				}
			}	
		});	
	});	
});