var xmlhttp = false;
if (window.XMLHttpRequest) { 									//Mozilla¡¢SafariµÈä¯ÀÀÆ÷
	xmlhttp = new XMLHttpRequest();
} 
else if (window.ActiveXObject) { 								//ie浏览器
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
		try {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	   } catch (e) {}
	}
}
