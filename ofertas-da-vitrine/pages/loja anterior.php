
<?php header('Cache-Control: no cache'); ?>
<div class="box-content">

<?php 
$id_loja =  $_POST['idloja'];?>

<?php include('menu.php'); ?>

<?php include('slides_loja.php');?>

<?php	    
	    $_SESSION['id'] = $id_loja;
	 
		$listarProdutos = MySql::conectar()->prepare("SELECT * from tb_produtos WHERE loja = '$id_loja' ");
			$listarProdutos->execute();
			$listarProdutos = $listarProdutos->fetchAll();
		?>


<?php
		foreach ($listarProdutos as $key => $value) {?>
<div class="lista-produtos">
			<img style="height:180px;"  src="<?php echo INCLUDE_PATH_PLATAFORMA?>uploads/<?php echo $value['foto']?>" />

<div class="descricao_produto"><?php echo $value['produto']?></div>


<div class="group-loja">
<div class="desc_de" >De:</div>
<div class="de_valor">R$ <?php $de = $value['de']; echo number_format($de, 2, ',', '.'); ?></div>
</div>

<div class="group-loja">
	 	<div class="desc_por">Por: </div>
    	<div class="por_valor"> R$ <?php $de = $value['por']; echo number_format($de, 2, ',', '.'); ?></div>
   
</div>	


<form method="post" action="<?php echo INCLUDE_PATH_PLATAFORMA ?>produto">
	<input type="hidden" name="id_produto" value="<?php echo $value['id'];?>">
	<button  class="maisinformacoes" type="submit" value="">mais informações</button>
</form>
		

	</div>

<?php } ?>

</div><!--box-content-->
