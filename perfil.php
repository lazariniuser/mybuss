<?php
    include "cabecalho.php";
    include "connect.php";

    $select_type_profile = "SELECT * FROM `func`";

    $query_type = $pdo->query($select_type_profile);


    while ($row_type = $query_type->fetch(PDO::FETCH_ASSOC)) {

        if($row_type['tipo'] == "func" && $row_type['id']){


            header('Location: perfil_func.php');
            exit;


            }

        else{
            header('Location: perfil_boss.php');
            exit;
        }

        }






?>