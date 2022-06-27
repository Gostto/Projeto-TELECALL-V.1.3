<?php
    // Aqui estou incluindo o arquivo de configuração
    require_once "config.php";
     
    // Variáveis inicializadas com valores vazios
    $nome = $login = $senha = "";
 
    // recupera o código do usuário (id) via GET.
    $id =  trim($_GET["id"]);
        
    // Prapara o select para trazer as informações do usuário.
    $sql = "SELECT usu_nome, usu_login, usu_senha FROM Usuario WHERE usu_codigo = ?";

    if($stmt = mysqli_prepare($connection, $sql)){
       
        // liga as variáveis do "prepared statement" ao id passado por parâmetro
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // seta o parâmetro.
        $param_id = $id;
        
        // executa a consulta (prepared statement)
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);

            if(mysqli_num_rows($result) == 1){
                /* Aqui verifica se trouxe um row no resultset. 
                   Neste caso não precisa fazer um loop já que garantiremos que vai trazer só 1 usuário*/
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Recupera cada valor do campo do row.
                $nome = $row["usu_nome"];
                $login = $row["usu_login"];
                $senha = $row["usu_senha"];
            } else{
                // Se na sua url não tiver um id válido. redireciona para a página de erro
                header("location: error.php");
                exit();
            }
            
        } else{
            header("location: error.php");
            exit();
        }
    }
        
    // Fecha o statement
    mysqli_stmt_close($stmt);
    
    // Fecha a conexão com o banco de dados.
    mysqli_close($connection);
?>
 


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Atualizando Usuário no Banco de Dados</title>
</head>
<body>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id ?>">
		Nome: <input type="text" name="nome" value="<?php echo $nome ?>">
		<br>
        Login:
        <input type="text" name="login" value="<?php echo $login ?>">
        <br>
        Senha:
        <input type="text" name="senha" value="<?php echo $senha ?>">
        <br>
        <input type="submit" value="Submeter">
        <a href="consulta.php">Cancelar</a>
    </form>
</body>
</html>