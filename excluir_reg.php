<?php
	include 'conexao.php';

	//Deleta todos os dados da tabela deixando apenas os 5 primeiros
	$SQL = "DELETE FROM medicao WHERE _id NOT IN (SELECT _id FROM medicao ORDER BY _id LIMIT 5)";

	//Prepara a query para ser executada
	$st = $conexao->prepare($SQL);

	if ($st->execute()) {
		echo "dados deletados!";
	} else echo "erro na query";
?>