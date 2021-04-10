<?php 
  $listarProdutos = MySql::conectar()->prepare("SELECT * from tb_produtos WHERE id = '$id_produto' ");
	$listarProdutos->execute();
	$listarProdutos = $listarProdutos->fetchAll();
?>

<style>
/*GALERIA DO PRODUTO*/

img {
  vertical-align: middle;
  width: 100%;
}

.container {
  position: relative;
  background-color: #ffffff;
  width: 100%;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
}

.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

/*FIM - GALERIA DO PRODUTO*/

/* galeria produto*/

.column{
  margin-right: 3px;
    margin-left: 6px;
}

.mySlides{      
  text-align: center;
  margin-bottom: 10px;
}

.imagem-galeria{
  width: 100%;
}


/*fim da galeria produto*/

</style>

<div class="container">

<?php
		foreach ($listarProdutos as $key => $value) {?>
		
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