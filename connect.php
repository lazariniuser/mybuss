<?php
global $pdo;
  $db_myb = 'flibd';
  $localhost = 'localhost';
  $user = 'root';
  $password = '';
  $pdo = new PDO ("mysql:dbname=".$db_myb."; host=".$localhost, $user, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = $pdo->query("SELECT * FROM contas");
  $sql->execute();
  
 
  ?>
