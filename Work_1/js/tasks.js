$(document).ready(function Task(){
		$("#done").click(function(){
			$('#messageShow').hide();
			$('#res').html("<div></div>");
			check2();			
			if(radioVal == 1){
				/*SET TASKS*/
				$('#result').html("<form id='mainForm'><input type = 'file' id='myfile' name = 'myfile'/><input type='textarea' id='textTask'/><br/><input id = 'submit' type = 'submit' name = 'upload' value = 'Submit'/> </p></form>");
				$('#result').show();					
				$('#mainForm').on('submit',
					function(e){
						e.preventDefault(); 
						var texts = $('#textTask').val();
						var fail = '';
						// if(texts.length < 10){
							// fail = 'Задание не меньше 10 букв!';
						// }
						// if(fail!=""){
							// $('#result').html(fail+"<div class='clear'> <br /> </div>");
							// $('#result').show();
							// return false;
						// }
						
						// $.ajax({
							// url: '../controlers/set_tasks.php',
							// type: 'POST',
							// data: {"txt":texts},
							// dataType: 'html',
							// success: function(data){
								// $('#result').html(data+"<div class='res'><br/></div>");
							// }
						// });
					});
					$('#mainForm').on('submit',
					function(e){
						e.preventDefault(); 							
						var $that=$(this),
						formData = new FormData($that.get(0)); 
						$.ajax({	
							url: '../controlers/downPic.php',
							type: 'POST',
							contentType: false,  
							processData: false,
							data: formData,
							dataType: 'html',
							success: function(data){
								$('#res').html(data+"<br/><div class='res'><br/></div>");
								
							}
						});
					});
			}
			
			else 
				if(radioVal == 2){
					/*GET TASKS*/
					$.ajax ({
						url:"../controlers/get_tasks.php",
						type:"POST",
						cache:false,
						data:{"radioVal":radioVal},
						dataType:"html",
						success: function(data){
								$('#result').html(data+"<div class='clear'><br/></div>");
								$('#result').show();		
						}	
					});
					
				}
			
		});	
		
	});

function check2(){
			return radioVal = $('input[name=tasks]:checked').val();
		}