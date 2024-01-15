<?php

include "connect.php";
include "cabecalho.php";

function imprime($s){
    while ($pesquisa = $s->fetch(PDO::FETCH_ASSOC)) {       
        $perfil_url = "perfil.php?id=" . $pesquisa['id'];
        echo "<tr>
        <td><a href='$perfil_url'>" . $pesquisa['nome'] . "</a></td>
        <td>".$pesquisa['email']."</td>
        <td>".$pesquisa['celular']."</td>
        </tr>
        ";
    }
}
?>
<html>
        <h6> <table class='table text-center'><?php

        
        $campo_pesquisa = $_POST['campo_pesquisa'];
        $query_pesquisa = "SELECT * FROM func WHERE nome LIKE  '%$campo_pesquisa%'  LIMIT 3";
        $pdo_pesquisa = $pdo->query($query_pesquisa);
        

        if($pdo_pesquisa->rowCount()>0){
            echo "<h6 class='text-center'>Exibindo resultados para '".$campo_pesquisa."':</h6>";
    
           imprime($pdo_pesquisa);

        }
        else{
            echo "<h6 class='text-center'>Não há resultados correspondentes</h6>";
        }
        ?>
        </table>
        
        
        
    
   


