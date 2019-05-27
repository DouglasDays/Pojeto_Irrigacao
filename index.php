<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Irrigação Automatizada</title>
	<link rel="stylesheet" href="stilo.css">
	<script src="jquery-3.3.1.min.js"></script>
</head>

<body>
	<div id="interface">
		<header id="cabecalho"/>
			<img id="icone" src="logo_irr1.png"/>
			<h1>Bem Vindo!</h1>
		</header>
		<section id="corpo">

			<div id="resultado"><p></p></div>

			<form>
				<p><label for="cNome">Usuário: </label>
				<input type="text" name="nome" id="nome" placeholder="Digite o seu nome!"></p>

				<p><label for="cPass">Senha: </label>
				<input type="password" name="senha" id="senha" placeholder="Digite sua senha!"></p>

				<input type="submit" value="LOGIN">

				<button><a href="cadastro.php">CADASTRO</a></button>
			</form>
		</section>

		<footer id="rodape">
			<p>Copyright &copy; 2019 - by Douglas Dias<br/>
		</footer>
	</div>

	<script>
		$("form").submit(function(event){

			$.ajax({
				url: "formulario_login.php",
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
				setTimeout(function() {
					window.location = "medicoes.php";
				}, 3000);
			})
			.fail(function(jqXHR, textStatus, msg){
				alert(msg);
			});

			event.preventDefault();
		});
	</script>
</body>
</html>