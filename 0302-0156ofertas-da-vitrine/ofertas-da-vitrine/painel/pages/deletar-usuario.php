	<div class="box-content">
	<h2><i class="fas fa-list-alt"></i> DELETAR USUÁRIO</h2>

<?php

if(isset($_POST['acao_excluir'])){

		$id_usuario = $_POST['id_usuario'];

		$deletaUsuario = MySql::conectar()->prepare("DELETE FROM `tb_usuarios` WHERE id = $id_usuario"); 
		$deletaUsuario->execute();			

		Plataforma::alert('sucesso','Usuário deletado com sucesso!'); 

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

	$selecionaUsuario = MySql::conectar()->prepare("SELECT * FROM tb_usuarios WHERE tb_usuarios.loja = $id_loja ");
	$selecionaUsuario->execute();
	$selecionaUsuario = $selecionaUsuario->fetchAll();


	


	foreach ($selecionaUsuario as $key => $value) {?>

	<form method="post">

		<div> <?php echo $value['user']; ?>
		<input type="hidden" name="id_usuario" value="<?php echo $value['id']; ?>">
		<input type="submit" name="acao_excluir" value="Excluir">

	</form>


		<?php }	
		


	}
	
?>




</div>









