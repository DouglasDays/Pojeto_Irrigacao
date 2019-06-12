<?php
	include 'conexao.php';

	//Deleta todos os dados da tabela deixando apenas os 5 primeiros
	$SQL = "SELECT _id FROM medicao ORDER BY _id LIMIT 5";

	//Prepara a query para ser executada
	$st = $conexao->prepare($SQL);

	try {
		if ($st->execuete()) {
			#echo "sql ok";
			if ($st->rowCount() > 0) { //Se der erro verificar esta linha!
				while ($data = $st->fetch(PDO::FETCH_ASSOC)) {
					$retorno = $data['_id'];
					echo $retorno;
				}
			}
		}
	} catch (Exception $e) {
		#echo $e;
	}
?>