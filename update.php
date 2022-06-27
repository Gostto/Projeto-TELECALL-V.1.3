<?php
// Aqui estou incluindo o arquivo de configuração
require_once "config.php";
 

// Get hidden input value
$id = $_POST["id"];   
$nome = $_POST["nome"];
$login = $_POST["login"];
$senha = $_POST["senha"];
    
    // preparando o statement do comando update
    $sql = "UPDATE Usuario SET usu_nome=?, usu_login=?, usu_senha=? WHERE usu_codigo=?";
         
    if($stmt = mysqli_prepare($connection, $sql)){
		// liga as variáveis do "prepared statement" aos parâmetros que foram passados
        mysqli_stmt_bind_param($stmt, "sssi", $param_nome, $param_login, $param_senha, $id);
        
        // Inicializa os parâmetros
        $param_nome = $nome;
        $param_login = $login;
        $param_senha = $senha;
        
        // Execute a query já com os "prepared statement" ajustados
        if(mysqli_stmt_execute($stmt)){

            //comitar a transação
            mysqli_commit($connection);

            // fecha o statement
            mysqli_stmt_close($stmt);
            
            // fecha a conexão com o Banco de Dados
            mysqli_close($connection);
            
            // Se o usuário foi atualizado com sucesso, então redireciono para a página de consulta.
            header("location: consulta.php");
            exit();

        } else{
            header("location: error.php");
            exit();
        }
    }