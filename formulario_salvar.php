<?php
  include "conexao.php";

  #*Fazer verificação de nome...
      
  #Pega os valores do inputs
  $nome  = $_POST['nome'];
  $pass  = $_POST['senha'];

  #Insere os dados com base nos valores da variáveis     
  $SQL = "INSERT INTO user (nome, senha) VALUES ('$nome','$pass')";
             
  $st = $conexao->prepare($SQL);

  #executa a inserção
  if ($st->execute()) {
    echo "Cadastro realizado com sucesso!";
  }else {
    echo "insert_error";
  }
      
  //header("Location: index.php"); // redireciona para a home  
?>