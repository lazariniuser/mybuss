<?php

    include "connect.php";

    $campo_pesquisa = $_POST'campo_pesquisa';
    $query_pesquisa = "SELECT * FROM func WHERE nome LIKE  '%$campo_pesquisa%'  LIMIT 3";
    $pdo_pesquisa = $pdo->query($query_pesquisa);
    while ($pesquisa = $pdo_pesquisa->fetch(PDO::FETCH_ASSOC)) {
    
        
    
    }