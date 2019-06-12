<?php
	include 'conexao.php';

	$registros = array();

	//Seleciona os cinco primeiros registros da tabela
	$SQL = "SELECT _id FROM medicao ORDER BY _id DESC LIMIT 5";

	try {
		$query = $conexao->query($SQL);
		while ($data = $query->fetchALL(PDO::FETCH_ASSOC)) {
			array_push($registros, $data['_id']);
		}
		echo "<pre>",print_r($registros);
	} catch (PDOexception $e) {
		echo "Erro: <code>".$e->getMessage()."</code><br/>";
		echo "algum erro ocorreu!";
	}
?>