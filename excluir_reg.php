<?php
	include 'conexao.php';

	//Deleta todos os dados da tabela deixando apenas os 5 ultimos
	$SQL = "DELETE FROM medicao WHERE _id LIKE (SELECT _id FROM medicao ORDER BY _id DESC LIMIT 5)";

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