<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Cadastre-se</title>
	<link rel="stylesheet" href="stiloIndex.css"/>
	<script src="jquery-3.3.1.min.js"></script>
</head>
<body>
	<div id="interface">
		<header id=cabecalho>
			<img id="icone" src="logo_irr1.png"/>
			<h1>Cadastro</h1>
		</header>
		<section id="corpo">

			<div id="resultado"><p></p></div>

			<form>
				<p><label for="nome">Usuário: </label>
				<input type="text" name="nome" id="nome"/></p>
				
				<p><label for="senha">Senha: </label>
				<input type="password" name="senha" id="senha"/></p>
				
				<button type ="submit">SALVAR</button>
				<button id=voltar><a href="index.php">VOLTAR</a></button>
			</form>
		</section>

		<footer id="rodape">
			<p>Copyright &copy; 2019 - by Douglas Dias<br/>
		</footer>
	</div>

	<script>
		$("form").submit(function(event){
	
			$.ajax({
				url: "formulario_salvar.php",
				type: 'post',
				data: {
					nome: $("#nome").val(),
					senha: $("#senha").val()
				},
				beforeSend: function() {
					$("#resultado").html("Guardando...");
				}
			})
			.done(function(msg){
				$("#resultado").html(msg);
			})
			.fail(function(jqXHR, textStatus, msg){
				alert(msg);
			});

			event.preventDefault();
		});
	</script>
</body>
</html>