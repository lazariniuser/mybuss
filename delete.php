<?php
include "connect.php";

if (isset($_POST['id']) && is_numeric($_POST['id'])) {
    $id = $_POST['id'];


    $stmt = $pdo->prepare('DELETE FROM func WHERE id = :id');
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        header('location: index.php?msg=exclusao_sucesso');
        exit;
    } else {
        header('location: index.php?msg=erro_exclusao');
        exit;
    }
} else {
    header('location: index.php?msg=id_invalido_ausente');
    exit;
}
?>
