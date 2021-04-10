
<?php include('config.php'); ?>
<div class="box-content">
	<h2><i class="fas fa-list-ul"></i> Cadastrar Produto</h2>

	<form method="post" enctype="multipart/form-data">

		<?php
			if(isset($_POST['acao'])){	
			

			$produto = $_POST['produto'];
			$foto = $_FILES['foto'];
			$categoria = $_POST['categoria'];
			$loja = '107';
			$de = $_POST['de'];
			$por =$_POST['por'];
			


			$foto = Plataforma::uploadFile($foto);	

			$inserirProduto = MySql::conectar()->prepare("INSERT INTO tb_produtos VALUES (null, '$produto', '$categoria', '$loja', '$foto',  $de, $por)");
			$inserirProduto->execute();				
			Plataforma::alert('sucesso','Produto cadastrado com sucesso!');	
	
				}
			
			
		?>


		<div class="form-group">			
			<label>Produto:</label>
			<input type="text" name="produto">
		
			<label>Foto:</label>
			<input type="file" name="foto"/>

			<label>De:</label>
			<input type="text" name="de">

			<label>Por:</label>
			<input type="text" name="por">

		</div><!--form-group-->

		<?php
		$usuariosPainel = MySql::conectar()->prepare("SELECT * FROM tb_categoria ");
			$usuariosPainel->execute();
			$usuariosPainel = $usuariosPainel->fetchAll();
		?>
		<div class="form-group">
			<label>Categoria:</label>
			<select name="categoria">
				<?php
					
					foreach ($usuariosPainel as $key => $value) {?>
					<div class="logo-loja" >					
					<option value="<?php echo $value['id'];?>"><?php echo $value['nome_categoria'];?></option>			
				</div>

<?php } 
				?>
			</select>
		</div><!--form-group-->

		

		<div class="form-group">						
			<input type="submit" name="acao" value="Cadastrar!">
		</div><!--form-group-->
	</form>

</div><!--box-content-->






