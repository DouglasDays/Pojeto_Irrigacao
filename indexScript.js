$("form").submit(function(event){

	//Pega as varáveis
	var vNome = $("#nome").val();
	var vPass = $("#senha").val();

	//Criando as varáveis
	var vUrl = "formulario_login.php";
	var vData = {nome:vNome, senha:vPass};

	$.post({
		vUrl,
		vData,
		function(response,status){
			if (status == "success") {
				alert("Funciona!");

				//Pegando dados do json
				var obj = JQuery.parseJSON(response);

				$("#resultado").html(obj);
				event.preventDefault();
			} else {
				alert("Não Funciona!");
			}
		}
	});
});