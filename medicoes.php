<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Medições</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="stiloMedicoes.css">
	<script src="jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			var interval = setInterval(carregaMedicoes, 1000);
		});

		function carregaMedicoes() {
			$.ajax({
				url: "retorna_medicao.php",
				type: "POST",
				dataType: 'json',
				cache: false,
				success: function(dataserver) {
					if (dataserver.result) {
						$("#lmp").html(dataserver.lpm);
						$("#mpm").html(dataserver.mpm);
					} else {
						$("#resultado").html("Ocorreu um erro ao carregar medições!");
					}
				},
				error: function() {
					$("#resultado").html("Ocorreu um erro ao carregar medições!");
				}

			});
		}
	</script>
</head>
<body>
	<div id="interface">
		<header id="cabecalho">
			<img id="icone" src="logo_irr1.png"/>
			<h1>Bem Vindo!</h1>
		</header>

		<section id="corpo">
			<div id="resultado"></div>

			<fieldset id="retorno">
				<label for="lpm">Litros por Minuto:</label>
				<div id="lpm"><p></p></div>

				<label for="mpm">Média por Minuto:</label>
				<div id="mpm"><p></p></div>
			</fieldset>
		</section>

		<footer id="rodape">
			<p>Copyright &copy; 2019 - by Douglas Dias</p>
		</footer>
	</div>
</body>
</html>