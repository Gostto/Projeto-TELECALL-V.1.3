<?php include "validarLogin.php";?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Login &mdash; Telecall</title>

	<!-- CSS DO BOOTSTRAP V.4.3.1 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- CSS DO PROJETO -->
	<link rel="stylesheet" type="text/css" href="css/my-login.css">

</head>

<body class="my-login-page">
   <section class="h-100">

	<div class="container h-100">
	<div class="row justify-content-md-center h-100">
	    <div class="card-wrapper">

						<!-- LOGO DA DIV -->

	    	<div class="brand">
	    		<img src="img/logo.png" alt="logo">
	    	</div>
	    	<div class="card fat">
	    		<div class="card-body">
	    			<h4 class="card-title">Login</h4>
	    			<form method="POST" action="conexao_login.php" id="formlogin" name="formlogin" class="my-login-validation" novalidate="">

						<!-- DADOS DE CADASTRO -->

	    				<div class="form-group">
	    					<label for="email">Seus Dados de Cadastro</label>
	    
                            <a href="logout.php" class="btn btn-primary">Sair</a>
	    					</div>
	    				</div>

	    		</div>
	    	</div>

		<!-- RODAPÉ -->

		<div class="footer">
			Copyright &copy; 2022 &mdash; Gusttavo C.S.
		</div>
	</div>
			</div>
		</div>
	</section>

	<!-- JQUERY V.3.3.1 -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<!-- POPPER V.1.14.7 -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<!-- BOOTSTRAP V.4.3.1 -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- JAVASCRIPT DO PROJETO -->
	<script src="java/login.js"></script>

</body>

</html>