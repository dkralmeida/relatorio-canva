	<div class="box-content">
	<h2><i class="fas fa-list-alt"></i> DELETAR PRODUTO</h2>

<?php

if(isset($_POST['acao_excluir'])){

		$id_produto = $_POST['id_produto'];

		$deletaProduto = MySql::conectar()->prepare("DELETE FROM `tb_produtos` WHERE id = $id_produto"); 
		$deletaProduto->execute();			

		Plataforma::alert('sucesso','Produto deletado com sucesso!'); 

	}

?>



<?php
	$selecionarLoja = MySql::conectar()->prepare("SELECT * FROM tb_lojas ");
	$selecionarLoja->execute();
	$selecionarLoja = $selecionarLoja->fetchAll();
?>

<form method="post">
		
			<label>Loja:</label>
			<select name="id_loja">
				<?php
					
				foreach ($selecionarLoja as $key => $value) {?>									
					<option value="<?php echo $value['id'];?>"><?php echo $value['nome_loja'];?></option>			
					

<?php } 
				?>
			</select>
		
	<input type="submit" name="acao" value="Buscar Loja">
	</form>

	<?php

			
	if(isset($_POST['acao'])){

	$id_loja = $_POST['id_loja'];

	$selecionaProdutos = MySql::conectar()->prepare("SELECT * FROM tb_produtos WHERE tb_produtos.loja = $id_loja ");
	$selecionaProdutos->execute();
	$selecionaProdutos = $selecionaProdutos->fetchAll();


	


	foreach ($selecionaProdutos as $key => $value) {?>

	<form method="post">

		<div> <?php echo $value['produto']; ?>
		<input type="hidden" name="id_produto" value="<?php echo $value['id']; ?>">
		<input type="submit" name="acao_excluir" value="Excluir">

	</form>


		<?php }	
		


	}
	
?>




</div>









