<?php
	include 'conexao.php';

	#Pega os valores do inputs
	$nome = $_POST["nome"];
	$senha = $_POST["senha"];

	#Executa uma query com base nos valores da variáveis
	$SQL = "SELECT nome, senha FROM user WHERE nome='$nome' AND senha='$senha'";

	$st = $conexao->prepare($SQL);

	#Executa a query
	if ($st->execute()) {
		#Se query retornar um resultado, mostra usuário
		if ($st->rowCount() > 0) {
			echo json_encode("Bem Vindo ".$nome."!");
		} else {
			echo json_encode("Usuário inválido!");
		}
		
	} else {
		echo json_encode("Falha ao executar query!");
	}
?>