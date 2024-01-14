<?php

    include "connect.php";

    $query_pesquisa = "SELECT * FROM func WHERE nome LIKE ". $campo_pesquisa ." LIMIT 3";
    $pdo_pesquisa = $pdo->query($query_pesquisa);
    while ($pesquisa = $pdo_pesquisa->fetch(PDO::FETCH_ASSOC)) {
    
        
    
    }