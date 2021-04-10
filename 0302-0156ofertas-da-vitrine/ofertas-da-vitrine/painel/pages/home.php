<?php
	$usuariosOnline = Painel::listarUsuariosOnline();

	$pegarVisitasTotais = MySql::conectar()->prepare("SELECT * FROM `tb_admin.visitas`");
	$pegarVisitasTotais->execute();

	$pegarVisitasTotais = $pegarVisitasTotais->rowCount();

	$pegarVisitasHoje = MySql::conectar()->prepare("SELECT * FROM `tb_admin.visitas` WHERE dia = ?");
	$pegarVisitasHoje->execute(array(date('Y-m-d')));

	$pegarVisitasHoje = $pegarVisitasHoje->rowCount();


?>

<script src="https://kit.fontawesome.com/e2fe36d7e4.js" crossorigin="anonymous"></script>

<div class="box-content w100">
		<h2><i class="fa fa-home"></i> Painel de Controle - <?php echo NOME_EMPRESA ?></h2>
</div>
<div class="box-content">
	<h2><i class="far fa-list-alt"></i>  Categorias Cadastradas</h2>

	<?php

	$listarCategorias = MySql::conectar()->prepare("SELECT * FROM tb_categoria"); 
	$listarCategorias->execute();
	$listarCategorias = $listarCategorias->fetchAll();

	foreach ($listarCategorias as $key => $value) { ?>

		<div class="lista-categorias"><i class="<?php echo $value['icone']; ?>"></i> <?php echo $value['nome_categoria']; ?></div>
		

	<?php }	?>

</div>



<div class="clear"></div>