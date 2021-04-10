
<?php header('Cache-Control: no cache'); //para voltar sem ter que carregar formulário ?>

<br><br>
<div class="box-content">
	
<?php

	$id_categoria =  $_POST['idcat'];

	$categoria = Plataforma::carregarCategoria($id_categoria);
		foreach ($categoria as $key => $value) {
	?>		
		<h2><?php  echo $value['nome_categoria'];   ?></h2>
 	<?php } ?>
	
	<?php
		$usuariosPainel = MySql::conectar()->prepare("SELECT DISTINCT tb_lojas.id, tb_lojas.nome_loja, tb_lojas.img_logo, tb_lojas.link_loja
			FROM tb_lojas, tb_categoria_lojas, tb_categoria WHERE tb_categoria_lojas.loja = tb_lojas.id AND tb_categoria_lojas.categoria = $id_categoria");
			$usuariosPainel->execute();
			$usuariosPainel = $usuariosPainel->fetchAll();
		?>
<style>

.button_logo_loja{
	background-color:white;
	vertical-align: middle;
	border: 0;
	height: 100px;
}
.box_content_home{
		background-color: white !important;
		text-align: left;
}

.botoes-categoria{ 
	vertical-align: top;   
    display: inline-block;      
    margin-bottom: 0px;    
    font-size: 13px;
    text-align: center;
    margin-right: 25px;     
    width: 24%;/*calc(22% - 50px);*/
    margin: auto; 
    padding-left: 10px;
    background-color: white;
}



@media screen and (max-width: 768px){
    
.button_logo_loja{
	vertical-align: middle;
	border: 0;
	height:100px;
	
	
}
.button_logo_loja img{
    width:100%;
}
    
.box_content_home{
    padding-left:10px;
    padding-right:10px;
    text-align: center;
}

.botoes-categoria{ 
    vertical-align: top;   
    display: inline-block;      
    margin-bottom: 0px;    
    font-size: 13px;
    text-align: center;
    margin-right: 0px;     
    width: 46%;
    padding-left:10px;
    padding-right:10px;
    
}

}
</style>
	<?php
	
	
		foreach ($usuariosPainel as $key => $value) {?>
		<div class="botoes-categoria"> 



		<form method="post" action="<?php echo INCLUDE_PATH_PLATAFORMA ?>loja">
			<input type="hidden" name="idloja" value="<?php echo $value['id'];?>">			

			<button class="button_logo_loja" type="submit" value=""><img src="<?php echo INCLUDE_PATH_PLATAFORMA?>uploads/<?php echo $value['img_logo']?>" /></button>
		</form>


	</div>

<?php } ?>

</div><!--box-content-->


