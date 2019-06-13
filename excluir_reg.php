<?php
	include 'conexao.php';

	//SELECT * FROM tabela WHERE id NOT IN (SELECT id FROM tabela ORDER BY id LIMIT 10)

	$SQL = "DELETE FROM medicao WHERE _id NOT IN (SELECT _id FROM medicao ORDER BY _id LIMIT 10)"

	$st = $conexao->prepare();

	try {
		$st->execute();
	} catch (Exception $e) {
		echo $e->getMessage();
	}
?>