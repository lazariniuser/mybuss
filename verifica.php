<?php
    

    require_once 'connect.php';
    session_start();


    if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
        require_once 'bd_contas.php';
        $user = new Usuario();
        session_start();
        

        
}
    else{
        header('location: login.php');
    }
?>