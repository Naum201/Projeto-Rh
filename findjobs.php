<!DOCTYPE html>
<html>

<head>
	<title>Projeto-RH</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/global.css" />
	<link rel="stylesheet" href="css/findjobs.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
		integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>
	<div class="container" id="findjobs">
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
		<main id="lastjobs-container" class="wrapper">
			<h1>Busque a sua vaga</h1>
			<div id="job-filter">
				<div id="search-form">
					<form>
						<input type="text" name="job" placeholder="Digite o cargo">
						<select name="region">
							<option value="">Todos os estados</option>
						</select>
						<select name="category">
							<option value="">Categoria</option>
						</select>
						<input type="submit" value="Pesquisar">
					</form>
				</div>
				<div id="type-filter">
					<ul>
						<li>
							<input type="checkbox" checked><label>CLT</label>
						</li>
						<li>
							<input type="checkbox" checked><label>PJ</label>
						</li>
						<li>
							<input type="checkbox" checked><label>Home Office</label>
						</li>
						<li>
							<input type="checkbox" checked><label>Free Lancer</label>
						</li>
					</ul>
				</div>
			</div>
			<ul>
				<li>

				</li>
			</ul>
			<div class="btnjobs-container">
				<a href="#" class="btn-jobs">Carregar mais vagas</a>
			</div>
		</main>
		<footer id="contact">
			<div class="wrapper">
				<div class="footer-box">
					<div class="company-footer">
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
					<p>Proojeto-RH - 2023</p>
				</div>
			</div>
		</footer>
	</div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
	integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>

</html>