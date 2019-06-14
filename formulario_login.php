<?php
	include 'conexao.php';

	#Pega os valores do inputs
	$nome = $_POST["nome"];
	$senha = $_POST["senha"];

	#Executa uma query com base nos valores da variáveis
	$SQL = "SELECT nome, senha FROM user WHERE nome=':N' AND senha=':S'";

	$st = $conexao->prepare($SQL);

	$st->bindParam(":N", $nome);
	$st->bindParam(":S", $senha);

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