<div class="slideshow-container">

<?php

      $listarSlides = MySql::conectar()->prepare("SELECT * from tb_slides");
      $listarSlides->execute();
      $listarSlides = $listarSlides->fetchAll();   

    foreach ($listarSlides as $key => $value) {?>

      <div class="mySlides fade">  
          <img src="<?php echo INCLUDE_PATH_PLATAFORMA?>uploads/<?php echo $value['imagem']?>" style="width:100%">  
      </div>   


<?php } ?>


<style type="text/css">
  .bolinhas{    
    text-align:center; 
    display: inline;
  }

</style>


<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>


<?php 
 foreach ($listarSlides as $key => $value) {?>   

      <div class="bolinhas"> <span class="dot" onclick="currentSlide(<?php echo $value['id_slide']?>)"></span></div>
<?php } ?>


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
  var dots = document.getElementsByClassName("dot");
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
}
</script>

