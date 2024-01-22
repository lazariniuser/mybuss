<?php
session_start();
include 'cabecalho.php';
require_once 'connect.php';

$nome = $_POST['nome'];
$email_aluno = $_POST['email'];
$celular = $_POST['celular'];
$datanasc = $_POST['datanascimento'];
$pasd = $_POST['snh'];
$conf = $_POST['senhaconfirma'];
$end = $_POST['endereco'];
$tipo = $_POST['tipo'];


if (isset($_SESSION['empresa_id'])) {
    $empresa_id = $_SESSION['empresa_id'];

    if ($conf == $pasd) {
        if (empty($nome) || empty($email_aluno) || empty($celular) || empty($datanasc) || empty($pasd) || empty($end)) {
            echo '<h1 class="text-light text-center">Ops! Ocorreu um erro.</h1>
                  <h3 class="text-muted text-center">Infelizmente não conseguimos fazer seu cadastro. Talvez você tenha deixado algum campo vazio.</h3><br>
                  <a href="cadastroconta.php" class="d-block text-center"><button class="btn btn-light"><h1>Tentar novamente</button></h1></a>';
        } else {
            $sql = "INSERT INTO contas (nome, email, celular, datanascimento, snh, tipo, endereco, empresa_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            
            $stmt->execute([$nome, $email_aluno, $celular, $datanasc, $pasd, $tipo, $end, $empresa_id]);
            header('location: index.php');
        }
    } else {
        require_once "cadastroconta.php";
        echo "<h5 class='text-center btn-danger p-3'>Senhas não coincidem</h5>";
    }
} else {
    echo "Erro: Sessão 'empresa_id' não definida.";
}
?>
