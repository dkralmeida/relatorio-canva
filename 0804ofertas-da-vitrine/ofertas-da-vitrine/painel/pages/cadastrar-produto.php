<div class="box-content">
	<h2><i class="fas fa-list-ul"></i> Cadastrar Produto</h2>

	<form method="post" enctype="multipart/form-data">

		<?php
			if(isset($_POST['acao'])){	
			

			$produto = $_POST['produto'];
			$foto = $_FILES['foto'];			
			$foto2 = $_FILES['foto2'];
			$foto3 = $_FILES['foto3'];
			$foto4 = $_FILES['foto4'];
			$foto5 = $_FILES['foto5'];
			$categoria = $_POST['categoria'];
			$loja = $_POST['id_loja'];

			$de = $_POST['de'];
			$por = $_POST['por'];
			$link_site = $_POST['link_site'];

			
			$de = str_replace(['.',','],'.', $de);			
			$por = str_replace(['.',','],'.', $por);

			

			$subtitulo = $_POST['subtitulo'];
			$paragrafo1 = $_POST['paragrafo1'];
			$paragrafo2 = $_POST['paragrafo2'];
			$paragrafo3 = $_POST['paragrafo3'];
			$paragrafo4 = $_POST['paragrafo4'];
			$paragrafo5 = $_POST['paragrafo5'];
			$curtidas = '0';
			
			$foto = Plataforma::uploadFile($foto);	

			if($foto2 != ''){
				$foto2 = Plataforma::uploadFile($foto2);
			}else{
				$foto2 = '';	
			}

			if($foto3 != ''){
				$foto3 = Plataforma::uploadFile($foto3);
			}else{
				$foto3 = '';	
			}

			if($foto4 != ''){
				$foto4 = Plataforma::uploadFile($foto4);
			}else{
				$foto4 = '';	
			}

			if($foto5 != '' ){
				$foto5 = Plataforma::uploadFile($foto5);
			}else{
				$foto5 = '';	
			}

		
			

			$inserirProduto = MySql::conectar()->prepare("INSERT INTO tb_produtos VALUES (null, '$produto', '$categoria', '$loja', '$foto',  $de, $por, '$foto2', '$foto3', '$foto4', '$foto5', '$subtitulo', '$paragrafo1', '$paragrafo2', '$paragrafo3', '$paragrafo4', '$paragrafo5', '$curtidas', '$link_site')");
			$inserirProduto->execute();				
			Plataforma::alert('sucesso','Produto cadastrado com sucesso!');	
	
				}
			
			
		?>


<?php
	$selecionarLoja = MySql::conectar()->prepare("SELECT * FROM tb_lojas ");
	$selecionarLoja->execute();
	$selecionarLoja = $selecionarLoja->fetchAll();
?>
		<div class="form-group">
			<label>Loja:</label>
			<select name="id_loja">
				<?php
					
				foreach ($selecionarLoja as $key => $value) {?>									
					<option value="<?php echo $value['id'];?>"><?php echo $value['nome_loja'];?></option>			
					

<?php } 
				?>
			</select>
		</div><!--form-group-->


	<?php
		$usuariosPainel = MySql::conectar()->prepare("SELECT * FROM tb_categoria");

		//SELECT tb_categoria.nome_categoria FROM tb_lojas, tb_categoria_lojas, tb_categoria WHERE 
//tb_categoria_lojas.categoria = tb_categoria.id AND tb_categoria_lojas.loja = tb_lojas.id AND tb_lojas.id = $idloja");
			
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
			<label>Produto:</label>
			<input type="text" name="produto">
		
			<label>De:</label>
			<input type="text" name="de" value="0">

			<label>Por:</label>
			<input type="text" name="por" value="0">

			<label>Link do produto no site:</label>
			<input type="text" name="link_site">

		</div><!--form-group-->

	

		<label>Foto 1:</label>
		<input type="file" name="foto"/>

		<label>Foto 2:</label>
		<input type="file" name="foto2"/>

		<label>Foto 3:</label>
		<input type="file" name="foto3"/>

		<label>Foto 4:</label>
		<input type="file" name="foto4"/>

		<label>Foto 5:</label>
		<input type="file" name="foto5"/>


<div class="form-group">

	<label>Frase de Destaque:</label>
	<input type="text" name="subtitulo">
	<label>Parágrafo 1:</label>
	<input type="text" name="paragrafo1">
	<label>Parágrafo 2:</label>
	<input type="text" name="paragrafo2">
	<label>Parágrafo 3:</label>
	<input type="text" name="paragrafo3">
	<label>Parágrafo 4:</label>
	<input type="text" name="paragrafo4">
	<label>Parágrafo 5:</label>
	<input type="text" name="paragrafo5">

</div>


		<div class="form-group">						
			<input type="submit" name="acao" value="Cadastrar!">
		</div><!--form-group-->
	</form>

</div><!--box-content-->






