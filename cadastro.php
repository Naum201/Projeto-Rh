<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/global.css" media="screen" />
    <title>cadastro</title>
</head>
<body>

    <ul>
        
        <li><img src="assets/img/logo-estacio-removebg-preview.png" width="100" height="50"> <a href="#"></a></li>
        <li><a href="#home">Home</a></li>
        <li><a href="#news">Vagas</a></li>
        <li><a href="#contact">Contact</a></li>
        <li style="float:right"><a class="active" href="#about">About</a></li>
      </ul>

<div style="display:inline-block;vertical-align:top;">
        <img src="assets/img/search_banner_bg-482147803f60ba9a4d62e0fd0cea619d1df542c90e190af209ab602f0f9fd939.png" width="700" height="700" alt="img"/>
</div>
    <div style="display:inline-block;">
        <p>
            <div class="container" >
                <a class="links" id="paracadastro"></a>
                <a class="links" id="paralogin"></a>
                 
                <div class="content">      
                  <!--FORMULÁRIO DE LOGIN-->
                  <div id="login">
                    <form method="post" action=""> 
                      <h1>Login</h1> 
                      <p> 
                        <label for="nome_login">Seu nome</label>
                        <input id="nome_login" name="nome_login" required="required" type="text" placeholder="ex. contato@htmlecsspro.com"/>
                      </p>
                       
                      <p> 
                        <label for="email_login">Seu e-mail</label>
                        <input id="email_login" name="email_login" required="required" type="password" placeholder="ex. senha" /> 
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
        </p>
    </div>
    
</body>
</html>