<?php

try {
  global $pdo;
  $db_myb = 'flibd';
  $localhost = 'localhost';
  $user = 'root';
  $password = '';
  $pdo = new PDO("mysql:dbname=" . $db_myb . "; host=" . $localhost, $user, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $pdo->prepare("SELECT * FROM contas");
  $stmt->execute();
  
} catch (PDOException $e) {
  echo "Erro: Banco de dados não encontrado! Para mais informações, entre em contato conosco pelo número (12)98100-6067" . $e->getMessage();
}

?>
