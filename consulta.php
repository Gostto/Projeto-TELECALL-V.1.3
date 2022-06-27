<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <!-- <title>Aula de CRUD - SELECT</title> -->
    <title>Consulta &mdash; Telecall</title>

</head>
<body>
        <?php
        // Aqui estou incluindo o arquivo de configuração
        require_once "config.php";
        
        // Montando o comando select para exibir a lista de usuários
        $sql = "SELECT * FROM usuario";
        if($result = mysqli_query($connection, $sql)){
            if(mysqli_num_rows($result) > 0){
                echo '<table border="1">';
                        echo "<tr>";	
                        echo "<th>Nome Completo</th>";
                        echo "<th>Login</th>";
                        echo "<th>Data de Nascimento</th>";
                        echo "<th>Nome da Mãe</th>";
                        echo "<th>N° de Telefone Celular</th>";
                        echo "<th>N° de Telefone Fixo</th>";
                        echo "<th>CEP</th>";
                        echo "<th>Endereço</th>";
                        echo "<th>Cidade</th>";
                        echo "<th>Estado</th>";
                        echo "<th>Ações</th>";
                    echo "</tr>";
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";

                            echo "<td>" . $row['USU_NOME'] . "</td>";
                            echo "<td>" . $row['USU_LOGIN'] . "</td>";
                            echo "<td>" . $row['USU_NASCIMENTO'] . "</td>";
                            echo "<td>" . $row['USU_MAE'] . "</td>";
                            echo "<td>" . $row['USU_CELULAR'] . "</td>";
                            echo "<td>" . $row['USU_FIXO'] . "</td>";
                            echo "<td>" . $row['USU_ENDEREÇO'] . "</td>";
                            echo "<td>" . $row['USU_CIDADE'] . "</td>";
                            echo "<td>" . $row['USU_ESTADO'] . "</td>";
                            echo "<td>" . $row['USU_CEP'] . "</td>";

                            echo "<td>";
                                echo '<a href="read.php?id='. $row['USU_CODIGO'] .'">visualizar</a>|';
                                echo '<a href="update_form.php?id='. $row['USU_CODIGO'] .'">atualizar</a>|';
                                echo '<a href="delete.php?id='. $row['USU_CODIGO'] .'">excluir</a>';
                            echo "</td>";
                        echo "</tr>";
                    }
                echo "</table>";
                // A lista de resultados aparece em um resultset
                mysqli_free_result($result);
            } else{
                echo '<div>Não há ainda usuários cadastrados no banco de dados.</div>';
            }
        } else{
            header("location: error.php");
            exit();
        }

        // fecha a conexão com o Banco de Dados
        mysqli_close($connection);
        ?>
        <br>
        <!--<a href="create_form.php">Incluir Novo Usuário</a>-->
        <p>
        <a href="logout.php">Sair</a>
        </p>
</body>
</html>