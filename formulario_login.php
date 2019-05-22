<?php
	include 'conexao.php';

	#Pega os valores do inputs
	$nome = $_POST['tNome'];
	$senha = $_POST['tPass'];

	#Executa uma query com base nos valores da variáveis
	$SQL = "SELECT nome, senha FROM user WHERE nome='$nome' AND senha='$senha'";

	$st = $conexao->prepare($SQL);

	#Executa a query
	if ($st->execute()) {
		#Se query retornar um resultado, mostra usuário
		if ($st->rowCount() > 0) {
			echo "Bem Vindo ".$nome."!";
		} else {
			echo "Usuário inválido!";
		}
		
	} else {
		echo "Falha ao executar query!";
	}
?>