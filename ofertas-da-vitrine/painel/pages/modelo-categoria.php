<div class="box-content">
	
	<?php
	
	//echo $_SESSION['id'];

	//echo $idcat = $_POST['idcat'];

	$id_categoria =  $_POST['idcat'];



	$categoria = Plataforma::carregarCategoria($id_categoria);
		foreach ($categoria as $key => $value) {
	?>		
		<h2><i class="fa fa-pencil"></i> <?php  echo $value['nome_categoria']; ?></h2>
 	<?php } ?>
	
	<?php
		$usuariosPainel = MySql::conectar()->prepare("SELECT DISTINCT tb_lojas.id, tb_lojas.nome_loja, tb_lojas.img_logo, tb_lojas.link_loja
			FROM tb_lojas, tb_categoria_lojas, tb_categoria WHERE tb_categoria_lojas.loja = tb_lojas.id AND tb_categoria_lojas.categoria = $id_categoria");
			$usuariosPainel->execute();
			$usuariosPainel = $usuariosPainel->fetchAll();
		?>

	<?php
		foreach ($usuariosPainel as $key => $value) {?>
		<div class="logo-loja" >
		<?php //echo $_SESSION['idloja'] = $value['id']; ?>
		

		<!--<a href="<?php //echo INCLUDE_PATH_PLATAFORMA ?><?php// echo $value['link_loja']?>"><img style="height:150px;"  src="<?php //echo INCLUDE_PATH_PLATAFORMA?>uploads/<?php //echo $value['img_logo']?>" /></a>-->



		<form method="post" action="<?php echo INCLUDE_PATH_PLATAFORMA ?><?php echo $value['link_loja']?>">
			<input type="hidden" name="idloja" value="<?php echo $value['id'];?>">
			

			<button class="button-icones" type="submit" value=""><img style="height:150px;"  src="<?php echo INCLUDE_PATH_PLATAFORMA?>uploads/<?php echo $value['img_logo']?>" /></button>

			
		</form>


	</div>

<?php } ?>

</div><!--box-content-->