<?php

	session_start();
	date_default_timezone_set('America/Sao_Paulo');
	$autoload = function($class){
		$class = str_replace('\\', '/', $class); //pra funcionar no linux
		if($class == 'Email'){
			require_once('classes/phpmailer/PHPMailerAutoLoad.php');
		}
		include('classes/'.$class.'.php');
	};

	spl_autoload_register($autoload);


	define('INCLUDE_PATH','http://donni.tech/ofertas-da-vitrine/');
	//define('INCLUDE_PATH','http://localhost/ofertas-da-vitrine/');
	define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');
	define('INCLUDE_PATH_PLATAFORMA',INCLUDE_PATH);

	define('BASE_DIR_PAINEL',__DIR__.'/painel');
	define('BASE_DIR_PLATAFORMA',__DIR__);


	//Conectar com banco de dados!
	define('HOST','localhost');
	define('USER','u609173674_ofertasvitrine'); //root
	define('PASSWORD','Minhasenha07@');
	define('DATABASE','u609173674_ofertasvitrine');

	//define('HOST','localhost');
	//define('USER','root'); //root
	//define('PASSWORD','');
	//define('DATABASE','u609173674_ofertasvitrine');



	//Constantes para o painel de controle
	define('NOME_EMPRESA','OFERTAS DA VITRINE');

	//Funções do painel
	function pegaCargo($indice){
		return Painel::$cargos[$indice];
	}

	function selecionadoMenu($par){
		/*<i class="fa fa-angle-double-right" aria-hidden="true"></i>*/
		$url = explode('/',@$_GET['url'])[0];
		if($url == $par){
			echo 'class="menu-active"';
		}
	}

	function verificaPermissaoMenu($permissao){
		if($_SESSION['cargo'] >= $permissao){
			return;
		}else{
			echo 'style="display:none;"';
		}
	}

	function verificaPermissaoPagina($permissao){
		if($_SESSION['cargo'] >= $permissao){
			return;
		}else{
			include('painel/pages/permissao_negada.php');
			die();
		}
	}
?>