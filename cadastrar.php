<?php

include 'connect.php';


$nome = $_POST['nome'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$tipo = "colab";




if( empty($nome) || empty($email) || empty($celular)){


    echo ' ?>
    <h1 class="text-light text-center">Ops! Ocorreu um erro.</h1>
    <h3 class="text-muted text-center"> Infelizmente não conseguimos fazer seu cadastro. Talvez você tenha deixado algum campo vazio.</h3><br>
    <a href="index.php" class=" d-block text-center"><button class="btn btn-light"><h1>Tentar novamente</button></h1></a> ';

}
else {
    $sql = "INSERT INTO func (nome, email, celular, tipo) VALUES ('$nome', '$email', '$celular', '$tipo')";
    $stmt= $pdo->prepare($sql);
    $stmt->execute();
    header ('location: index.php');
    


}





?>