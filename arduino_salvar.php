<?php
	include 'conexao.php';

	#Pegas os dados provenientes do arduino
	$vu = $_GET['vu'];
	$mpm = $_GET['mpm'];

	echo $vu;

	#Cria uma query para inserir os dados no banco
	$SQL = "INSERT INTO medicao (vu, mpm) VALUES (:V, :M)";

	#prepara o sql para ser executado
	$st = $conexao->prepare($SQL);

	$st->bindParam(":V", $vu);
	$st->bindParam(":M", $mpm);

	if ($st->execute()) {
		echo "insert_ok";
	} else {
		echo "insert_error";
	}
?>