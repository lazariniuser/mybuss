<?php
   

include "cabecalho.php";
require_once "connect.php";
require_once "verifica.php"; 


if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

$empresa_id_usuario = isset($_SESSION['empresa_id']) ? $_SESSION['empresa_id'] : null; 

if ($empresa_id_usuario !== null) {
    $query_empresa = "SELECT * FROM contas WHERE empresa_id = :empresa_id";
    $stmt_empresa = $pdo->prepare($query_empresa);
    $stmt_empresa->bindParam(':empresa_id', $empresa_id_usuario);
    $stmt_empresa->execute();
    $empresa = $stmt_empresa->fetch(PDO::FETCH_ASSOC);

    if ($empresa) {
        $query_funcionarios = "SELECT * FROM contas WHERE empresa_id = :empresa_id AND tipo = 'Colaborador'";
        $stmt_funcionarios = $pdo->prepare($query_funcionarios);
        $stmt_funcionarios->bindParam(':empresa_id', $empresa_id_usuario);
        $stmt_funcionarios->execute();

        require_once "cadastroconta.php";

        echo "<table class='table text-center'>";
        while ($row = $stmt_funcionarios->fetch(PDO::FETCH_ASSOC)) {
            $modal_id = 'confirmaexclusao-' . $row['id']; 

            echo "<tr><td>" . htmlspecialchars($row['nome']) . "</td>
                <td>" . htmlspecialchars($row['email']) . "</td>
                <td>" . htmlspecialchars($row['celular']) . "</td>
                <td>
                    <form action='delete.php' method='post'>
                        <input type='hidden' name='id' value='" . htmlspecialchars($row['id']) . "'>
                        <button class='btn-danger' type='submit' data-toggle='modal' data-target='#$modal_id'>Excluir</button>
                    </form>
                </td>
            </tr>";

            // Modal exclusivo para cada funcionário
            echo "
                <div class='modal fade' id='$modal_id' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                    <div class='modal-dialog' role='document'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <h5 class='modal-title' id='exampleModalLabel'>Confirmação de Exclusão</h5>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                </button>
                            </div>
                            <div class='modal-body'>
                                Deseja deletar os registros de " . htmlspecialchars($row['nome']) . "? 
                            </div>
                            <div class='modal-footer'>
                                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Fechar</button>
                                <button type='button' class='btn btn-danger'>Excluir</button>
                            </div>
                        </div>
                    </div>
                </div>";
        }

        echo "</table>";

    } else {
        echo "Empresa não encontrada para o usuário.";
    }
} else {
    echo "Erro: Sessão 'empresa_id' não definida.";
}
?>
