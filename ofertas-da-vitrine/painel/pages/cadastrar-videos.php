<div class="box-content">
	<h2> <i class="fas fa-store"></i>  Cadastrar Loja</h2>

	<form method="post" enctype="multipart/form-data">

		<?php
			if(isset($_POST['acao'])){	
			

			$nome_loja = $_POST['nome_loja'];
			$telefone = $_POST['telefone'];
			$site = $_POST['site'];
			$email = $_POST['email'];
			$instagram = $_POST['instagram'];
			$facebook = $_POST['facebook'];
			$atendimento = $_POST['atendimento'];
			$sobre_paragrafo1 = $_POST['sobre_paragrafo1'];
			$sobre_paragrafo2 = $_POST['sobre_paragrafo2'];
			

			$novaloja = str_replace(' ', '', $nome_loja);

			$string = $novaloja;
			function tirarAcentos($string){
    		return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$string);
			}
			$lojasemacentos = tirarAcentos($string);

			$novaloja = strtolower($lojasemacentos);	

			$novaloja = $novaloja.'-loja';
			$ranking = '0';
			$img_logo = $_FILES['img_logo'];
			$idcategoria = $_POST['categoria'];

			$img_logo = Plataforma::uploadFile($img_logo);

			if(file_exists('../plataforma/pages/'.$novaloja.'.php')){		
				
				Plataforma::alert('erro','Já existe um arquivo com esse nome!');

			}else{

				$inserirNovaLoja = MySql::conectar()->prepare("INSERT INTO tb_lojas VALUES (null, '$nome_loja', '$img_logo', '$novaloja', '$ranking', '$telefone', '$site', '$email', '$instagram', '$facebook', '$atendimento', '$sobre_paragrafo1', '$sobre_paragrafo2')");
				$inserirNovaLoja->execute();				
				Plataforma::alert('sucesso','Loja cadastrada com sucesso!');

					//inserir categoria na tb_categoria_lojas
				
				$categoria_cadastrada = MySql::conectar()->prepare("SELECT * FROM `tb_lojas` WHERE `nome_loja`= '$nome_loja';");
				$categoria_cadastrada->execute();
				foreach ($categoria_cadastrada as $key => $value) {
					$idloja =$value['id']; 
				}

				$inserirCategoria = MySql::conectar()->prepare("INSERT INTO s VALUES (null, $idcategoria, $idloja )");
				$inserirCategoria ->execute();		
	
	}
			
			}
		?>

		



			<div class="form-group">
			<label>Logo da loja:</label>
			<input type="file" name="img_logo"/>

			<label>Sobre (parágrafo 1):</label>
			<textarea rows="5" cols="30" name="sobre_paragrafo1"></textarea>

			<label>Sobre (parágrafo 2):</label>
			<textarea rows="5" cols="30" name="sobre_paragrafo2"></textarea>

			<label>Telefone:</label>
			<input type="text" name="telefone">

			<label>Site:</label>
			<input type="text" name="site">

			<label>E-mail:</label>
			<input type="text" name="email">

			<label>Instagram:</label>
			<input type="text" name="instagram">

			<label>Facebook:</label>
			<input type="text" name="facebook">	

			<label>Atendimento:</label>
			<input type="text" name="atendimento">		

		<div class="form-group">						
			<input type="submit" name="acao" value="Cadastrar!">
		</div><!--form-group-->

	</form>



</div><!--box-content-->






