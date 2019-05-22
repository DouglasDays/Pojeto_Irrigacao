<?php
	include 'conexao.php';

	$nome = $_POST['tNome'];
	$senha = $_POST['tPass'];

	$SQL = "SELECT nome, senha FROM user WHERE nome='$nome' AND senha='$senha'";

	$st = $conexao->prepare($SQL);

	if ($st->execute()) {
		if ($st->rowCount() > 0) {
			echo "Bem Vindo ".$nome."!";
		} else {
			echo "Usuário inválido!";
		}
		
	} else {
		echo "Falha ao executar query!";
	}
?>