<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Cadastre-se</title>
	<link rel="stylesheet" href="stilo.css"/>
</head>
<body>
	<div id="interface">
		<header id=cabecalho>
			<img id="icone" src="logo_irr1.png"/>
			<h1>Cadastro</h1>
		</header>

		<section id="corpo">

			<form action="formulario_salvar.php" method="post">

				<p><label for="cNome">Usuário: </label>
				<input type="text" name="tNome" id="nome"/></p>
				
				<p><label for="cPass">Senha: </label>
				<input type="password" name="tPass" id="pass"/></p>

				<input type="hidden" name="id">
				
				<button type ="submit">SALVAR</button>
			</form>
		</section>

		<footer id="rodape">
			<p>Copyright &copy; 2019 - by Douglas Dias<br/>
		</footer>
	</div>
</body>
</html>