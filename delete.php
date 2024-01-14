<?php
include "connect.php";

if(isset($_POST['id']) && is_numeric($_POST['id'])) {
    $id = $_POST['id'];

    $stmt = $pdo->prepare('DELETE FROM func WHERE id = :id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    header('location: index.php');
    exit;
} else {
    echo "ID inválido ou ausente.";
}
?>