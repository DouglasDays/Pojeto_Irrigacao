<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Irrigação Automatizada</title>
	<link rel="stylesheet" href="stilo.css">
	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
</head>

<body>
	<div id="interface">
		<header id="cabecalho"/>
			<img id="icone" src="logo_irr1.png"/>
			<h1>Bem Vindo!</h1>
		</header>
		<section id="corpo">

			<div id="resultado"><p>Resultado aqui...</p></div>

			<form>

				<p><label for="cNome">Usuário: </label>
				<input type="text" name="nome" id="nome" placeholder="Digite o seu nome!"></p>

				<p><label for="cPass">Senha: </label>
				<input type="password" name="nome" id="senha" placeholder="Digite sua senha!"></p>

				<input type="submit" value="LOGIN">

				<button><a href="cadastro.php">CADASTRO</a></button>
			</form>
		</section>

		<footer id="rodape">
			<p>Copyright &copy; 2019 - by Douglas Dias<br/>
		</footer>
	</div>

	<script type="text/javascript">
		$("form").submit(function(event){
			alert("funciona!");
			//Pega as varáveis
			var vNome = $("#nome").val();
			var vPass = $("#senha").val();

			//Criando as varáveis
			var vUrl = "formulario_login.php";
			var vData = {nome:vNome, pass:vPass};

			$.post({
				vUrl,
				vData,
				function(response,status){
					if (status == "success") {
						//Pegando dados do json
						var obj = JQuery.parseJSON(response);

						$("#resultado").html(obj);
						event.preventDefault();
					}
				}
			});
		});
	</script>
</body>
</html>