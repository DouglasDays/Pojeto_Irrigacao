<?php
	include 'conexao.php';

	#Pegas os dados provenientes do arduino
	$lpm = $_GET['lpm'];
	$mpm = $_GET['mpm'];

	#Cria uma query para inserir os dados no banco
	$SQL = "INSERT INTO medicao (lpm, mpm) VALUES ('$lpm', '$mpm')";

	#prepara o sql para ser executado
	$st = $conexao->prepare($SQL);

	if ($st->execute()) {
		echo "insert_ok";
	} else {
		echo "insert_error";
	}
?>