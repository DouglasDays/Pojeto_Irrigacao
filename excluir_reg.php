<?php
	include 'conexao.php';

	//Deleta todos os dados da tabela deixando apenas os 5 ultimos
	$SQL = "DELETE FROM medicao WHERE _id NOT IN (1, 2)";

	//Prepara a query para ser executada
	$st = $conexao->prepare($SQL);

	try {
		if ($st->execute()) {
			echo "sql ok";
		} else echo "sql error";
	} catch (Exception $e) {
		#echo $e;
	}
?>