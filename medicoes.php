<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Medições</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="stiloIndex.css">
	<script src="jquery-3.3.1.min.js"></script>
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
				<div id="_id"><p></p></div>
				<label for="vu">Valor Umidade no Solo:</label>
				<div id="vu"><p></p></div>

				<label for="mpm">Média por Minuto:</label>
				<div id="mpm"><p></p></div>
			</fieldset>
		</section>

		<footer id="rodape">
			<p>Copyright &copy; 2019 - by Douglas Dias</p>
		</footer>
	</div>

	<script type="text/javascript">
		$(document).ready(function() {
			var intervalo = setInterval(carregaMedicoes, 1000);
		});

		function carregaMedicoes() {
			$.ajax({
				url: "retorna_medicao.php",
				type: "POST",
				dataType: "json",
				cache: false,
				beforeSend: function() {
					$("#resultado").html("Buscando dados...");
				}
			})
			.done(function(dataServer){
				if (dataServer.result) {
					$("#_id").html(dataServer.id);
					$("#vu").html(dataServer.vu);
					$("#mpm").html(dataServer.mpm);
				} else {
					$("#resultado").html("Ocorreu um erro ao carregar medições!");
				}
			})
			.fail(function(jqXHR, textStatus, msg){
				alert(msg);
			});
		}
	</script>
</body>
</html>