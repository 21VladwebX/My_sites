var link = document.querySelector('link[name = footer]');
	var content = link.import.querySelector('#footer_footer');
	document.body.appendChild(content.cloneNode(true));