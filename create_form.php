<!-- PHP DE CONEXÃO COM O BANCO DE DADOS -->
<?php
include ('conexao_login.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title> Cadastrar &mdash; Telecall </title>

	<!-- CSS DO BOOTSTRAP V.4.3.1 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- CSS DO PROJETO -->
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>

<body class="my-login-page">

   <!-- CABEÇALHO -->
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
			<div class="brand">
				<img src="img/logo.png" alt="bootstrap 4 login page">
			</div>
			<div class="card fat">
				<div class="card-body">
					<h4 class="card-title">Cadastrar</h4>
					<form method="POST" action="create.php" class="my-login-validation" novalidate="">

						<!-- INPUT DO NOME -->

						<div class="form-group">
							<label for="name">Nome Completo</label>
							<input id="name" type="text" class="form-control" name="name" required autofocus>
							<div class="invalid-feedback">
								Qual é o seu nome?
							</div>
						</div>

						<!-- INPUT DO CPF -->

						<div class="form-group">
							<label for="cpf">CPF</label>
							<input id="cpf" type="number" class="form-control" name="cpf" required>
							<div class="invalid-feedback">
								CPF inválido
							</div>
						</div>

						<!-- INPUT DA DATA DE NASCIMENTO -->

						<div class="form-group">
							<label for="data-nascimento">Data de Nascimento</label>
							<input id="nascimento" type="date" class="form-control" name="nascimento" required>
							<div class="invalid-feedback">
								Data de Nascimento inválida
							</div>
						</div>
						
						<!-- INPUT DA SENHA -->

						<div class="form-group">
							<label for="password">Senha</label>
							<input id="password" type="password" class="form-control" name="password" required data-eye>
							<div class="invalid-feedback">
								A senha é obrigatória
							</div>
						</div>

						<!-- INPUT DO NOME MATERNO -->

						<div class="form-group">
							<label for="nome-da-mãe">Nome da Mãe</label>
							<input id="mae" type="text" class="form-control" name="mae" required data-eye>
							<div class="invalid-feedback">
								Nome inválido
							</div>
						</div>

						<!-- INPUT DO NÚMERO DO TELEFONE CELULAR -->

						<div class="form-group">
							<label for="tel-celular">N° do Telefone Celular</label>
							<input id="celular" type="number" class="form-control" name="celular" required>
							<div class="invalid-feedback">
								Número de telefone Celular inválido
							</div>
						</div>

						<!-- INPUT DO NÚMERO DO TELEFONE FIXO -->

						<div class="form-group">
							<label for="tel-fixo">N° do Telefone Fixo</label>
							<input id="fixo" type="number" class="form-control" name="fixo" required>
							<div class="invalid-feedback">
								Número de Telefone Fixo inválido
							</div>
						</div>

						<!-- INPUT DO ENDEREÇO -->

						  <div class="form-group">
							<label for="endereço">Endereço</label>
							<input id="endereço" type="text" class="form-control" name="endereço" required>
							<div class="invalid-feedback">
								Endereço inválido
							</div>
						</div>

						<!-- INPUT DA CIDADE -->
						
						<div class="form-group">
							<label for="cidade">Cidade</label>
							<input id="cidade" type="text" class="form-control" name="cidade" required>
							<div class="invalid-feedback">
								Cidade inválida
							</div>
						</div>

						<!-- INPUT DA ESTADO -->

						<div class="form-group">
  						  <label for="estado">Estado</label>
  						  <input id="estado" type="text" class="form-control" name="estado" required>
							<div class="invalid-feedback">
								Estado inválido
							</div>
						</div>

						  <!-- INPUT DO CEP -->

						  <div class="form-group">
  						  <label for="cep">CEP</label>
  						  <input id="cep" type="number" class="form-control" name="cep" required>
							<div class="invalid-feedback">
								CEP inválido
							</div>
						</div>

						<!-- INPUT DOS TERMOS DE SERVIÇO -->

						<div class="form-group">
							<div class="custom-checkbox custom-control">
								<input type="checkbox" name="agree" id="agree" class="custom-control-input" required="">
								<label for="agree" class="custom-control-label">Eu concordo com os <a href="https://conadmin.telecall.com.br/publica/app/politicaprivacidade/">Termos e condições</a></label>
								<div class="invalid-feedback">
									Você precisa concordar com os termos de serviço.
								</div>
							</div>
						</div>

						<!-- INPUT DO BOTÃO DE SE REGISTRAR -->

						<div class="form-group m-0">
							<button type="submit" value="Submeter"class="btn btn-primary btn-block">
								Registrar
							</button>
						</div>

						<!-- REDIRECIONAMENTO PARA O LOGIN -->

						<div class="mt-4 text-center">
							Já tem uma conta? <a href="index.php">Entrar</a>
						</div>

					</form>
				</div>
			</div>

			<!-- RODAPÉ -->

			<div class="footer">
				<br>
			</div>
		</div>
			</div>
		</div>
	</section>

	<!-- JQUERY V.3.3.1 -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<!-- BOOTSTRAP V.4.3.1 -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- JAVASCRIPT DO PROJETO -->
	<script src="java/login.js"></script>

</body>

</html>