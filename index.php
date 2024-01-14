
        <title>
            MyBusi!
        </title>
        <body>

            <form method="POST" action="pesquisa.php">
            Pesquisar:<input type="text" name="pesquisar" placeholder="PESQUISAR">
            <input type="submit" value="ENVIAR">
            </form>
   
        <?php           
            include "connect.php";
            include "cabecalho.php";

            $query = "SELECT * FROM func";
            $stmt = $pdo->query($query);

            echo "
            <div class='text-center'>
            
            <h5>Adicionar Colaborador(a):</h5>

            <form action='cadastrar.php' class='form-group w-50 text-center' method='POST'>
                <input type='text' placeholder='Nome' name='nome' required>
                <input type='email' placeholder='Email' name='email' required>
                <input type='number' placeholder='Telefone' name='celular' required>
                <input type=submit class='btn btn-success' value='Enviar'>
            </form>
            
            </div>
            ";


            echo "<table class='table text-center'>";

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                
                echo "<tr><td>" . htmlspecialchars($row['nome']) . "</td>
                <td>" . htmlspecialchars($row['email']) . "</td>
                <td>" . htmlspecialchars($row['celular']) ."</td>
                <td>
                <form action='delete.php' method='post'>
                <input type='hidden' name='id' value='" . htmlspecialchars($row['id']) . "'>
                <input class='btn-danger' type='submit' data-toggle='modal' data-target='confirmaexclusao' value='Excluir'>  
                </button>
                </form>
                </td>
                </tr> 
                
                
                <div class='modal fade' id='confirmaexclusao' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                <div class='modal-dialog' role='document'>
                    <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Modal title</h5>
                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <div class='modal-body'>
                        Deseja deletar os registros de " . htmlspecialchars($row['nome']) ."? 
                    </div>
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                        <button type='button' class='btn btn-primary'>Save changes</button>
                    </div>
                    </div>
                </div>
                </div>
                
                
                ";
            }

            echo "</table>";


    ?>

        </body>

    </head>
</html>