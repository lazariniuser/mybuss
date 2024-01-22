<?php
include 'cabecalho.php';
include 'verifica.php';




if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['snh']) && !empty($_POST['snh'])){
    require_once 'bd_contas.php';
    $user = new Usuario();
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    if($user->login($email, $senha) == true){
        if(isset($_SESSION['id'])){
            header('location: index.php');


        }

        else {
            header('location: login.php');
        }

    }



}
else{
    header("location: login.php");
}