$("form").submit(function(event){
	$.ajax({
		url: "formulario_login.php"
		type: 'post',
		data: {
			nome: $("#nome").val(),
			senha: $("#senha").val()
		},
		beforeSend: function() {
			$("#resultado").html("Verificando...");
		}
	})
	.done(function(msg){
		$("#resultado").html(msg);
	})
	.fail(function(jqXHR, textStatus, msg){
		alert(msg);
	})

	event.preventDefault();
});