
var clock = document.getElementById('tiktak');
var clockColor = document.getElementById('clockColor');


function niceTime(){
	var data = new Date();
	var h = data.getHours().toString();
	var m = data.getMinutes().toString();
	var s = data.getSeconds().toString();
	// alert(h.length);
	if(h.length < 2){
		h = '0' + h;
		// alert(h);
	}
	if(m.length < 2){
		m = '0' + m;
		// alert(m);
	}
	if(s.length < 2){
		s = '0' + s;
		// alert(s);
	}
	
	
	var clokString = h +':' + m +':' + s;
	var colorString = '#' + h + m + s;
	
	// colorString = colorString.toString();
	clock.textContent = clokString;
	// color.TextContent = colorString;
	clockColor.style.backgroundColor = colorString;
	clockColor.style.color = colorString/12;
	clockColor.style.opacity = s/60;
}

niceTime();
setInterval(niceTime,1000);
