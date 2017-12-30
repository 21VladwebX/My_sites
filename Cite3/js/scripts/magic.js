 'use strict'
 window.onload = function(){
	
	 var center = document.getElementById('center_magic');
	 var cs = getComputedStyle(center,null)
	 
	 function func1(){
		 // setInterval(count+1,1000)
		 // count +1;
		 var width = cs.width;
		 width = width.replace('px','');
		 width = Number(width);
		 center.style.width = width + 10 + 'px';
		 // center.style.pos =  10 + 'px';
		 center.style.color = 'green';
		
		console.log(width);
		if(width < 800 ) {
			center.style.width = 500 + 'px';
			alert('ВОУ ВОУУУУУ!!!!<br/><i><b> ПОЛEГЧЕ');
		}
		
		 // alert(typeof(width));
		// nw = window.open("https://www.youtube.com","about:blank", "hello", "width=200,height=200");
		// window.open('https://www.pornhub.com");
		// window.close(nw);
		// nw.document.write("Hello WORLD!!!");
	 } 
	 
	 function func2 (){
		 var width = cs.width;
		 width = width.replace('px','');
		 width = Number(width);
		 width >= 30 ? center.style.width = width - 10 + 'px' : alert('ВОУ ВОУУУУУ!!!!<br/><i><b> ПОЛEГЧЕ)</b></i>'); 		 
	 }
	 

	center.addEventListener('click',func1,false);
	window.addEventListener('keydown',func2,false);
	
	var div_flash = document.querySelectorAll('.flash .div_flash');
	var leng =  div_flash.length;
	var min = 0;
	var max = leng;
	function flash() {
		var elem = Math.round(Math.random() * (max - min) + min);
		active_item.call(div_flash[elem]);
	}
	
	function active_item(){
		this.classList.toggle('active_flash');
	}
	function delete_item(){
		this.parentNode.removeChild(this);
	}
	setInterval(flash,500);
		
	 var flash = document.querySelector('.flash ');	
	
	flash.onclick = function () {
		// var elem = Math.round(Math.random() * (max - min) + min);
		var elem = document.querySelector('.div_flash');
		console.log(elem.parentNode);
		delete_item.call(elem);
	} 
	
	var strawberry = document.querySelector('.strawberry');
	strawberry.onclick = function  (){
		var check = prompt('Точно?');
		if(check == 'где'){
			nw = window.open("https://www.youtube.com","about:blank", "hello", "width=200,height=200");
		}
		else{
			nw = window.open("https://www.youtube.com/watch?v=AppIqSRaB-o","about:blank", "hello", "width=200,height=200");
		}
		// window.open('https://www.youtube.com');
		// window.close(nw);
		// nw.document.write("Hello WORLD!!!");
	}
 }