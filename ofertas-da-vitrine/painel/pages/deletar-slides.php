	<div class="box-content">
	<h2><i class="fas fa-list-alt"></i> DELETAR SLIDE</h2>

<?php

if(isset($_POST['acao_excluir'])){

		$id_slide = $_POST['id_slide'];

		$deletaSlide = MySql::conectar()->prepare("DELETE FROM `tb_slides` WHERE id_slide = $id_slide"); 
		$deletaSlide->execute();			

		Plataforma::alert('sucesso','Slide deletado com sucesso!'); 

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

	$selecionaSlides = MySql::conectar()->prepare("SELECT * FROM tb_slides WHERE tb_slides.id_loja = $id_loja ");
	$selecionaSlides->execute();
	$selecionaSlides = $selecionaSlides->fetchAll();


	


	foreach ($selecionaSlides as $key => $value) {?>

	<form method="post">

		<div> <?php echo $value['imagem']; ?>
		<input type="hidden" name="id_slide" value="<?php echo $value['id_slide']; ?>">
		<input type="submit" name="acao_excluir" value="Excluir">

	</form>


		<?php }	
		


	}
	
?>




</div>









