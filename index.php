<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Irrigação Automatizada</title>
	<link rel="stylesheet" href="stiloIndex.css">
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
				<p><label for="nome">Usuário: </label>
				<input type="text" name="nome" id="nome" placeholder="Digite o seu nome!"></p>

				<p><label for="nome">Senha: </label>
				<input type="password" name="senha" id="senha" placeholder="Digite sua senha!"></p>

				<input type="submit" value="LOGIN">

				<button><a href="cadastro.php">CADASTRO</a></button>
			</form>
		</section>

		<footer id="rodape">
			<p>Copyright &copy; 2019 - by Douglas Dias</p>
		</footer>
	</div>

	<script>
		$("form").submit(function(event){ //verifica evento do formulário

			$.ajax({ //função manda os dados para a página onde os dados serão tratados
				url: "formulario_login.php", //página onde os dados serão tratados
				type: 'post', //tipo de dado que é esperado como retorno
				data: { //dados que serão mandados
					nome: $("#nome").val(),
					senha: $("#senha").val()
				},
				beforeSend: function() {
					$("#resultado").html("Verificando...");
				}
			})
			.done(function(msg){ //se retornar dados escreve retorno no objeto com id resultado
				setTimeout(function() {
					if (msg === "Usuário inválido!") {
						$("#resultado").html(msg);
					} else {
						$("#resultado").html(msg);
						window.location = "medicoes.php";
					}
				}, 3000);
			})
			.fail(function(jqXHR, textStatus, msg){ //se falhar mostra o erro na tela
				alert(msg);
			});

			event.preventDefault(); //previne que a página carregue
		});
	</script>
</body>
</html>