<!DOCTYPE html>
<html>

<head>
	<title>Projeto-RH</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/global.css" />
	<link rel="stylesheet" type="text/css" href="css/login.css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
		integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<div class="container" id="findjobs">
	<body>
		<div class="container">
			<a class="links" id="paracadastro"></a>
			<a class="links" id="paralogin"></a>
			<p>
			<div class="content">
				<!--FORMULÁRIO DE LOGIN-->
				<div id="login">
					<form method="post" action="">
						<h1>
							<img src="assets/img/logo-estacio.png" alt="Logo estacio">
						</h1>
						<p>
							<label for="email_login">Seu e-mail</label>
							<input id="email_login" name="email_login" required="required" type="text"
								placeholder="exemplo@gmail.com" />
						</p>
						<p>
							<label for="senha_login">Sua senha</label>
							<input id="senha_login" name="senha_login" required="required" type="password"
								placeholder="senhaforte123" />
						</p>
						<p>
							<input type="checkbox" name="manterlogado" id="manterlogado" value="" />
							<label for="manterlogado">Manter-me logado</label>
						</p>
						<p>
							<input type="submit" value="Logar" />
						</p>
						<p class="link">
							Ainda não tem conta?
							<a href="#paracadastro">Cadastre-se</a>
						</p>
					</form>
				</div>
				<!--FORMULÁRIO DE CADASTRO-->
				<div id="cadastro">
					<form method="post" action="">
						<h1>
							<img src="assets/img/logo-estacio.png" alt="Logo estacio">
						</h1>
						<p>
							<label for="nome_cad">Seu nome</label>
							<input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="Nome" />
						</p>
						<p>
							<label for="email_cad">Seu e-mail</label>
							<input id="email_cad" name="email_cad" required="required" type="email"
								placeholder="exemplo@gmail.com" />
						</p>
						<p>
							<label for="senha_cad">Sua senha</label>
							<input id="senha_cad" name="senha_cad" required="required" type="password"
								placeholder="1234" />
						</p>

						<p>
							<label for="Insira seu cpf">Seu CPF</label>
							<input id="cpf" name="cpf" required="required" type="number"
								placeholder="000-000-000-00" />
						</p>

						<p>
							<input type="submit" value="Cadastrar" />
						</p>
						<p class="link">
							Já tem conta?
							<a href="#paralogin"> Ir para Login </a>
						</p>
					</form>
				</div>
			</div>
		</div>
		</p>
	</body>
	</body>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"
		integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="js/scripts.js"></script>
</html>