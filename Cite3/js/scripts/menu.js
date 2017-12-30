$(document).ready(function(){
	$('ul li').hover(function(){
		$(this).children('ul').stop(false,true).fadeIn(300);
		$(this).children('a').addClass('selected');
	},function(){
		$(this).children('ul').stop(false,true).fadeOut(300)
		$(this).children('a').removeClass('selected');
	});
})