<div class="box-content">
	<h2> Cadastrar Slides</h2>

	<form method="post" enctype="multipart/form-data">

		<?php
			if(isset($_POST['acao'])){

			$imagem = $_FILES['imagem'];
			$imagem = Plataforma::uploadFile($imagem);

			$loja = $_POST['loja'];			
			
			$inserirSlide = MySql::conectar()->prepare("INSERT INTO tb_slides VALUES (null, '$imagem', '$loja')");
			$inserirSlide->execute();				
			Plataforma::alert('sucesso','Slide inserido com sucesso!');

			}
	
			$selecionaLoja = MySql::conectar()->prepare("SELECT * FROM tb_lojas ");
			$selecionaLoja->execute();
			$selecionaLoja = $selecionaLoja->fetchAll();
		?>
		
			<label>Selecione a loja:</label>
			<select name="loja">
				<?php					
					foreach ($selecionaLoja as $key => $value) {?>										
						<option value="<?php echo $value['id'];?>"><?php echo $value['nome_loja'];?></option>				
				<?php } 
				?>
			</select>


			<div class="form-group">
			<label>Imagem do Slide:</label>
			<input type="file" name="imagem"/>

			<input type="submit" name="acao" value="Cadastrar!">

	</form>

</div><!--box-content-->






