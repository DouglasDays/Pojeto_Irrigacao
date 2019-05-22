<?php
  include "conexao.php";
  
  $id = $_POST['id'];
  $nome  = $_POST['nome'];
  $pass  = $_POST['pass'];

   //insercao
   
  $SQL    = "INSERT INTO user (_id, nome, senha) VALUES  ('_id','$nome','$pass')";
         
  $st = $conexao->prepare($SQL);

  if ($st->execute()) {
    echo "insert_ok";
  }else {
    echo "insert_error";
  }

  //header("Location: index.php"); // redireciona para a home  
?>