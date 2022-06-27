<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="img/logo.png"/>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <title>Cadastro</title>
</head>
<body>
    


<?php
include_once "config.php";

$nome = $_POST["nome"];
$login = $_POST["login"];
$senha = $_POST["senha"];
$nascimento = $_POST["nascimento"];
$mae = $_POST["mae"];
$celular = $_POST["celular"];
$fixo = $_POST["fixo"];
$endereço = $_POST["endereço"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$cep = $_POST["cep"];


$sql = mysqli_query($connection,"INSERT INTO usuario (usu_nome, usu_login, usu_senha, usu_nascimento, usu_mae, usu_fixo, usu_endereço, usu_cidade, usu_estado, usu_cep)
        VALUES (null,'$nome', '$login', '$senha', '$nascimento', '$mae', '$celular', '$fixo', '$endereço', '$cidade', '$estado', '$cep')");
    echo "<h1>$nome, seu cadastro foi realizado com com sucesso!</h1>" ;

  ?>
    <hr>
    <a href="consulta.php" class="btn btn-primary">Sair</a>


<!-- SCRIPT DO FONTAWESOME V.6.0 -->
<script src="https://kit.fontawesome.com/22a7c47397.js" crossorigin="anonymous"></script>
    
</body>

</html>

