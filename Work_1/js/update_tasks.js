$(document).ready(function (){
		$("#donne").click(function(){
			var texts = $('.texts').val();
				$('#TaskForm').on('submit',
					function(e){
						e.preventDefault(); 
						alert('asddsaasds');
						$.ajax({
							url: '../controlers/update_tasks.php'),
							type: 'POST',
							data: {'texts':texts},
							dataType: 'html',
							success: function(data){
								alert('sa');
								$('#res_update').replaceWith(data); 
							}
						}
					});
				});
			});
		
	

