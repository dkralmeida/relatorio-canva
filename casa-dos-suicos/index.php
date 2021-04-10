<!DOCTYPE html>
<html>
<head>
	<title>CASA DOS SUÍÇOS</title>
	<script src="https://kit.fontawesome.com/e2fe36d7e4.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">

	<link href="estilo/style.css" rel="stylesheet" />	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="palavras-chave,do,meu,site">
	<meta name="description" content="Descrição do meu website">
	<meta charset="utf-8" />

<!--favicon-->
<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
<link rel="manifest" href="images/favicon/site.webmanifest">
<link rel="mask-icon" href="images/favicon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
<!--favicon-->

</head>
<body>
	<header>	
		<div class="center">

		<div class="logo left">	LOGO</div>		
			<nav class="desktop right">
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="galeria">Galeria</a></li>
					<li><a href="comodidades">Comodidades</a></li>
					<li><a href="localizacao">Localização</a></li>
					<li><a href="contatos">Contatos</a></li>
					<li><a href="reservar" ><div class="btn-reservar"><i class="fab fa-airbnb"></i> Reservar</div></a></li>
				</ul>
			</nav>
			<nav class="mobile right">
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="galeria">Galeria</a></li>
					<li><a href="comodidades">Comodidades</a></li>
					<li><a href="localizacao">Localização</a></li>
					<li><a href="contatos">Contatos</a></li>
					<li><a href="reservar"><div class="btn-reservar"><i class="fab fa-airbnb"></i> Reservar</div></a></li>
				</ul>
			</nav>
			<div class="clear">
		</div><!--center-->
	</header>

	<section class="banner-principal">
		
	</section>

	<section class="conheca-o-espaco"><!--descricao-autor-->
		<div class="center">
			<div class="w50 left">
				<h2>CONHEÇA O ESPAÇO</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. 
				</p>
				<p>
					Sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
			<div class="w50 left">
				<img src="images/casa-dos-suicos.png">
			</div>

			<div class="clear"></div><!--clear - para limpar espaçamento de flutuação-->
		</div>

		<div class="center">
			<div class="button-reservar"><i class="fab fa-airbnb"></i> Reservar pelo Airbnb</div>
		</div>

	</section>


		<section class="conheca-o-espaco"><!--descricao-autor-->
		<div class="center">
			<div class="w50 left">
				<h2>GALERIA DE FOTOS</h2>
<!--galeria de fotos-->

<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 10</div>
    <img src="images/galeria/fachada.png" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 10</div>
    <img src="images/galeria/varanda.png" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 10</div>
    <img src="images/galeria/churrasqueira.png" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 10</div>
    <img src="images/galeria/cozinha.png" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 10</div>
    <img src="images/galeria/copa.png" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 10</div>
    <img src="images/galeria/quarto1-suite.png" style="width:100%">
  </div>

   <div class="mySlides">
    <div class="numbertext">7 / 10</div>
    <img src="images/galeria/quarto2.png" style="width:100%">
  </div>

  
  <div class="mySlides">
    <div class="numbertext">8 / 10</div>
    <img src="images/galeria/sala.png" style="width:100%">
  </div>
  
  <div class="mySlides">
    <div class="numbertext">9 / 10</div>
    <img src="images/galeria/lavanderia.png" style="width:100%">
  </div>

   <div class="mySlides">
    <div class="numbertext">10 / 10</div>
    <img src="images/galeria/fundos.png" style="width:100%">
  </div>

  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

   <div class="row">
   

    <div class="column">
      <img class="demo cursor" src="images/galeria/fachada.png" style="width:100%" onclick="currentSlide(1)" alt="Fachada">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/galeria/varanda.png" style="width:100%" onclick="currentSlide(2)" alt="Varanda">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/galeria/churrasqueira.png" style="width:100%" onclick="currentSlide(3)" alt="Churrasqueira">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/galeria/cozinha.png" style="width:100%" onclick="currentSlide(4)" alt="Cozinha">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/galeria/copa.png" style="width:100%" onclick="currentSlide(5)" alt="copa.png">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/galeria/quarto1-suite.png" style="width:100%" onclick="currentSlide(6)" alt="Quarto 1 | Suíte">
    </div>

    </div><!--row-->
    <div><!--row-->   
    
     <div class="column">
      <img class="demo cursor" src="images/galeria/quarto2.png" style="width:100%" onclick="currentSlide(7)" alt="Quarto 2">
    </div>
  
    <div class="column">
      <img class="demo cursor" src="images/galeria/sala.png" style="width:100%" onclick="currentSlide(8)" alt="Sala">
    </div>

    <div class="column">
      <img class="demo cursor" src="images/galeria/lavanderia.png" style="width:100%" onclick="currentSlide(9)" alt="Lavanderia">
    </div>

    <div class="column">
      <img class="demo cursor" src="images/galeria/fundos.png" style="width:100%" onclick="currentSlide(10)" alt="Fundos">
    </div>

  </div><!--row-->
