<?php
  include "conexao.php";
  
  $nome  = $_POST['tNome'];
  $pass  = $_POST['tPass'];

   //insercao
   
  $SQL    = "INSERT INTO user (nome, senha) VALUES ($nome','$pass')";
         
  $st = $conexao->prepare($SQL);

  if ($st->execute()) {
    echo "insert_ok";
  }else {
    echo "insert_error";
  }

  //header("Location: index.php"); // redireciona para a home  
?>