<?php
  include "conexao.php";

  #*Fazer verificação de nome...
      
  #Pega os valores do inputs
  $nome  = $_POST['tNome'];
  $pass  = $_POST['tPass'];

  #Insere os dados com base nos valores da variáveis     
  $SQL = "INSERT INTO user (nome, senha) VALUES ('$nome','$pass')";
             
  $st = $conexao->prepare($SQL);

  #executa a inserção
  if ($st->execute()) {
  echo "insert_ok";
  }else {
  echo "insert_error";
  }
      
  //header("Location: index.php"); // redireciona para a home  
?>