<?php

    $bd_host ="localhost";
    $bd_user ="root";
    $bd_pass ="";
    $bd_bd   ="bdirrigacao";

    $db = new mysqli($bd_host, $bd_user, $bd_pass, $bd_bd);

	if($db->connect_errno > 0){
	    die('Nao foi possivel conectar no banco de dados [' . $db->connect_error . ']');
	}
?>