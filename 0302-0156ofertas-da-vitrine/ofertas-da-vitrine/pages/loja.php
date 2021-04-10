
<?php header('Cache-Control: no cache'); //para voltar sem ter que carregar formulário ?>
<?php 
	$id_loja = $_POST['idloja'];
	$_SESSION['id'] = $id_loja;
?>

<div class="box-content">	

<?php 

include('menu.php');
	 
		$listarProdutos = MySql::conectar()->prepare("SELECT * from tb_produtos WHERE loja = '$id_loja' ");
			$listarProdutos->execute();
			$listarProdutos = $listarProdutos->fetchAll();
		?>


<?php
		foreach ($listarProdutos as $key => $value) {?>
<div class="lista-produtos">
			<img style="height:180px;"  src="<?php echo INCLUDE_PATH_PLATAFORMA?>uploads/<?php echo $value['foto']?>" />

<div class="descricao_produto"><?php echo $value['produto']?></div>

<?php 





$de = $value['de'];

    if($de != '0'){?>


<div class="group-loja">
<div class="desc_de" >De:</div>
<div class="de_valor">R$ <?php $de = $value['de']; echo number_format($de, 2, ',', '.'); ?></div>
</div>

<div class="group-loja">
	 	<div class="desc_por">Por: </div>
    	<div class="por_valor"> R$ <?php $de = $value['por']; echo number_format($de, 2, ',', '.'); ?></div>
   
</div>	


<?php } ?>






<form method="post" action="<?php echo INCLUDE_PATH_PLATAFORMA ?>produto">
	<input type="hidden" name="id_produto" value="<?php echo $value['id'];?>">
	<button  class="maisinformacoes" type="submit" value="">mais informações</button>
</form>


<?php
$link_site = $value['link_site'];

if($link_site != ''){?>
    <a class="vernosite" target="_blank" href="<?php echo $value['link_site']?>">VER NO SITE</a>

<?php }
			
?>
		

	</div>

<?php } ?>

</div><!--box-content-->
