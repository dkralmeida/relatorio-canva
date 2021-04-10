<?php 
 //$id_produto =  $_SESSION['id_produto']; 


$listarProdutos = MySql::conectar()->prepare("SELECT * from tb_produtos WHERE id = '$id_produto' ");
			$listarProdutos->execute();
			$listarProdutos = $listarProdutos->fetchAll();
?>


<div class="container">

<?php
		foreach ($listarProdutos as $key => $value) {?>
		

    <style type="text/css">
      .imagem-galeria{
        width: 400px;
        
      }

    </style>

  <div class="mySlides">
	<img class="imagem-galeria" src="<?php echo INCLUDE_PATH_PLATAFORMA?>uploads/<?php echo $value['foto']?>" />
       
  </div>


  <div class="mySlides">
	<img class="imagem-galeria"  src="<?php echo INCLUDE_PATH_PLATAFORMA?>uploads/<?php echo $value['foto2']?>" />
      
  </div>

    <div class="mySlides">
		<img class="imagem-galeria"  src="<?php echo INCLUDE_PATH_PLATAFORMA?>uploads/<?php echo $value['foto3']?>" />
      
  </div>

   <div class="mySlides">
		<img class="imagem-galeria" src="<?php echo INCLUDE_PATH_PLATAFORMA?>uploads/<?php echo $value['foto4']?>" />
      
  </div>
  <div class="mySlides">
		<img class="imagem-galeria"  src="<?php echo INCLUDE_PATH_PLATAFORMA?>uploads/<?php echo $value['foto5']?>" />
      
  </div>

    
   <?php } ?>

 
  <div class="caption-container">
    <p id="caption"></p>
  </div>


   <div class="row">
   

    <div class="column">
      <img class="demo cursor" src="<?php echo INCLUDE_PATH_PLATAFORMA?>uploads/<?php echo $value['foto']?>"  style="width:100%" onclick="currentSlide(1)" >
    </div>

<?php
	if ($value['foto2'] == ''){?>

	<div class="column">
      <img class="demo cursor" src=""  style="width:100%" onclick="currentSlide(2)" >
    </div>

	<?php }else{?>

	<div class="column">
      <img class="demo cursor" src="<?php echo INCLUDE_PATH_PLATAFORMA?>uploads/<?php echo $value['foto2']?>"  style="width:100%" onclick="currentSlide(2)" >
    </div>

	<?php } ?>


	<?php
	if ($value['foto3'] == ''){?>

	<div class="column">
      <img class="demo cursor" src=""  style="width:100%" onclick="currentSlide(3)" >
    </div>

	<?php }else{?>

	<div class="column">
      <img class="demo cursor" src="<?php echo INCLUDE_PATH_PLATAFORMA?>uploads/<?php echo $value['foto3']?>"  style="width:100%" onclick="currentSlide(3)" >
    </div>

	<?php } ?>

   
   <?php
	if ($value['foto4'] == ''){?>

	<div class="column">
      <img class="demo cursor" src=""  style="width:100%" onclick="currentSlide(4)" >
    </div>

	<?php }else{?>

	<div class="column">
      <img class="demo cursor" src="<?php echo INCLUDE_PATH_PLATAFORMA?>uploads/<?php echo $value['foto4']?>"  style="width:100%" onclick="currentSlide(4)" >
    </div>

	<?php } ?>

<?php
	if ($value['foto5'] == ''){?>

	<div class="column">
      <img class="demo cursor" src=""  style="width:100%" onclick="currentSlide(5)" >
    </div>

	<?php }else{?>

	<div class="column">
      <img class="demo cursor" src="<?php echo INCLUDE_PATH_PLATAFORMA?>uploads/<?php echo $value['foto5']?>"  style="width:100%" onclick="currentSlide(5)" >
    </div>

	<?php } ?>


    </div><!--row-->
   
</div><!--container-->


<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>