<?php
	include 'conexao.php';

	//Define query que busca dados pelo _id e sendo o ultimo registro
	$SQL = "SELECT * FROM medicao ORDER BY _id DESC LIMIT 1";

	//Deleta todos os dados da tabela deixando apenas os 5 primeiros
	$SQL_DELETE = "DELETE FROM medicao WHERE _id NOT IN (SELECT _id FROM medicao ORDER BY _id LIMIT 5)";

	//Prepara a query para ser executada
	$st = $conexao->prepare($SQL_DELETE);

	if ($st->execute()) {
		echo "dados deletados!";
	} else echo "erro na query";

	//Prepara a query para ser executada
	$st = $conexao->prepare($SQL);

	//Se a query executar guarda os dados em um array e retorna
	if ($st->execute()) {
		$num_linhas = $st->rowCount();
		if ($num_linhas > 0) { //Se der erro verificar esta linha!

			

			while ($data = $st->fetch(PDO::FETCH_ASSOC)) {
				$retorno['id'] = $data['_id'];
				$retorno['vu'] = $data['vu'];
				$retorno['mpm'] = $data['mpm'];

				$retorno['result'] = true;
			}
		} else $retorno['result'] = false;

		echo json_encode($retorno);
	} else {
		echo "Falha ao executar query!";
	}
?>