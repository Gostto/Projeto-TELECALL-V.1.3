<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="icone.jpg"/>
    <title>"Validação"</title>

	<!-- CSS DO BOOTSTRAP V.4.3.1 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- CSS DO PROJETO -->
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
    
</head>
<body>

<?php
    include "config.php";

    $celular = $_POST['celular'];
    $mae = $_POST['mae'];
    $nascimento = $_POST['nascimento'];
    
    

    $sql = "SELECT * FROM usuario WHERE usu_celular = '$celular' OR usu_mae = '$mae' OR usu_nascimento = '$nascimento'";

    if( $resultado = mysqli_query($connection ,$sql)){

        if ($registros = mysqli_num_rows($resultado)){

            $linha = mysqli_fetch_assoc($resultado);
            header("location: consulta.php");

        } else {
            header("location: 2fa.php");
            echo "<H1>Autenticação incorreta! Tente novamente.</H!><hr>";
            //echo "<a href='2fa.php' class='btn btn-info'>Voltar para o Autenticador</a>";
        }
    }
?>

</body>

</html>