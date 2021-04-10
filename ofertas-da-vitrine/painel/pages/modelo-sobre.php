
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
$link_sobre = $last = end($parts);


/*busca dados da loja*/
$loja = MySql::conectar()->prepare("SELECT * FROM `tb_lojas` WHERE link_sobre = '$link_sobre';");
				$loja->execute();
				foreach ($loja as $key => $value) {

					 echo $value['nome_loja']; 
					 $value['img_logo']; 
					 $value['link_loja']; 
					 $oferta =  $value['link_ofertas']; 
					 $contato = $value['link_contato']; 
					 $sobre = $value['link_sobre']; 

					?>
<br>
					<a <?php selecionadoMenu('bocarosa-ofertas'); ?> href="<?php echo INCLUDE_PATH_PLATAFORMA.$oferta?>">OFERTAS</i></a>
					<a <?php selecionadoMenu('bocarosa-sobre'); ?> href="<?php echo INCLUDE_PATH_PLATAFORMA.$sobre?>">SOBRE</i></a>
					<a <?php selecionadoMenu('bocarosa-contato'); ?> href="<?php echo INCLUDE_PATH_PLATAFORMA.$contato?>">CONTATO</i></a>

					<?php
					
				}

?>

<p>SOBRE:</p>

<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>