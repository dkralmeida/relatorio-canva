	<div class="box-content">ATUALIZAR PRODUTO</h2>

<style>
.accordion_atualizar_produto {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion_atualizar_produto:hover {
  background-color: #ccc; 
}

.panel_atualizar_produto {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}

.imagem_produto{
	width: 50px;
	height: auto;
}
</style>

<?php

if(isset($_POST['acao_atualizar'])){

		$id_produto = $_POST['id_produto'];
		$produto = $_POST['produto'];		
		$de = $_POST['de'];
		$por = $_POST['por'];

		$de = str_replace(['.',','],'.', $de);			
		$por = str_replace(['.',','],'.', $por);
		$link_site = $_POST['link_site'];

		$subtitulo = $_POST['subtitulo'];
		$paragrafo1 = $_POST['paragrafo1'];
		$paragrafo2 = $_POST['paragrafo2'];
		$paragrafo3 = $_POST['paragrafo3'];
		$paragrafo4 = $_POST['paragrafo4'];
		$paragrafo5 = $_POST['paragrafo5'];		
	


			$foto = $_FILES['foto'];			

			$mantem_foto = $_POST['mantem_foto'];

			$foto = Plataforma::uploadFile($foto);

			if($foto == ''){
				$foto = $mantem_foto;
			}



			$foto2 = $_FILES['foto2'];			

			$mantem_foto2 = $_POST['mantem_foto2'];

			$foto2 = Plataforma::uploadFile($foto2);

			if($foto2 == ''){
				$foto2 = $mantem_foto2;
			}



			$foto3 = $_FILES['foto3'];			

			$mantem_foto3 = $_POST['mantem_foto3'];

			$foto3 = Plataforma::uploadFile($foto3);

			if($foto3 == ''){
				$foto3 = $mantem_foto3;
			}


			$foto4 = $_FILES['foto4'];			

			$mantem_foto4 = $_POST['mantem_foto4'];

			$foto4 = Plataforma::uploadFile($foto4);

			if($foto4 == ''){
				$foto4 = $mantem_foto4;
			}

			$foto5 = $_FILES['foto5'];			

			$mantem_foto5 = $_POST['mantem_foto5'];

			$foto5 = Plataforma::uploadFile($foto5);

			if($foto5 == ''){
				$foto5 = $mantem_foto5;
			}

	
			/*if($foto != ''){
				$foto = Plataforma::uploadFile($foto);
			}else{
				echo $foto = $mantem_foto;	
			}


			if($foto2 != ''){
				$foto2 = Plataforma::uploadFile($foto2);
			}else{
				$foto2 = $mantem_foto2;	
			}

			if($foto3 != ''){
				$foto3 = Plataforma::uploadFile($foto3);
			}else{
				$foto3 = $mantem_foto3;	
			}

			if($foto4 != ''){
				$foto4 = Plataforma::uploadFile($foto4);
			}else{
				$foto4 = $mantem_foto4;	
			}

			if($foto5 != '' ){
				$foto5 = Plataforma::uploadFile($foto5);
			}else{
				$foto5 = $mantem_foto5;	
			}*/
	



		$atualizarProduto = MySql::conectar()->prepare("UPDATE `tb_produtos` SET `produto`='$produto',  `de` = '$de', `por`= '$por', `foto` = '$foto',  `foto2` = '$foto2',  `foto3` = '$foto3',  `foto4` = '$foto4',  `foto5` = '$foto5',  `subtitulo` = '$subtitulo' ,  `paragrafo1` = '$paragrafo1', `paragrafo2` = '$paragrafo2', `paragrafo3` = '$paragrafo3', `paragrafo4` = '$paragrafo4' ,`paragrafo5` = '$paragrafo5', `link_site` = '$link_site'  WHERE id = '$id_produto'"); 
		$atualizarProduto->execute();			

		Plataforma::alert('sucesso','Produto atualizado com sucesso!'); 

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

<button class="accordion_atualizar_produto"><img class="imagem_produto" src="../uploads/<?php echo $value['foto']; ?>"><?php echo $value['produto']; ?></button>


<div class="panel_atualizar_produto">
 	 		
 		<form method="post" enctype="multipart/form-data">
 			<input type="hidden" name="id_produto" value="<?php echo $value['id']; ?>">
		<label>Produto:</label>
		<input type="text" name="produto" value="<?php echo $value['produto']; ?>">	

		<label>De:</label>		
		<input type="text" name="de" value="<?php echo $value['de']; ?>">

		<label>Por:</label>
		<input type="text" name="por" value="<?php echo $value['por']; ?>">

		<label>Link do produto no site:</label>
		<input type="text" name="link_site" value="<?php echo $value['link_site']; ?>">

		<label>Foto 1:</label>
		<input type="file" name="foto"/>
		<input type="hidden" name="mantem_foto" value="<?php echo $value['foto'];?>">

		<label>Foto 2:</label>
		<input type="file" name="foto2"/>
		<input type="hidden" name="mantem_foto2" value="<?php echo $value['foto2'];?>">

		<label>Foto 3:</label>
		<input type="file" name="foto3"/>
		<input type="hidden" name="mantem_foto3" value="<?php echo $value['foto3'];?>">

		<label>Foto 4:</label>
		<input type="file" name="foto4"/>
		<input type="hidden" name="mantem_foto4" value="<?php echo $value['foto4'];?>">

		<label>Foto 5:</label>
		<input type="file" name="foto5"/>
		<input type="hidden" name="mantem_foto5" value="<?php echo $value['foto5'];?>">


	<label>Frase de Destaque:</label>
	<input type="text" name="subtitulo" value="<?php echo $value['subtitulo'];?>">
	<label>Parágrafo 1:</label>
	<input type="text" name="paragrafo1" value="<?php echo $value['paragrafo1'];?>">
	<label>Parágrafo 2:</label>
	<input type="text" name="paragrafo2" value="<?php echo $value['paragrafo2'];?>">
	<label>Parágrafo 3:</label>
	<input type="text" name="paragrafo3" value="<?php echo $value['paragrafo3'];?>">
	<label>Parágrafo 4:</label>
	<input type="text" name="paragrafo4" value="<?php echo $value['paragrafo4'];?>">
	<label>Parágrafo 5:</label>
	<input type="text" name="paragrafo5" value="<?php echo $value['paragrafo5'];?>">

		

		<input type="submit" name="acao_atualizar" value="Atualizar">
 		</form>

 	
</div><!--panel_atualizar_produto-->


		<?php }	
		


	}
	
?>




</div>





<script>
var acc = document.getElementsByClassName("accordion_atualizar_produto");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>



