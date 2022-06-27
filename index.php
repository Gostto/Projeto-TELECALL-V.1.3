<!-- PHP DE CONEXÃO COM O BANCO DE DADOS -->


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Login &mdash; Telecall</title>

	<!-- CSS DO BOOTSTRAP V.4.3.1 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- CSS DO PROJETO -->
	<link rel="stylesheet" type="text/css" href="css/my-login.css">

</head>

<body class="my-login-page">

   <!-- CABEÇALHO -->

            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html">
                        <img src="img/logo-horizontal.png" width="135" height="30" alt="">
                      </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="pricing.html">Planos</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contato</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.html">Sobre Nós</a></li>
							<li class="nav-item"><a class="nav-link" href="sobre-mim.html">Desenvolvedor</a></li>
                        </ul>
                    </div>
                    <div class="text-end">
                        <a href="index.php"><button class="btn btn-primary m-2" type="button">Entrar</button></a>
                        <a href="create_form.php"><button class="btn btn-danger" type="button" value="create_form.php">Registrar</button></a>
                    </div>
                </div>
            </nav>

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

						<!-- INPUT DO CPF -->

	    				<div class="form-group">
	    					<label for="email">Insira seu CPF</label>
	    					<input id="cpf" type="number" class="form-control" name="cpf" value="" required autofocus>
	    					<div class="invalid-feedback">
	    						CPF inválido
	    					</div>
	    				</div>

	    				<!-- INPUT DA SENHA -->
								
	    				<div class="form-group">
	    					<label for="password">Senha
	    						<a href="forgot.html" class="float-right">
	    							Esqueceu a senha?
	    						</a>
	    					</label>
	    					<input id="password" type="password" class="form-control" name="senha" required data-eye>
	    				    <div class="invalid-feedback">
	    				    	A Senha é obrigatória
	    			    	</div>
	    				</div>
	    				<div class="form-group">
	    					<div class="custom-checkbox custom-control">
	    						<input type="checkbox" name="remember" id="remember" class="custom-control-input">
	    						<label for="remember" class="custom-control-label">Lembrar-me</label>
	    					</div>
	    				</div>

						<!-- INPUT DO BOTÃO -->

	    				<div class="form-group m-0">
	    					<button type="submit" class="btn btn-primary btn-block">
	    						Login
	    					</button>
	    				</div>

						<!-- REDIRECIONAMENTO PARA O CADASTRO -->

	    				<div class="mt-4 text-center">
	    					Não tem uma conta? <a href="create_form.php">Crie uma</a>
	    				</div>
	    			</form>

	    		</div>
	    	</div>

		<!-- RODAPÉ -->

		<div class="footer">
			<a href="https://conadmin.telecall.com.br/publica/app/politicaprivacidade/">Termos &nbsp;&bull;⠀<a href="https://www.telecall.com/atendimento">Suporte &nbsp;&bull;⠀<a href="https://www.telecall.com/atendimento">Contato
		</div>
	</div>
			</div>
		</div>
	</section>

	<!-- JQUERY V.3.3.1 -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<!-- POPPER V.1.14.7 -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<!-- JAVASCRIPT DO PROJETO -->
	<script src="java/login.js"></script>

</body>

</html>