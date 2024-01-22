<?php

require_once 'cabecalho.php';
require_once 'connect.php';


?>

<form action="cad.php" class="form-group" method="POST">
    <input type="text" class="form-control" name="nome" placeholder="Seu nome completo" required>

    <select class="form-control" name="tipo" required>
        <option value="Colaborador">Colaborador</option>
        <option value="Proprietário">Proprietário</option>
    </select>

    <input type="email" class="form-control" name="email" placeholder="Seu email" required>
    <input type="password" class="form-control" name="snh" placeholder="Insira sua senha" required>
    <input type="password" class="form-control" name="senhaconfirma" placeholder="Repita a sua senha" required>
    <input type="number" class="form-control" name="celular" placeholder="Celular" required>
    <input type="text" class="form-control" name="endereco" placeholder="Endereço completo" required>
    <input type="datetime-local" class="form-control" name="datanascimento" required>
    <input type="submit" value="Cadastrar" class="btn btn-light">
</form>
