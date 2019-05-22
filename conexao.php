<?php

	$CON_CONEXAO = "mysql:host=localhost;dbname=bdirrigacao;charset=utf8";
	$CON_USUARIO = "root";
	$CON_SENHA = "";

	try {
		$conexao = new PDO($CON_CONEXAO, $CON_USUARIO, $CON_SENHA);
		//echo "Conectado com sucesso!";
	} catch(PDOExeption $erro) {
		//echo "Erro: ".$erro->getMessage();
		echo "conexao_error";
		exit();
	}
?>