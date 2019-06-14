<?php
	include 'conexao.php';

	$retorno = array();

	$SQL = "SELECT _id FROM medicao ORDER BY _id DESC LIMIT 10"; //retorna os dez ultimos registros da tabela

	$st = $conexao->prepare($SQL);

	if ($st->execute()) {
		if($st->rowCount() > 0) { //Verifica se o select retornou alguma linha
			$data = $st->fetchAll(PDO::FETCH_ASSOC); //retorna um array com os resultados do campo _id
			foreach ($data as $value) { //percorre o vetor e guarda os valores de $data em $retorno
				array_push($retorno, $value['_id']);
			}

			//print_r($retorno);
			
			$SQL = "DELETE FROM medicao WHERE _id NOT IN ($retorno[0], $retorno[1], $retorno[2], $retorno[3], $retorno[4],
				$retorno[5], $retorno[6], $retorno[7], $retorno[8], $retorno[9])"; //deleta os dados que não sejam aqueles retornados

			//var_dump($SQL);

			$st = $conexao->prepare($SQL);

			if ($st->execute()) {
				//echo "dados deletados!";
			} else {
				//echo "ocorreu um erro!";
			}
		} else {
			//echo "dados não encontrados!";
		}
	} else {
		//echo "query error!";
	}
?>