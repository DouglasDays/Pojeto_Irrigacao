<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Irrigação Automatizada</title>
	<link rel="stylesheet" href="stilo.css">
	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="indexScript.js"></script>
</head>

<body>
	<div id="interface">
		<header id="cabecalho"/>
			<img id="icone" src="logo_irr1.png"/>
			<h1>Bem Vindo!</h1>
		</header>
		<section id="corpo">

			<div id="resultado"><p>Resultado aqui...</p></div>

			<form id="fLogin" method="post" action="formulario_login.php">

				<p><label for="cNome">Usuário: </label>
				<input type="text" name="tNome" id="nome" placeholder="Digite o seu nome!"></p>

				<p><label for="cPass">Senha: </label>
				<input type="password" name="tPass" id="senha" placeholder="Digite sua senha!"></p>

				<button type="submit" id="login">LOGIN</button>

				<button><a href="cadastro.php">CADASTRO</a></button>
			</form>
		</section>

		<footer id="rodape">
			<p>Copyright &copy; 2019 - by Douglas Dias<br/>
		</footer>
	</div>
</body>
</html>