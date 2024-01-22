<?php
    include "cabecalho.php";
?>
<div class='row w-25 d-block text-center'>

                <form  action="bd_login.php" method="POST" class="form-group">
                    <input type="email" class="form-control mt-2" name="email" placeholder="Seu email" required>
                    <input type="password" class="form-control mt-2" name="snh" placeholder="Insira sua senha" required>
                    <input type="submit" value="Fazer Login" class="btn btn-light mt-2">

                </form>
                <p class="text-muted">Ainda não tem uma conta? <a href="cadastroconta.php">Crie já a sua!</a></p>
            </div>