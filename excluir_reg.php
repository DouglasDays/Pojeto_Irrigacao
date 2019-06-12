<?php
	include 'conexao.php';

	//Deleta todos os dados da tabela deixando apenas os 5 primeiros
	$SQL = "SELECT _id FROM medicao ORDER BY _id LIMIT 5";

	//Prepara a query para ser executada
	$st = $conexao->prepare($SQL);

	try {
		if ($st->execute();) {
			echo "insert ok";
		} else echo "insert error";
		
	} catch (Exception $e) {
		echo $e;
	}
?>