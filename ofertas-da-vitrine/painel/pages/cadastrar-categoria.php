
<div class="group">
    <div id="DivEsquerda">
    	
	<div class="box-content">	
		<h2><i class="fas fa-folder-plus"></i>  Cadastrar Categoria</h2>
			<form method="post" enctype="multipart/form-data">
		<?php
			if(isset($_POST['acao'])){
		
			$nome_categoria = $_POST['nome_categoria'];


			$comparaCategoria = MySql::conectar()->prepare("SELECT * FROM tb_categoria WHERE nome_categoria = '$nome_categoria' "); 
			$comparaCategoria->execute();
			$comparaCategoria = $comparaCategoria->fetchAll();

			foreach ($comparaCategoria as $key => $value) {
				$resultado = $value['nome_categoria'];
			}

			if (isset($resultado)) {
    			Plataforma::alert('erro','Essa categoria já está cadastrada!');
    			//echo $resultado;
			}else{			

			//$nome_categoria = $_POST['nome_categoria'];
			$icone = $_POST['icone'];


			$novacategoria = str_replace(' ', '', $nome_categoria);
			$novacategoria = strtolower($novacategoria);


			$novacategoria = 'categoria-'.$novacategoria;

			$string =$novacategoria;
			function tirarAcentos($string){
    		return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$string);
			}
			$lojasemacentos = tirarAcentos($string);

			$novacategoria = strtolower($lojasemacentos);

			
			if(file_exists('../plataforma/pages/'.$novacategoria.'.php')){		
				
				Plataforma::alert('erro','Já existe um arquivo com esse nome!');

			}else{			


				$inserirCategoria = MySql::conectar()->prepare("INSERT INTO tb_categoria VALUES (null, '$nome_categoria', '$novacategoria', '$icone')");
				$inserirCategoria->execute();				
				Plataforma::alert('sucesso','Categoria cadastrada com sucesso!');  				

				}
			
			}
		}
		
?>


<label>Categoria:</label>
	<input type="text" name="nome_categoria">
	<label>Ícone:</label>			

	<div class="group">
    <div id="DivLeft-icone"><input type="text" name="icone"></div>
    <div id="DivRight-icone">    	
    	<a href="https://fontawesome.com/icons?d=gallery&p=2&m=free" target="_blank" class="icone-buscar">
    		<i class="fas fa-search"></i> Buscar ícone
    	</a>
    </div>

	</div>


		<div class="form-group">						
			<input type="submit" name="acao" value="Cadastrar!">
		</div><!--form-group-->

	</form>

</div><!--box-content-->

    </div>
    <div id="DivDireita">
    	
    	<div class="box-content">
	<h2><i class="fas fa-list-alt"></i> Categorias</h2>

	<?php

	$listarCategorias = MySql::conectar()->prepare("SELECT * FROM tb_categoria"); 
	$listarCategorias->execute();
	$listarCategorias = $listarCategorias->fetchAll();

	foreach ($listarCategorias as $key => $value) { ?>

		<div class="lista-categorias">
			<i class="<?php echo $value['icone']; ?>"></i> <?php echo $value['nome_categoria']; ?>

			<!--<i class="fas fa-minus-circle"></i>-->


	</div>		

	<?php }	?>

</div>
    </div>
</div>











