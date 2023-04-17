<!DOCTYPE html>
<html>
<head>
	<title>Projeto-RH</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/global.css" />
	<link rel="stylesheet" href="css/jobs.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
	<div class="container" id="jobpage">
		<header>
			<nav>
				<div class="nav-container">
			        <a href="index.html">
			            <img id="logo" src="./img/logo-estacio-removebg-preview.png" alt="Proojeto-RH">
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
		<div id="job-header">
			<h1>Developer</h1>
			<div id="job-info">
				<div class="job-type">
				  <span class="clt">CLT</span>
				</div>
				<div class="locality">
					<i class="fas fa-map-marker-alt"></i>
					<p>Mountain View, California</p>
				</div>
				<div class="date">
					<i class="far fa-calendar-alt"></i>
					<p>Enviada há 3 dias</p>
				</div>
			</div>
		</div>
		<div class="wrapper">
			<main id="job-container">
			    <div id="about-company-contaienr">
			    	<h2 class="page-title">Sobre a empresa</h1>
			    	<img src="img/company.jpg" id="company-img" alt="Como é o Google">
			    	<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at lectus vel lectus aliquet tristique. Morbi interdum odio eget tellus mattis malesuada. Proin tempus magna ac lorem elementum efficitur. Aenean vitae elit ullamcorper, pharetra nisl sed, tempor nibh. Suspendisse feugiat nisl eu metus molestie, ac vulputate lorem finibus.</p>
			    </div>
			    <div id="about-job-container">
			    	<h2 class="page-title">Sobre a vaga</h2>
			    	<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at lectus vel lectus aliquet tristique. Morbi interdum odio eget tellus mattis malesuada. Proin tempus magna ac lorem elementum efficitur. Aenean vitae elit ullamcorper, pharetra nisl sed, tempor nibh. Suspendisse feugiat nisl eu metus molestie, ac vulputate lorem finibus.</p>
			    </div>
			    <div id="min-requirements-container">
			    	<h2 class="page-title">Requisitos mínimos da vaga</h2>
			    	<ul class="jobpage-list">
			    		<li>Lorem ipsum dolor sit amet</li>
			    		<li>Lorem ipsum dolor sit amet</li>
			    		<li>Lorem ipsum dolor sit amet</li>
			    		<li>Lorem ipsum dolor sit amet</li>
			    	</ul>
			    </div>
			    <div id="job-benefits-container">
			    	<h2 class="page-title">Benefícios</h2>
			    	<ul class="jobpage-list">
			    		<li>Lorem ipsum dolor sit amet</li>
			    		<li>Lorem ipsum dolor sit amet</li>
			    		<li>Lorem ipsum dolor sit amet</li>
			    		<li>Lorem ipsum dolor sit amet</li>
			    	</ul>
			    </div>
		    </main>

		    <aside id="companyinfo-container">
		      <img src="img/googlelogo.png" alt="Google logo">
		      <div class="job-type">
		        <span class="clt">CLT</span>
		      </div>
		      <a id="apply-btn" href="#">Candidatar-se</a>
		      <div class="companysocial-container">
		        <ul id="job-social-list">
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
		    </aside>
		</div>
		<footer  id="contact">
			<div class="wrapper">
				<div class="footer-box">
					<div class="company-footer">
						<img src="img/logo.png">
						<h2>Proojeto-RH</h2>
						<p>A maneira mais fácil de encontrar seu próximo emprego.</p>
					</div>
				</div>
				<div class="footer-box">
					<div class="articles-footer">
						<h2>Artigos rescentes</h2>
						<ul class="footer-list footer-article-list">
							<li>
								<a href="#">Como conseguir o primeiro emprego em tempos de crise?</a>
								<span class="article-date">05 de fevereiro de 2019</span>
							</li>
							<li>
								<a href="#">Como conseguir o primeiro emprego em tempos de crise?</a>
								<span class="article-date">05 de fevereiro de 2019</span>
							</li>
							<li>
								<a href="#">Como conseguir o primeiro emprego em tempos de crise?</a>
								<span class="article-date">05 de fevereiro de 2019</span>
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
					<p>horaDeCodar - 2019</p>
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