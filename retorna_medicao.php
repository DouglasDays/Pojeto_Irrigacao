<?php
	include 'conexao.php';

	include 'excluir_reg.php';

	//Define query que busca dados pelo _id e sendo o ultimo registro
	$SQL = "SELECT * FROM medicao ORDER BY _id DESC LIMIT 1";

	//Prepara a query para ser executada
	$st = $conexao->prepare($SQL);

	//Se a query executar guarda os dados em um array e retorna
	if ($st->execute()) {
		if ($st->rowCount() > 0) { //Se der erro verificar esta linha!
			while ($data = $st->fetch(PDO::FETCH_ASSOC)) {
				$retorno['id'] = $data['_id'];
				$retorno['vu'] = $data['vu'];
				$retorno['mpm'] = $data['mpm'];
				$retorno['macm'] = $data['macm'];

				$retorno['result'] = true;
			}
		} else $retorno['result'] = false;

		echo json_encode($retorno);
	} else {
		echo "Falha ao executar query!";
	}
?>