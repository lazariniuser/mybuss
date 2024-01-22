<?php
    require_once "verifica.php";
    session_destroy();
    header('location: login.php');
?>