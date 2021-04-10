
<?php
/*pega url*/
	function url_atual(){
		$pega_url= "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		$url = str_replace("&", "&amp;", $pega_url);

		return $url;
	}


/*explode url*/

$url = url_atual();
$parts = explode('/', $url);
echo $link_contato = $last = end($parts);


/*busca dados da loja*/
$loja = MySql::conectar()->prepare("SELECT * FROM `tb_lojas` WHERE link_contato = '$link_contato';");
				$loja->execute();
				foreach ($loja as $key => $value) {

					 echo $value['nome_loja']; 
					 $value['img_logo']; 
					 $value['link_loja']; 
					 $oferta =  $value['link_ofertas']; 
					 $contato = $value['link_contato']; 
					 $sobre = $value['link_sobre']; 

					?>

					<a <?php selecionadoMenu('bocarosa-ofertas'); ?> href="<?php echo INCLUDE_PATH_PLATAFORMA.$oferta?>">OFERTAS</i></a>
					<a <?php selecionadoMenu('bocarosa-sobre'); ?> href="<?php echo INCLUDE_PATH_PLATAFORMA.$sobre?>">SOBRE</i></a>
					<a <?php selecionadoMenu('bocarosa-contato'); ?> href="<?php echo INCLUDE_PATH_PLATAFORMA.$contato?>">CONTATO</i></a>

					<?php
					
				}

?>

<p>CONTATOS</p>

<p>Fone:</p>

<p>Site:</p>

<p>Atendimento:</p>