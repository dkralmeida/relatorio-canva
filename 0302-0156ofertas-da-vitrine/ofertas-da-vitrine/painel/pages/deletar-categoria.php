	<div class="box-content">
	<h2><i class="fas fa-list-alt"></i> Categorias</h2>

	<?php

			
	if(isset($_POST['acao'])){

		$id_categoria = $_POST['id_categoria'];

			$verificaLoja = MySql::conectar()->prepare("SELECT * FROM `tb_categoria_lojas` ,  `tb_categoria` , `tb_lojas` WHERE tb_lojas.id = tb_categoria_lojas.loja AND tb_categoria_lojas.categoria = $id_categoria "); 
			$verificaLoja->execute();
			$verificaLoja = $verificaLoja->fetchAll();

			if(empty($verificaLoja)){

				$deletaCategoriaLoja = MySql::conectar()->prepare("DELETE FROM `tb_categoria_lojas` WHERE tb_categoria_lojas.categoria = $id_categoria"); 
				$deletaCategoriaLoja->execute();


				$deleteCategoria = MySql::conectar()->prepare("DELETE FROM `tb_categoria` WHERE id = $id_categoria"); 
				$deleteCategoria->execute();


				

				Plataforma::alert('sucesso','Categoria deletada com sucesso!');  		

				} 
			else if(isset($verificaLoja)){			
			
				Plataforma::alert('erro','Não foi possível excluir essa categoria pois, tem loja cadastrada nessa categoria!');  	
			}			


	}
	

	$listarCategorias = MySql::conectar()->prepare("SELECT * FROM tb_categoria"); 
	$listarCategorias->execute();
	$listarCategorias = $listarCategorias->fetchAll();

	foreach ($listarCategorias as $key => $value) { ?>

		<div class="lista-categorias">
			<i class="<?php echo $value['icone']; ?>"></i> <?php echo $value['nome_categoria']; ?>


		<form method="post" enctype="multipart/form-data">



			<input type="hidden" name="id_categoria" value="<?php echo $value['id']; ?>">
			<input type="submit" name="acao" value="Excluir">
		</form>

			<!--<i class="fas fa-minus-circle"></i>-->


	</div>		

	<?php }	?>

</div>






