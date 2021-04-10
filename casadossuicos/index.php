<?php 
	include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Casa dos Suíços</title>	
	<script src="https://kit.fontawesome.com/e2fe36d7e4.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="palavras-chave,do,meu,site">
	<meta name="description" content="Descrição do meu website">
	<link rel="icon" href="<?php echo INCLUDE_PATH; ?>favicon.ico" type="image/x-icon" />
	<meta charset="utf-8" />
</head>
<body>
	<base base="<?php echo INCLUDE_PATH; ?>" />
	<?php 
		$url = isset($_GET['url']) ? $_GET['url'] : 'home';

		switch ($url) {

			case 'galeria':
				echo '<target target="galeria" />';
				break;

			case 'comodidades':
				echo '<target target="comodidades" />';
				break;

			case 'localizacao':
				echo '<target target="localizacao" />';
				break;

			case 'contatos':
				echo '<target target="contatos" />';
				break;
		}
	?>
	<header>
		<a href="<?php echo INCLUDE_PATH; ?>">
			<img class="logomarca" src="images/logo-casa-dos-suicos-site.png">
		</a></div><!--logo-->

		<div class="center">			
			<nav class="desktop right">
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>galeria">Galeria</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>comodidades">Comodidades</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>localizacao">Localização</a></li>
					<li><a realtime="contatos" href="<?php echo INCLUDE_PATH; ?>contatos">Contatos</a></li>
				</ul>
			</nav>
			 <nav class="mobile right">
			 	<div class="botao-menu-mobile">
			 		<i class="fa fa-bars" aria-hidden="true"></i>
			 	</div>
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>galeria">Galeria</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>comodidades">Comodidades</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>localizacao">Localização</a></li>
					<li><a realtime="contatos" href="<?php echo INCLUDE_PATH; ?>contatos">Contatos</a></li>
				</ul>
			</nav>
			<div class="clear"></div>
		</div><!--center-->
	</header>

	<div class="container-principal">
		<?php 
			
			if(file_exists('pages/'.$url.'.php')){
				include('pages/'.$url.'.php');
			}else{
				if($url != 'teste'){
					$pagina404 = true;
					include('pages/404.php');
				}else{
					include('pages/home.php');
				}
			}
		?>
	</div>

	<footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>>
		<div class="center">
			<p>Todos os direitos reservados - Casa dos Suíços - Desenvolvido por <a href="http://donni.tech/" target="_blank">donni.tech</a></p>
		</div><!--center-->
	</footer>

	<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/constants.js"></script>
	<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4'></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>

	<?php
		if($url == 'home' || $url == ''){
	?>
	<script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
	<?php } ?>
	

	<?php
		if($url == 'contato'){
	?>
	<?php } ?>
	<script src="<?php echo INCLUDE_PATH; ?>js/exemplo.js"></script>
</body>
</html>