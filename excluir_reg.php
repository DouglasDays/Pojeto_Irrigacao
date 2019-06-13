<?php
	include 'conexao.php';

	//SELECT * FROM tabela WHERE id NOT IN (SELECT id FROM tabela ORDER BY id LIMIT 10)
	$SQL = "SELECT _id FROM medicao ORDER BY _id DESC LIMIT 10";

	$st = $conexao->prepare($SQL);

	if ($st->execute()) {
		if($st->rowCount() > 0) { //Verifica se o select retornou alguma linha

			while ($dados[] = $st->fetch(PDO::FETCH_ASSOC)) { //guarda os dados da query
				for ($i=0; $i < 10; $i++) { 
					$retorno = $dados;
					settype($retorno, "string");
					$SQL .= $retorno.", ";
				}
			}

			$SQL = "DELETE FROM medicao WHERE _id NOT IN ("; //deleta os dados que não sejam aqueles retornados

			var_dump($SQL);

			$st = $conexao->prepare($SQL);

			if ($st->execute()) {
				echo "dados deletados!";
			} else {
				echo "ocorreu um erro!";
			}
		} else {
			echo "dados não encontrados!";
		}
	} else {
		echo "query error!";
	}
?>