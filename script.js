$("form").submit(function(event){
	var xmlHttp = new XMLHttpRequest();
	xmlHttp.onreadystatechange = function() {
		if(xmlHttp.readyState===4 && xmlHttp.status===200) {
			document.getElementById("resultado").innerHTML = xmlHttp.responseText;
		}
	};
	xmlHttp.open("POST", "formulario_login.php", true);
	xmlHttp.send();
});