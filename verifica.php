<?php
    

    require_once 'connect.php';
    session_start();


    if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
        require_once 'bd_contas.php';
        $user = new Usuario();

        

        
}
    else{
        header('location: login.php');
    }
?>