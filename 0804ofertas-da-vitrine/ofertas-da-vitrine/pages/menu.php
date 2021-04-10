<?php    

	$mostraLoja = MySql::conectar()->prepare("SELECT * from tb_lojas WHERE id = '$id_loja' ");		
	$mostraLoja->execute();
	$mostraLoja = $mostraLoja->fetchAll();
?>

<style>
	.menu-mobile{
		background-color: #6a1b9a;
		text-decoration: none;
		padding-right: 20px;
		padding-left: 20px;
		padding-top: 5px;
		padding-bottom: 5px;
		margin-bottom: 5px;
		text-align:center;
		margin-left:3%;
		margin-right:3%;
		

	}

	.link-menu-mobile{
		color: #fff;
		text-decoration: none;
		
	}
	
	.titulo-pagina{
	color: #6a1b9a;
	margin-top: 30px;
	margin-bottom: 40px;
	font-weight: 600;
	font-size: 20px;
	text-transform: uppercase;
	text-align:center;
}
</style>


	<?php
		foreach ($mostraLoja as $key => $value) {?>	

		<div class="titulo-pagina"><?php echo $value['nome_loja'];?></div>	
        	
    		
	<!-- aparecer no desktop -->  
    <div class="mobile-hide">
    	<a class="menu-conteudo" id="menu-sobre-contato" href="<?php echo INCLUDE_PATH_PLATAFORMA?>sobre">SOBRE E CONTATOS</a>    		
    	<a class="menu-conteudo" id="menu-ofertas" href="<?php echo INCLUDE_PATH_PLATAFORMA?>ofertas">OFERTAS</a>    		
    </div>
<!-- aparecer no mobile -->  
    <div class="mobile"><div class="desktop-hide">
    			<p class="menu-mobile"><a class="link-menu-mobile" href="<?php echo INCLUDE_PATH_PLATAFORMA?>ofertas">OFERTAS</a></p>			
            	<p class="menu-mobile"><a class="link-menu-mobile"  href="<?php echo INCLUDE_PATH_PLATAFORMA?>sobre">SOBRE E CONTATO</a></p>
    </div></div>	

				
            	
            	
		<?php } ?>




