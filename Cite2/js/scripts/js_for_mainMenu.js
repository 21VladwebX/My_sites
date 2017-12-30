$(document).ready(function(){
	$('#mainMenu li').hover(function(){//Фyнкцыя для срабатования, когда мышъ наводиться на эдемент
		$(this).children('ul').stop(false,true).fadeIn(300);	
		$(this).children('a').addClass('selected');	
	},function(){ //ФУнкцыя для срабатования, когда мышъ покидает эдемент
		$(this).children('ul').stop(false,true).fadeOut(300);
		$(this).children('a').removeClass('selected');
	}); 
})