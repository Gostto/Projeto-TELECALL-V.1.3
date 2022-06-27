<?php
    // Aqui estou incluindo o arquivo de configuração
    require_once "config.php";
    
    // Preparando o statement do comando select
    $sql = "SELECT USU_NOME, USU_LOGIN, USU_NASCIMENTO, USU_MAE, USU_CELULAR, USU_FIXO, USU_ENDEREÇO, USU_CIDADE, USU_ESTADO, USU_CEP FROM usuario WHERE USU_CODIGO = ?";
    
    if($stmt = mysqli_prepare($connection, $sql)){
        // liga as variáveis do "prepared statement" ao id passado por parâmetro
        mysqli_stmt_bind_param($stmt, "i", $_GET["id"]);
                
        // executa a consulta (prepared statement)
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Aqui verifica se trouxe um row no resultset. 
				Neste caso não precisa fazer um loop já que garantiremos que vai trazer só 1 usuário*/
                $row = mysqli_fetch_array($result);
                
                // Recupera cada valor do campo do row.
                $nome = $row["USU_NOME"];
                $login = $row["USU_LOGIN"];
                $nascimento = $row['USU_NASCIMENTO'];
                $mae = $row['USU_MAE'];
                $celular = $row['USU_CELULAR'];
                $fixo = $row['USU_FIXO'];
                $endereço = $row['USU_ENDEREÇO'];
                $cidade = $row['USU_CIDADE'];
                $estado = $row['USU_ESTADO'];
                $cep = $row['USU_CEP'];
            } else{
                // Se na sua url não tiver um id válido. redireciona para a página de erro
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Algo deu errado. Tente de novo.";
        }
    }
     
    // Fecha o statement
    mysqli_stmt_close($stmt);
    
    // Fecha a conexão com o banco de dados.
    mysqli_close($connection);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vendo o Usuário no Banco de Dados</title>
</head>
<body>
    Nome Completo: <?php echo $nome ?><br>
    Login: <?php echo $login ?><br>
    Data de Nascimento: <?php echo $nascimento ?><br>
    Nome da Mãe: <?php echo $login ?><br>
    Número de Telefone Celular: <?php echo $celular ?><br>
    Número do Telefone Fixo: <?php echo $fixo ?><br>
    Endereço: <?php echo $endereço ?><br>
    Cidade: <?php echo $cidade ?><br>
    Estado: <?php echo $estado ?><br>
    CEP: <?php echo $cep ?><br>

    
    <a href="pdf-logs.php" class="btn btn-primary">Download</a>
    <a href="consulta.php" class="btn btn-primary">Voltar</a>
</body>
</html>