</div><!--container-->
<!--fim da galeria de fotos-->
			
			</div>
			<div class="w50 left">
				<h2>CASA INTEIRA</h2>
					<p>25 Loremipsum</p>
					<p>25 Loremipsum</p>
					<p>25 Loremipsum</p>
					<p>25 Loremipsum</p>
				<h2>COMODIDADES</h2>
				<div><i class="fas fa-fan"></i></div><div>Ventilador de teto nos quartos</div>
				<div><i class="fas fa-wifi"></i></div><div>Internet com wi-fi</div>
				<div><i class="fas fa-tv"></i></div><div>Televisão</div>
				<div><i class="fas fa-utensils"></i></div><div>Cozinha completa</div>
				<div><i class="fas fa-drumstick-bite"></i></div><div>Churrasqueira equipada</div>
				<div><i class="fas fa-parking"></i></div><div>Estacionamento</div>
				<div><i class="fas fa-umbrella-beach"></i></div><div>Em frente à praia.</div>
				<div><i class="fas fa-users"></i></div><div>Ideal para grupos e famíias</div>
				<div><i class="fas fa-paw"></i></div><div>Permite animais.</div>

			</div>

		<div class="clear"></div>	
		</div>
		<div class="center">	
			<div class="button-reservar">Reservar pelo Airbnb</div>
		</div>
	</section>

	<section class="perguntas-frequentes">
		<div class="center">
			<h2>PERGUNTAS FREQUENTES</h2>
			<div class="w50 left">
				

<!--perguntas frequentes-->

<button class="accordion">Posso realizar festas na casa? </button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion">Posso chegar antes das 16:00 hs (check-in) ou sair depois das 10:00hs (check-out)?</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion">Posso levar visitantes extras para dormir na casa?</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion">Posso reservar a casa diretamente com o Anfitrião?</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>



<!--fim - perguntas frequentes-->




				
			</div>
			<div class="w50 left">


<!--perguntas frequentes-->

<button class="accordion">Posso realizar festas na casa? </button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion">Posso chegar antes das 16:00 hs (check-in) ou sair depois das 10:00hs (check-out)?</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion">Posso levar visitantes extras para dormir na casa?</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion">Posso reservar a casa diretamente com o Anfitrião?</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>



<!--fim - perguntas frequentes-->

			</div>

			<div class="clear"></div>

		</div>			
	</section>

	<section class="localizacao-pontosturisticos">
		<div class="center">
			<div class="w50 left">
				<h2>LOCALIZAÇÃO</h2>	
				<img class="logomarca" src="images/mapa.png">		
			
			</div>
			<div class="w50 left">
				<h2>PONTOS TURÍSTICOS</h2>

				<div>Centro</div>1,5km</div>
				<div>Centro</div>1,5km</div>
				<div>Centro</div>1,5km</div>
				<div>Centro</div>1,5km</div>
			</div>

			<div class="clear"></div>
		</div>			
	</section>

	<section class="rodape">
		
		<div class="center">
			<div class="box-rodape w33 left"><!--box-especialidade-->
				<img class="logomarca" src="images/logo-casa-dos-suicos-site.png">
			</div><!--box-rodape-->

			<div class="box-rodape w33 left">
				<h2>ENTRE EM CONTATO</h2>
			</div><!--box-rodape-->

			<div class="box-rodape w33 left">
				<h2>FAÇA SUA RESERVA</h2>
			</div><!--box-rodape-->

			<div class="clear">
		</div>
	</section>

	
	<footer>
		<div class="center">
			<p>Todos os direitos reservados! - Casa dos Suíços - Desenvolvido por <a href="http://donni.tech/">Donni.tech</a></p>
		</div>
	</footer>

	<script type="text/javascript" src="js/javascript.js"></script>
</body>
</html>