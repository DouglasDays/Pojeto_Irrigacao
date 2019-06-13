<?php
	include 'conexao.php';

	//SELECT * FROM tabela WHERE id NOT IN (SELECT id FROM tabela ORDER BY id LIMIT 10)

	$SQL = "SELECT * FROM medicao ORDER BY _id";

	$st = $conexao->prepare();

	if ($st->execute()) {
		if ($st->rowCount() > 10) {
			$SQL = "DELETE FROM medicao WHERE _id NOT IN (SELECT _id FROM medicao ORDER BY _id LIMIT 10)"

			$stm = $conexao->prepare();

			try {
				$stm->execute();
			} catch (Exception $e) {
				echo $e->getMessage();
			}
		} else {
			echo "dados não encontrados";
		}
	} else {
		echo "query error";
	}
?>