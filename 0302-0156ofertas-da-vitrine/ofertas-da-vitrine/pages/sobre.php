

<?php header('Cache-Control: no cache'); //no cache session_cache_limiter('private_no_expire'); // works //session_cache_limiter('public'); // works too session_start();?>

<?php  $id_loja =  $_SESSION['id']; ?>


<style type="text/css">

.titulo-sobre {
    color: #6a1b9a;
    margin-top: 30px;
    margin-bottom: 40px;
    font-weight: 600;
    font-size: 20px;
    text-transform: uppercase;
    text-align: left;
}
    
    .contatos{
        font-size:17px;
        color: #6a1b9a;
        margin-bottom: 20px;
}

.contatos a{
    text-decoration:none;
    color: #6a1b9a;
    font-size:17px;
}



.box-content-sobre{
    background-color: white;
    text-align: center;

}

.pagina-sobre{ 
    vertical-align: top;   
    display: inline-block;      
    margin-bottom: 30px;    
    font-size: 13px;
    text-align: left;
    width: 49%;
    margin: auto; 
   
}

.espaco-logo{
    width:100%;
    text-align:center;
    padding-left:30px;
    padding-right:30px;
}


@media screen and (max-width: 768px){
    
    .titulo-sobre {
    text-align: center;
}

    .pagina-sobre{  
    
    text-align:center;
        
    width: 100%; 
    padding-left: 10px;
    padding-right: 10px;
    
   
}

.espaco-logo{
    width:100%;
    text-align:center;
    padding-left:0px;
    padding-right:0px;
}

}

</style>

<div class="menu_produto"> <?php include('menu.php');?></div>

<div class="clear">
    
<div class="box-content-sobre">

<?php 
    $selecionarLoja = MySql::conectar()->prepare("SELECT * FROM tb_lojas WHERE id = $id_loja ");
    $selecionarLoja->execute();
    $selecionarLoja = $selecionarLoja->fetchAll();
                 
     foreach ($selecionarLoja as $key => $value) {?>
       



        
<div class="pagina-sobre">
<div class="titulo-sobre">SOBRE NÓS</div>
    <div class="espaco-logo"> <img src="<?php INCLUDE_PATH_PLATAFORMA?>uploads/<?php echo $value['img_logo']; ?>" class="logo-sobre">

   <p><?php echo $value['sobre_paragrafo1']; ?></p>

    <p><?php echo $value['sobre_paragrafo2']; ?></p>
    
    </div>

</div><!--pagina-produtos galeria-->

 <div class="pagina-sobre">

    <div class="titulo-sobre">NOSSOS CONTATOS</div>

<?php

$telefone = $value['telefone'];
$email =  $value['email'];
$instagram = $value['instagram'];
$facebook = $value['facebook'];
$site = $value['site'];
$atendimento = $value['atendimento'];
?>

<?php

 if($telefone != ''){?>
    <div class="contatos"><i class="fas fa-phone-square-alt"></i> <b> <?php echo $value['telefone']; ?> </b></div>
 <?php } ?>

<?php
 if($email != ''){?>
    <div class="contatos"><i class="fas fa-envelope-square"></i>  <?php echo $value['email']; ?> </div>
 <?php }?>
 
 <?php
 if($facebook != ''){?>
    <div class="contatos"><i class="fab fa-facebook-square"></i>  <a  target="_blank" href="https://www.facebook.com/<?php echo $value['facebook']; ?>"> Facebook/<?php echo $value['facebook']; ?></a></div>
 <?php }?>
 
 <?php 
 if($instagram != ''){?>
    <div class="contatos"><i class="fab fa-instagram-square"></i>  <a  target="_blank" href="https://www.instagram.com/<?php echo $value['instagram']; ?>"> Instagram/<?php echo $value['instagram']; ?></a></div>
 <?php }?>
 
 <?php
 if($site != ''){?>
 
     <div class="contatos"><i class="fas fa-laptop-code"></i>  <a  target="_blank" href="http://<?php echo $value['site']; ?>"> <?php echo $value['site']; ?> </a></div>
 <?php }?>
 
 

 
 <?php
 if($atendimento != ''){?>
  <div class="contatos"> <i class="fas fa-clock"></i> <b>Atendimento:</b> <br><?php echo $value['atendimento']; ?>  </div>
 <?php } ?>

 


 
 </div> <!--pagina-produtos descricao-->    

  <?php }?>    

</div><!--box-content-->
