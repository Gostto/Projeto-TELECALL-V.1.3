<?php

 // CONEXÃO COM O BANCO DE DADOS
    include "config.php";

  if (isset($_POST['cpf']) || isset ($_POST['senha'])) {

    $login = mysqli_real_escape_string($connection, $_POST['cpf']);
    $senha = mysqli_real_escape_string($connection, $_POST['senha']);
    
    $sql = "SELECT * FROM usuario WHERE usu_login = '$login' AND usu_senha = '$senha'";   

    if ($resultado = mysqli_query($connection, $sql)) {

        if ($num_registros = mysqli_num_rows($resultado)) {

            $linha = mysqli_fetch_assoc($resultado);
            session_start();

            $_SESSION['cpf'] = $login;
            header("location: validacao.php");

        } else{
            echo "Login inválido!";
        }
    }
}

?>