<?php
	include 'conexao.php';

	$registros = array();

	//Deleta todos os dados da tabela deixando apenas os 5 ultimos
	$SQL = "SELECT _id FROM medicao ORDER BY _id DESC LIMIT 5";

	try {
		$st = $conexao->execute($SQL);
		while ($data = $st->fetch(PDO::FETCH_ASSOC)) {
			array_push($registros, $data['_id']);
		}
		echo "<pre>",print_r($registros);
	} catch (PDOexception $e) {
		echo "Erro: <code>".$e->getMessage()."</code><br/>";
		echo "algum erro ocorreu!";
	}
?>