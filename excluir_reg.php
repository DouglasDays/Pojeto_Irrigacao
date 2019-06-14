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
			
			$SQL = "DELETE FROM medicao WHERE _id NOT IN (:R1, :R2, :R3, :R4, :R5, :R6, :R7, :R8, :R9, :R10)"; //deleta os dados que não sejam aqueles retornados

			//var_dump($SQL);

			$st = $conexao->prepare($SQL);

			$st->bindParam(":R1", $retorno[0]);
			$st->bindParam(":R2", $retorno[1]);
			$st->bindParam(":R3", $retorno[2]);
			$st->bindParam(":R4", $retorno[3]);
			$st->bindParam(":R5", $retorno[4]);
			$st->bindParam(":R6", $retorno[5]);
			$st->bindParam(":R7", $retorno[6]);
			$st->bindParam(":R8", $retorno[7]);
			$st->bindParam(":R9", $retorno[8]);
			$st->bindParam(":R10", $retorno[9]);

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