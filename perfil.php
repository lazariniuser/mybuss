<?php
    include "cabecalho.php";
    include "connect.php";

    $select_type_profile = "SELECT * FROM `contas`";

    $query_type = $pdo->query($select_type_profile);


    while ($row_type = $query_type->fetch(PDO::FETCH_ASSOC)) {

        

        }






?>