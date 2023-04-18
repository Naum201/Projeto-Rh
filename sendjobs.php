<!DOCTYPE html>
<html>
<head>
	<title>Projeto-RH</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/global.css" />
	<link rel="stylesheet" href="css/sendjob.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
	<div class="container" id="sendjobs">
		<header>
			<nav>
				<div class="nav-container">
			        <a href="index.php">
			            <img id="logo" src="assets/img/logo-estacio.png" alt="Projeto-RH">
			        </a>
					<i class="fas fa-bars btn-menumobile"></i>
					<ul>
						<li><a href="findjobs.php">Encontrar vaga</a></li>
                        <li><a href="login.php">Login</a></li>
						<li><a href="sendjobs.php">Enviar vaga</a></li>
						<li><a href="#contact">Contato</a></li>
					</ul>
				</div>
			</nav>
		</header>
		<main id="sendjobs-container" class="wrapper">
			<h1>Preencha os dados da vaga</h1>
			<div class="input-box">
				<label>Título da vaga <span class="required">*</span></label>
				<input type="text" name="jobtitle" placeholder="Insira o título da vaga">
			</div>
			<div class="input-box">
				<label>Descrição da vaga <span class="required">*</span></label>
				<textarea name="description" placeholder="Insira a descrição da vaga"></textarea>
			</div>
			<div class="input-box">
				<label>Nome da empresa <span class="required">*</span></label>
				<input type="text" name="company" placeholder="Insira o nome da empresa">
			</div>
			<div class="input-box">
				<label>Tipo de contratação <span class="required">*</span></label>
				<select name="jobtype">
					<option value="">Escolha uma opção</option>
					<option value="pj">PJ</option>
					<option value="clt">CLT</option>
					<option value="homeoffice">Home Office</option>
					<option value="freelancer">Free Lancer</option>
				</select>
			</div>
			<div class="input-box">
				<input type="submit" name="Enviar" value="Enviar">
			</div>
		</main>
		<footer id="contact">
			<div class="wrapper">
				<div class="footer-box">
					<div class="company-footer">
						<img src="#">
						<h2>Projeto-RH</h2>
						<p>A maneira mais fácil de encontrar seu próximo emprego.</p>
					</div>
				</div>
				<div class="footer-box">
					<div class="articles-footer">
						<h2>Artigos rescentes</h2>
						<ul class="footer-list footer-article-list">
							<li>
								<a href="#">Como conseguir o primeiro emprego em tempos de crise?</a>
								<span class="article-date">05 de fevereiro de 2023</span>
							</li>
							<li>
								<a href="#">Como conseguir o primeiro emprego em tempos de crise?</a>
								<span class="article-date">05 de fevereiro de 2023</span>
							</li>
							<li>
								<a href="#">Como conseguir o primeiro emprego em tempos de crise?</a>
								<span class="article-date">05 de fevereiro de 2023</span>
							</li>
						</ul>
					</div>
				</div>
				<div class="footer-box">
					<h2>Nos encontre nas redes sociais</h2>
					<ul class="footer-list">
						<li>
							<a href="#">
								<i class="fab fa-facebook-square"></i>
								<span>Facebook</span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fab fa-instagram"></i>
								<span>Instagram</span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fab fa-linkedin"></i>
								<span>Linkedin</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="wrapper">
					<p>Projeto-RH</p>
				</div>
			</div>
		</footer>
	</div>
</body>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
</html>