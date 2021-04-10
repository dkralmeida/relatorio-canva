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
	<script src="https://kit.fontawesome.com/e2fe36d7e4.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/font-awesome.min.css">	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">	
	<link href="<?php echo INCLUDE_PATH_PLATAFORMA ?>css/style.css" rel="stylesheet" />
	<link href="<?php echo INCLUDE_PATH_PLATAFORMA ?>css/main.css" rel="stylesheet" />
	<link href="<?php echo INCLUDE_PATH_PLATAFORMA ?>css/categorias.css" rel="stylesheet" />
</head>
<body>
<div class="menu">
	<div class="menu-wraper">
		<div class="mobile-hide">
			<a href="<?php echo INCLUDE_PATH_PLATAFORMA ?>"><img class="logo_desktop" src="img/logo-ofertas-da-vitrine-desktop.png"></a>
		</div>
	</div><!--menu-wraper-->
<?php
	$listarProdutos = MySql::conectar()->prepare("SELECT * FROM `tb_categoria` ORDER BY nome_categoria ASC");
	$listarProdutos->execute();
	$listarProdutos = $listarProdutos->fetchAll();

	$tamanhoicone = ' fa-2x';
	foreach ($listarProdutos as $key => $value) {?>	

	<div class="icones-categorias">
		<form method="post" action="<?php echo INCLUDE_PATH_PLATAFORMA ?>categoria" name="categoria">
			<input type="hidden" name="idcat" value="<?php echo $value['id'];?>">	

			<button class="button-icones" type="submit" value="<?php echo $value['nome_categoria'];?>"><i class="<?php echo  $value['icone'].$tamanhoicone; ?>"></i></button>			
		</form>
		
		<p><?php echo $value['nome_categoria'];?></p>
	</div>
<?php } ?>

<div id="container">
</div>
</div><!--menu-->

<header>
	<div class="center">

	<!-- aparecer no mobile -->  
    <div class="mobile">
    	<div class="desktop-hide">        
	        <div class="menu-btn">
				<i class="fa fa-bars"> Menu</i>				
			</div><!--menu-btn-->    		
    	</div>
	</div>	
    
 	<!-- aparecer no mobile -->  
    <div class="mobile">
    	<div class="desktop-hide">        
	     <!--LOGO MOBILE--> 	
	        
    	</div>
    </div>   
	<div class="clear"></div>
	</div>
</header>

<div class="content">
	<?php Plataforma::carregarPagina(); ?>
</div><!--content-->

</body>
</html>

<script src="<?php echo INCLUDE_PATH ?>js/jquery.js"></script>
<script src="<?php echo INCLUDE_PATH_PLATAFORMA ?>js/jquery.mask.js"></script>
<script src="<?php echo INCLUDE_PATH_PLATAFORMA ?>js/main.js"></script>
<script src="js/functions.js"></script>
<script src="js/jquery.js"></script>

<script>
var acc = document.getElementsByClassName("menu_categorias");
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

