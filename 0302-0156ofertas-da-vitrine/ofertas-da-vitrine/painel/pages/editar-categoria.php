	<div class="box-content">
	<h2><i class="fas fa-list-alt"></i> EDITAR CATEGORIA</h2>

	<?php

			
	if(isset($_POST['acao'])){

		$id_categoria = $_POST['id_categoria'];
		$nome_categoria = $_POST['nome_categoria'];
		$icone = $_POST['icone'];
			

		$atualizaCategoria = MySql::conectar()->prepare("UPDATE `tb_categoria` SET `nome_categoria`='$nome_categoria', `icone`= '$icone' WHERE id = '$id_categoria'"); 
		$atualizaCategoria->execute();				

		Plataforma::alert('sucesso','Categoria atualizada com sucesso!');  		


	}
	

	$listarCategorias = MySql::conectar()->prepare("SELECT * FROM tb_categoria"); 
	$listarCategorias->execute();
	$listarCategorias = $listarCategorias->fetchAll();

	foreach ($listarCategorias as $key => $value) { ?>

		<div class="lista-categorias">
			<i class="<?php echo $value['icone']; ?>"></i> <?php echo $value['nome_categoria']; ?>


		<form method="post" enctype="multipart/form-data">



			<input type="hidden" name="id_categoria" value="<?php echo $value['id']; ?>">
			<input type="input" name="nome_categoria" value="<?php echo $value['nome_categoria']; ?>">
			<input type="input" name="icone" value="<?php echo $value['icone']; ?>">
			<input type="submit" name="acao" value="Atualizar">
		</form>			


	</div>		

	<?php }	?>

</div>






