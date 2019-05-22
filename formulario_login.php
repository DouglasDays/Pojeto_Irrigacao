<?php
	include 'conexao.php';

	$nome = $_POST['tNome'];
	$senha = $_POST['tPass'];

	$SQL = "SELECT nome, senha FROM user WHERE nome='$nome' AND senha='$senha'";

	$st = $conexao->prepare($SQL);

	if ($st->execute()) {
		echo "Campos encontrados!";
	} else {
		echo "Usuário inválido!";
	}
?>