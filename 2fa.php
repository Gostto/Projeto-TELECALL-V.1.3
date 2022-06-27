<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="logo.jpg"/>
    <title>Autenticação de Dois Fatores</title>

  <!-- CSS DO BOOTSTRAP V.4.3.1 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- CSS DO PROJETO -->
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
  <!-- FONT AWESOME -->
  <script src="https://kit.fontawesome.com/22a7c47397.js" crossorigin="anonymous"></script>

    </head>
  <body>
    <?php
    include "config.php";

    $wheel=rand(1,3);

      switch($wheel):

        case 1:
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<div class='container'>";
        echo "<div class='row'>";
        echo   "<div class='col-3'></div>";
        echo     "<div class='col-6'>";
        echo       "<div class='jumbotron'>";
        echo         "<h4 class='display-4'><h4>Autentique os dados para a validação do login!</h4>";
        echo           "<form action='validacao.php' method='POST'>";
        echo             "<div class='form-group'>";
        echo             "<label for='exampleInputEmail1'>Insira seu Telefone Celular</label>";
        echo             "<input type='text' class='form-control' name='celular'>";
        echo             "</div>";
        echo             "<button type='submit' class='btn btn-primary'>Acessar</button>";
        echo           "</form>";
        echo          "</div>";
        echo     "</div>";
        echo "<div class='col-5'></div>";
        echo "</div>";
        echo "</div>";
    
        break; 
        case 2:
          echo "<br>";
          echo "<br>";
          echo "<br>";
          echo "<br>";
          echo "<br>";
          echo "<br>";
          echo "<br>";
          echo "<div class='container'>";
          echo "<div class='row'>";
          echo   "<div class='col-3'></div>";
          echo     "<div class='col-6'>";
          echo       "<div class='jumbotron'>";
          echo         "<h4 class='display-4'><h4>Autentique os dados para a validação do login!</h4>";
          echo           "<form action='validacao.php' method='POST'>";
          echo             "<div class='form-group'>";
          echo             "<label for='exampleInputEmail1'>Insira o Nome da sua Mãe</label>";
          echo             "<input type='text' class='form-control' name='mae'>";
          echo             "</div>";
          echo             "<button type='submit' class='btn btn-primary'>Acessar</button>";
          echo           "</form>";
          echo          "</div>";
          echo     "</div>";
          echo "<div class='col-5'></div>";
          echo "</div>";
          echo "</div>";
  
        break; 
        case 3:
           echo "<br>";
           echo "<br>";
           echo "<br>";
           echo "<br>";
           echo "<br>";
           echo "<br>";
           echo "<br>";
           echo "<div class='container'>";
           echo "<div class='row'>";
           echo   "<div class='col-3'></div>";
           echo     "<div class='col-6'>";
           echo       "<div class='jumbotron'>";
           echo         "<h4 class='display-4'><h4>Autentique os dados para a validação do login!</h4>";
           echo           "<form action='validacao.php' method='POST'>";
           echo             "<div class='form-group'>";
           echo             "<label for='exampleInputEmail1'>Insira sua Data de Nascimento</label>";
           echo             "<input type='text' class='form-control' name='nascimento'>";
           echo             "</div>";
           echo             "<button type='submit' class='btn btn-primary'>Acessar</button>";
           echo           "</form>";
           echo          "</div>";
           echo     "</div>";
           echo "<div class='col-5'></div>";
           echo "</div>";
           echo "</div>";
           break; 
        endswitch;

    ?>
    
   
  </body>
</html>