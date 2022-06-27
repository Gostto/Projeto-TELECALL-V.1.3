<?php
// CONFIGURAÇÃO DO LOCALHOST

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'db-projeto');
 
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// CHECANDO A CONEXÃO

if($connection === false){
	die("ERROR: Não foi possível se conectar ao banco de dados MySQL. " . mysqli_connect_error());
} 