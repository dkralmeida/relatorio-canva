<?php
	if(isset($_GET['loggout'])){
		Painel::loggout();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Painel de Controle</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">	
	<link href="<?php echo INCLUDE_PATH_PAINEL ?>css/style.css" rel="stylesheet" />
	<script src="https://kit.fontawesome.com/e2fe36d7e4.js" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
	
		<style>
.accordion {
  background-color: rgba(0,0,0,0.0);
  color: #444;
  cursor: pointer;
  padding: 0px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
  border-bottom: 1px solid #424242;
}

.active, .accordion:hover {
  background-color: rgba(0,0,0,0.0);
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: rgba(0,0,0,0.0);
  overflow: hidden;
}

.cor_icone{
	color:#ab47bc;
}
</style>

</head>
<body>

<div class="menu">
	<div class="menu-wraper">
	<div class="box-usuario">
		<?php
			if($_SESSION['img'] == ''){
		?>
			<div class="avatar-usuario">
				<i class="fa fa-user"></i>
				
			</div><!--avatar-usuario-->
		<?php }else{ ?>
			<div class="imagem-usuario">
				<img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['img']; ?>" />
			</div><!--avatar-usuario-->
		<?php } ?>
		<div class="nome-usuario">
			<p><?php // echo $_SESSION['id']; ?></p><!--id_loja--->

			<p><?php echo $_SESSION['nome']; ?></p>
			<p><?php echo pegaCargo($_SESSION['cargo']); ?></p>

			<p><?php $cargo_usuario = $_SESSION['cargo']; ?></p>

			
		</div><!--nome-usuario-->
	</div><!--box-usuario-->





<?php

//	$verificaUsuario = Mysql::conectar()->prepare("SELECT * FROM `tb_usuarios`");
//	$verificaUsuario->execute();
//	$verificaUsuario = $verificaUsuario->fetchAll();

//	foreach ($verificaUsuario as $key => $value) {
//		$cargo = $value['cargo'];
//	}?>




<div class="items-menu">







<?php
if($cargo_usuario == 1){?>


<button class="accordion"><h2><i class="fas fa-sitemap cor_icone"></i> Produtos</h2></button>
<div class="panel">
	<div><a  href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-produto"><i class="fas fa-save cor_icone"></i>  Cadastrar Produto</a></div>
	<div><a  href="<?php echo INCLUDE_PATH_PAINEL ?>editar-produto"><i class="fas fa-edit cor_icone"></i>  Editar Produto</a></div>
	<div><a  href="<?php echo INCLUDE_PATH_PAINEL ?>deletar-produto"><i class="fas fa-minus-square cor_icone"></i>  Deletar Produto</a></div>
</div>


<button class="accordion"><h2><i class="fas fa-sliders-h cor_icone"></i>  slides</h2></button>
<div class="panel">
	<div><a  href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-slides"><i class="fas fa-save cor_icone"></i>  Cadastrar Slides</a></div>
	<div><a  href="<?php echo INCLUDE_PATH_PAINEL ?>deletar-slides"><i class="fas fa-minus-square cor_icone"></i>  Deletar Slides</a></div>
</div>	

<?php }else if ($cargo_usuario == 2){?>

			<button class="accordion"><h2><i class="fas fa-folder-plus cor_icone"></i> Categorias</h2></button>
<div class="panel">
 	<div><a  href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-categoria"> <i class="fas fa-save cor_icone"></i> Cadastrar Categoria</a></div>
	<div><a  href="<?php echo INCLUDE_PATH_PAINEL ?>editar-categoria"> <i class="fas fa-edit cor_icone"></i> Editar Categoria</a></div>
	<div><a  href="<?php echo INCLUDE_PATH_PAINEL ?>deletar-categoria"> <i class="fas fa-minus-square cor_icone"></i> Deletar Categoria</a></div>

</div>

<button class="accordion"><h2><i class="fas fa-store cor_icone"></i> Lojas</h2></button>
<div class="panel">
  	<div><a  href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-nova-loja"> <i class="fas fa-save cor_icone"></i></i> Cadastrar Loja</a></div>
	<div><a  href="<?php echo INCLUDE_PATH_PAINEL ?>editar-loja"> <i class="fas fa-edit cor_icone"></i> Editar Loja</a></div>
	<div><a  href="<?php echo INCLUDE_PATH_PAINEL ?>deletar-loja"> <i class="fas fa-minus-square cor_icone"></i> Deletar Loja</a></div>
	</div>

<button class="accordion"><h2><i class="fas fa-sitemap cor_icone"></i> Produtos</h2></button>
<div class="panel">
	<div><a  href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-produto"><i class="fas fa-save cor_icone"></i>  Cadastrar Produto</a></div>
	<div><a  href="<?php echo INCLUDE_PATH_PAINEL ?>editar-produto"><i class="fas fa-edit cor_icone"></i>  Editar Produto</a></div>
	<div><a  href="<?php echo INCLUDE_PATH_PAINEL ?>deletar-produto"><i class="fas fa-minus-square cor_icone"></i>  Deletar Produto</a></div>
</div>


<button class="accordion"><h2><i class="fas fa-sliders-h cor_icone"></i>  slides</h2></button>
<div class="panel">
	<div><a  href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-slides"><i class="fas fa-save cor_icone"></i>  Cadastrar Slides</a></div>
	<div><a  href="<?php echo INCLUDE_PATH_PAINEL ?>deletar-slides"><i class="fas fa-minus-square cor_icone"></i>  Deletar Slides</a></div>
</div>

<button class="accordion"><h2><i class="fas fa-address-card cor_icone"></i>  Usuários do Sistema</h2></button>
<div class="panel">
	<div><a  href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-usuario"><i class="fas fa-save cor_icone"></i> Cadastrar Usuário</a></div>
	<div><a  href="<?php echo INCLUDE_PATH_PAINEL ?>deletar-usuario"><i class="fas fa-minus-square cor_icone"></i>  Deletar Usuário</a></div>
</div>

<?php } ?>
		






<script>
var acc = document.getElementsByClassName("accordion");
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



		
		<!--<div><a  href="<?php //echo INCLUDE_PATH_PAINEL ?>editar-usuario"><i class="fas fa-user-edit"></i> Editar Usuário</a></div>
		<div><a  href="<?php //echo INCLUDE_PATH_PAINEL ?>deletar-usuario"><i class="fas fa-user-times"></i> Deletar Usuário</a></div>-->





		<!--<h2>Administração do painel</h2>-->
		<!--<a <?php //selecionadoMenu('editar-usuario'); ?> href="<?php //echo INCLUDE_PATH_PAINEL ?>editar-usuario"><i class="fas fa-user-edit"></i>  Editar Usuário</a>-->
		<!--<a <?php //selecionadoMenu('adicionar-usuario'); ?> <?php //verificaPermissaoMenu(2); ?> href="<?php //echo INCLUDE_PATH_PAINEL ?>adicionar-usuario"><i class="fas fa-user-plus"></i>  Adicionar Usuário</a>-->
	

		
	</div><!--items-menu-->
	</div><!--menu-wraper-->
</div><!--menu-->

<header>
	<div class="center">
		<div class="menu-btn">
			<i class="fa fa-bars"></i>
		</div><!--menu-btn-->

		<div class="loggout">
			<a <?php if(@$_GET['url'] == ''){ ?> style="background: #60727a;padding: 15px;" <?php } ?> href="<?php echo INCLUDE_PATH_PAINEL ?>"> <i class="fa fa-home"></i> <span>Página Inicial</span></a>
			<a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout"> <i class="fa fa-window-close"></i> <span>Sair</span></a>
		</div><!--loggout-->

		<div class="clear"></div>
	</div>
</header>

<div class="content">

	<?php Painel::carregarPagina(); ?>


</div><!--content-->

<script src="<?php echo INCLUDE_PATH ?>js/jquery.js"></script>
<script src="<?php echo INCLUDE_PATH_PAINEL ?>js/jquery.mask.js"></script>
<script src="<?php echo INCLUDE_PATH_PAINEL ?>js/main.js"></script>
</body>
</html>