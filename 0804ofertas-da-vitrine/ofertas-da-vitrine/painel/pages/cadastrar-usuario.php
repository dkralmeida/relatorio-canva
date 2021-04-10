<?php
	verificaPermissaoPagina(2);
?>
<div class="box-content">
	<h2> <i class="fas fa-users"></i>  Cadastrar Usuários</h2>

	<form method="post" enctype="multipart/form-data">

		<?php
			if(isset($_POST['acao'])){

			$user = $_POST['user'];

			$comparaUsuario = MySql::conectar()->prepare("SELECT * FROM `tb_usuarios` WHERE user = '$user' "); 
			$comparaUsuario->execute();
			$comparaUsuario = $comparaUsuario->fetchAll();	

			foreach ($comparaUsuario as $key => $value) {
				$resultado = $value['user'];
			}

			if (isset($resultado)) {
    			Plataforma::alert('erro','Essa categoria já está cadastrada!');
    			//echo $resultado;
			}else{

				$password = $_POST['password'];				
				$img = $_FILES['img'];
				$nome = $_POST['nome'];
				$cargo = $_POST['cargo'];
				$loja = $_POST['loja'];			


				$img = Painel::uploadFile($img);
				$inserirUsuario = MySql::conectar()->prepare("INSERT INTO `tb_usuarios`  VALUES (null, '$user', '$password', '$img', '$nome', '$cargo', '$loja')");
				$inserirUsuario->execute();				
				Plataforma::alert('sucesso','Loja cadastrada com sucesso!');	

			}					
	
		}
			
		?>


		<div class="form-group">

			<label>Nome</label>
			<input type="text" name="nome">
			
			<label>E-mail:</label>
			<input type="text" name="user">

			<label>Senha</label>
			<input type="text" name="password">

			<label>Foto:</label>
			<input type="file" name="img"/>

			<label>Cargo:</label>
			<select name="cargo">

				<option value="2">Administrador do Sistema</option>
				<option value="1">Administrador da Loja</option>
				
			</select>


			<label>Loja:</label>

			<?php
				$lojas = MySql::conectar()->prepare("SELECT * FROM tb_lojas ");
				$lojas->execute();
				$lojas = $lojas->fetchAll();
		?>

			<select name="loja">
				<?php
					
					foreach ($lojas as $key => $value) {?>	
					<option value="0">Todas as lojas</option>							
					<option value="<?php echo $value['id'];?>"><?php echo $value['nome_loja'];?></option>			
				

		<?php } 
				?>
			</select>		

		<div class="form-group">						
			<input type="submit" name="acao" value="Cadastrar!">
		</div><!--form-group-->

	</form>
</div><!--box-content-->






