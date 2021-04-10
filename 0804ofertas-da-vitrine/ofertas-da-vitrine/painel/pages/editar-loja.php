	<div class="box-content">ATUALIZAR LOJA</h2>



<style>
.accordion_atualizar_loja {
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

.active, .accordion_atualizar_loja:hover {
  background-color: #ccc; 
}

.panel_atualizar_loja {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}

.imagem_logo_loja{
	width: 50px;
	height: auto;
}
</style>

<?php
			if(isset($_POST['acao_atualizar'])){	
			
			$id_loja = $_POST['id_loja'];
			$nome_loja = $_POST['nome_loja'];
			$telefone = $_POST['telefone'];
			$site = $_POST['site'];
			$email = $_POST['email'];
			$instagram = $_POST['instagram'];
			$facebook = $_POST['facebook'];
			$atendimento = $_POST['atendimento'];
			$sobre_paragrafo1 = $_POST['sobre_paragrafo1'];
			$sobre_paragrafo2 = $_POST['sobre_paragrafo2'];
			
			$mantem_img_logo = $_POST['mantem_img_logo'];

			//$novaloja = str_replace(' ', '', $nome_loja);

			//$string = $novaloja;
			//function tirarAcentos($string){
    		//return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$string);
			//}
			//$lojasemacentos = tirarAcentos($string);

			//$novaloja = strtolower($lojasemacentos);	

			//$novaloja = $novaloja.'-loja';
			//$ranking = '0';
			$img_logo = $_FILES['img_logo'];
			

			$mantem_img_logo = $_POST['mantem_img_logo'];

			$img_logo = Plataforma::uploadFile($img_logo);

			if($img_logo == ''){
				$img_logo = $mantem_img_logo;
			}

			

			



				$atualizarLoja = MySql::conectar()->prepare("UPDATE `tb_lojas` SET `nome_loja`='$nome_loja', `img_logo`= '$img_logo',  `telefone`= '$telefone', 
					`site`= '$site', `email`= '$email', `instagram`= '$instagram', `facebook`= '$facebook', `atendimento`= '$atendimento', `sobre_paragrafo1`= '$sobre_paragrafo1', `sobre_paragrafo2`= '$sobre_paragrafo2' WHERE id = '$id_loja'");
				$atualizarLoja->execute();				
				Plataforma::alert('sucesso','Loja atualizada com sucesso!');

					//inserir categoria na tb_categoria_lojas
				
				//$categoria_cadastrada = MySql::conectar()->prepare("SELECT * FROM `tb_lojas` WHERE `nome_loja`= '$nome_loja';");
				//$categoria_cadastrada->execute();
				//foreach ($categoria_cadastrada as $key => $value) {
				//	$idloja =$value['id']; 
				//}

				//$inserirCategoria = MySql::conectar()->prepare("INSERT INTO tb_categoria_lojas VALUES (null, $idcategoria, $idloja )");
				//$inserirCategoria ->execute();		
	
	
			
			}
		?>



<?php
	$selecionarLoja = MySql::conectar()->prepare("SELECT * FROM tb_lojas ");
	$selecionarLoja->execute();
	$selecionarLoja = $selecionarLoja->fetchAll();
	foreach ($selecionarLoja as $key => $value) {?>		


<button class="accordion_atualizar_loja"> <img class="imagem_logo_loja" src="../uploads/<?php echo $value['img_logo']; ?>"><?php echo $value['nome_loja'];?> </button>
<div class="panel_atualizar_loja">

  <form method="post" enctype="multipart/form-data">
 	<input type="hidden" name="id_loja" value="<?php echo $value['id']; ?>">

 	<label>Nome da loja:</label>
			<input type="text" name="nome_loja" value="<?php echo $value['nome_loja'];?>">

			
		

		<?php
			$usuariosPainel = MySql::conectar()->prepare("SELECT * FROM tb_categoria ");
			$usuariosPainel->execute();
			$usuariosPainel = $usuariosPainel->fetchAll();
		?>
		
		
			<label>Logo da loja:</label>

			
			<input type="file" name="img_logo"  />
			<input type="hidden" name="mantem_img_logo" value="<?php echo $value['img_logo'];?>">


			<label>Sobre (parágrafo 1):</label>
			<textarea rows="5" cols="30" name="sobre_paragrafo1" ><?php echo $value['sobre_paragrafo1'];?></textarea>

			<label>Sobre (parágrafo 2):</label>
			<textarea rows="5" cols="30" name="sobre_paragrafo2"><?php echo $value['sobre_paragrafo2'];?></textarea>

			<label>Telefone:</label>
			<input type="text" name="telefone" value="<?php echo $value['telefone'];?>">

			<label>Site:</label>
			<input type="text" name="site" value="<?php echo $value['site'];?>">

			<label>E-mail:</label>
			<input type="text" name="email" value="<?php echo $value['email'];?>">

			<label>Instagram:</label>
			<input type="text" name="instagram" value="<?php echo $value['instagram'];?>">

			<label>Facebook:</label>
			<input type="text" name="facebook" value="<?php echo $value['facebook'];?>">	

			<label>Atendimento:</label>
			<input type="text" name="atendimento" value="<?php echo $value['atendimento'];?>">		

		<div class="form-group">						
			<input type="submit" name="acao_atualizar" value="Atualizar">
		</div><!--form-group-->

 </form>

</div>


<?php  } ?>

<script>
var acc = document.getElementsByClassName("accordion_atualizar_loja");
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













