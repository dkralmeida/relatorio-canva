


<?php
	$selecionarLoja = MySql::conectar()->prepare("SELECT * FROM tb_lojas ");
	$selecionarLoja->execute();
	$selecionarLoja = $selecionarLoja->fetchAll();

	foreach ($selecionarLoja as $key => $value) {		
		echo $value['id']; 
		echo $value['nome_loja']; 

	}

?>
	

<?php
	$selecionarProduto = MySql::conectar()->prepare("SELECT * FROM tb_produtos ");
	$selecionarProduto->execute();
	$selecionarProduto = $selecionarProduto->fetchAll();

	foreach ($selecionarProduto as $key => $value) {		
		 $value['id']; 
		 $value['produto']; 


	}

?>

<?php
	$selecionarCurtidas = MySql::conectar()->prepare("SELECT * FROM tb_produtos WHERE id= 41 ");
	$selecionarCurtidas->execute();
	$selecionarCurtidas = $selecionarCurtidas->fetchAll();

	foreach ($selecionarCurtidas as $key => $value) {		
		$value['id']; 
		$value['produto']; 
		$curtida_atual = $value['curtidas']; 


	}

?>




<form method="post">

	<?php
			if(isset($_POST['acao'])){
				$curtida = $curtida_atual + 1;	
				$atualizarCurtida = MySql::conectar()->prepare("UPDATE `tb_produtos` SET curtidas = $curtida WHERE id = 41 ");
				$atualizarCurtida->execute();
			}
	?>
	<button type="submit" name="acao"><i class="far fa-heart"></i></button>
</form>

