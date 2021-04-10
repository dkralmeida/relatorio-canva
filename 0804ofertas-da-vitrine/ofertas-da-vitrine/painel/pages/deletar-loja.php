	<div class="box-content">
	<h2><i class="fas fa-list-alt"></i> DELETAR LOJAS</h2>

	<?php

			
	if(isset($_POST['acao'])){

		echo $id_loja = $_POST['id_loja'];

				$deletaLoja = MySql::conectar()->prepare("DELETE FROM `tb_lojas` WHERE id = $id_loja"); 
				$deletaLoja->execute();			
				$deletaUsusario = MySql::conectar()->prepare("DELETE FROM `tb_usuarios` WHERE loja = $id_loja"); 
				$deletaUsusario->execute();		

				Plataforma::alert('sucesso','Loja deletada com sucesso!'); 
		


	}
	

	$listarLojas = MySql::conectar()->prepare("SELECT * FROM tb_lojas"); 
	$listarLojas->execute();
	$listarLojas = $listarLojas->fetchAll();

	foreach ($listarLojas as $key => $value) { ?>

		
		 <?php echo $value['nome_loja']; ?>


		<form method="post" enctype="multipart/form-data">

			<input type="hidden" name="id_loja" value="<?php echo $value['id']; ?>">
			<input type="submit" name="acao" value="Excluir">
		</form>

			<!--<i class="fas fa-minus-circle"></i>-->


		

	<?php }	?>

</div>






