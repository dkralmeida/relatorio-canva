<!DOCTYPE html>
<?php
	if(isset($_GET['loggout'])){
		Painel::loggout();
	}
?>

<html>
<head>
	<title>Painel de Controle</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/font-awesome.min.css">
	<link href="<?php echo INCLUDE_PATH_PLATAFORMA ?>css/style.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://kit.fontawesome.com/e2fe36d7e4.js" crossorigin="anonymous"></script>


</head>
<body>
    
<style>
.logomobile{
    height:70px;
    
   
   
}

.logomobile img{
    width:150px;
}
    
.menu-btn{
	float: left;
	cursor: pointer;
	font-size: 20px;
	color: #6a1b9a;
	margin-right:20px;
}
	.menu-mobile{
		background-color: #6a1b9a;
		text-decoration: none;
		padding-right: 20px;
		padding-left: 20px;
		padding-top: 5px;
		padding-bottom: 5px;
		margin-bottom: 5px;

	}

	.link-menu-mobile{
		color: #fff;
		text-decoration: none;
	}
</style>


<style>
.menu-btn{
    margin-left:15px;
}

.menu-wraper{width:250px;}

div.menu{
	overflow-x:hidden;
	overflow-y: auto;
	height: 100%;
	padding:0;
	position: fixed;
	left: 0;
	top: 0;
	float: left;
	width:250px;
	border-right: 10px; blue;
	background-color: #6a1b9a;
	padding-left: 15px;
}
@media screen and (max-width: 768px){
    
    .icones-categorias {
    width: 82px;
    height: 72px;
    display: inline-block;
    margin: 4px;
    font-size: 10px;
    text-align: center;
    color: #ffd600;
    vertical-align: middle;
    background-color: #ebedf9;
    padding-top: 5px;
    border-radius: 10px;
}
    
    .menu-wraper{
       
    }
    
    div.menu{
	    width: 100%;
	}
	



	.box-metrica-wraper h2{
	font-size: 24px;
	}

	.box-metrica-wraper p{
	padding: 10px 0;
	font-size: 22px;
	}
	

}

@media screen and (max-width: 380px){
	.items-menu a{
		font-size: 15px;
	}

}
</style>
	

<div class="menu">
	<div class="menu-wraper">

		<div class="mobile-hide">
			<a href="<?php echo INCLUDE_PATH_PLATAFORMA ?>"><img class="logo_desktop" src="img/logo-ofertas-da-vitrine-desktop.png"></a>
		</div>



	

<br>

	</div><!--menu-wraper-->


	<?php
		$listarProdutos = MySql::conectar()->prepare("SELECT * FROM `tb_categoria` ORDER BY nome_categoria ASC");
			$listarProdutos->execute();
			$listarProdutos = $listarProdutos->fetchAll();
		?>

	<?php
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



<script src="js/functions.js"></script>
<script src="js/jquery.js"></script>


</div><!--menu-->

<header>
	<div class="center">

<!-- aparecer no mobile -->  
    <div class="mobile"><div class="desktop-hide">
        
        <div class="menu-btn">
			<i class="fa fa-bars"> Menu</i>
			
		</div><!--menu-btn-->
		
		
    		
    </div></div>	
    
 		<!-- aparecer no mobile -->  
    <div class="mobile"><div class="desktop-hide">
        
        <div class="logomobile"><a href="<?php echo INCLUDE_PATH_PLATAFORMA ?>"><img class="logomobile" src="img/logo-ofertas-da-vitrine-mobile.png"></a></div>
    		
    </div></div>   
    
    
   
		
		<div class="clear"></div>
	</div>
</header>

<div class="content">

	<?php Plataforma::carregarPagina(); ?>


</div><!--content-->

<script src="<?php echo INCLUDE_PATH ?>js/jquery.js"></script>
<script src="<?php echo INCLUDE_PATH_PLATAFORMA ?>js/jquery.mask.js"></script>
<script src="<?php echo INCLUDE_PATH_PLATAFORMA ?>js/main.js"></script>
</body>
</html>


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