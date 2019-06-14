<?php
	include 'conexao.php';

	//SELECT * FROM tabela WHERE id NOT IN (SELECT id FROM tabela ORDER BY id LIMIT 10)

	/*$pessoa = array();
	$sql='SELECT nomes FROM usuarios';
							
 	try{
     	$query = $conecta->query($sql); // Pra selects use direto query não precisa preparar antes
     	while($ln = $query->fetchAll(PDO::FETCH_ASSOC)):
        	array_push($pessoas, $ln['nome']);
     	endwhile;
     	echo '<pre>', print_r($pessoas);
    }catch(PDOexception $e){
        echo "Erro: <code>".$e->getMessage()."</code><br />"; // Procure exibir o erro pra poder corrigir
        echo 'Não deu';
	}*/

	$SQL = "SELECT _id FROM medicao ORDER BY _id DESC LIMIT 10";

	$st = $conexao->prepare($SQL);

	if ($st->execute()) {
		if($st->rowCount() > 0) { //Verifica se o select retornou alguma linha

			while ($data = $st->fetchAll(PDO::FETCH_ASSOC)) { //guarda os dados da query 
				array_push($retorno, $data['_id']);
			}

			$SQL = "DELETE FROM medicao WHERE _id NOT IN (:R)"; //deleta os dados que não sejam aqueles retornados

			$st->bindParam(":R", $retorno);

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