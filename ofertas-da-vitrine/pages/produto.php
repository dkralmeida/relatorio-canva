<?php header('Cache-Control: no cache'); //para voltar sem ter que carregar formulário ?>
<?php
    $id_loja =  $_SESSION['id'];
?>
<br><br>
<div class="menu_produto"> <?php include('menu.php');?></div>

<div class="clear">
    
<div class="box-content-produtos">
<?php
   

$id_produto =  $_POST['id_produto'];
$habilita = 'enabled';
$icone_curtida = 'far fa-heart';
    $selecionarCurtidas = MySql::conectar()->prepare("SELECT * FROM tb_produtos WHERE id= $id_produto");
    $selecionarCurtidas->execute();
    $selecionarCurtidas = $selecionarCurtidas->fetchAll();

    foreach ($selecionarCurtidas as $key => $value) {       
        $value['id']; 
        $value['produto']; 
        $curtida_atual = $value['curtidas']; 
    }

$selecionaRanking = MySql::conectar()->prepare("SELECT * FROM tb_lojas WHERE id = $id_loja");
$selecionaRanking->execute();
$selecionaRanking = $selecionaRanking->fetchAll();

foreach ($selecionaRanking as $key => $value) {  
   $ranking =  $value['ranking'];
}

if(isset($_POST['acao_curtir'])){
    
    $habilita = 'disabled';
    $icone_curtida = 'fas fa-heart';

    $id_produto =  $_POST['id_produto'];
    $curtida = $curtida_atual + 1;  
    $atualizarCurtida = MySql::conectar()->prepare("UPDATE `tb_produtos` SET curtidas = $curtida WHERE id = $id_produto ");
    $atualizarCurtida->execute();

    $ranking = $ranking + $curtida;

    $atualizaRanking = MySql::conectar()->prepare("UPDATE `tb_lojas` SET ranking = $ranking WHERE id = $id_loja ");
    $atualizaRanking->execute();

    }
?>

        
<div class="pagina-produtos">
    <br><br>
    <?php include('galeria.php');?>

    <br><br>
 </div><!--pagina-produtos galeria-->

 <div class="pagina-produtos">
           <?php 
    
        $listarProdutos = MySql::conectar()->prepare("SELECT * from tb_produtos WHERE id = '$id_produto' ");
        $listarProdutos->execute();
        $listarProdutos = $listarProdutos->fetchAll();

        foreach ($listarProdutos as $key => $value) {?>     

            <div class="titulo-produto"><?php echo $value['produto']?></div>

    


<?php 

$de = $value['de'];

    if($de != '0'){?>

            <div class="group-produto">
                <div class="desc_de_produto">De:</div>
                <div class="de_valor_produto">R$ <?php $de = $value['de']; echo number_format($de, 2, ',', '.'); ?></div>

            </div>
            <div class="group-produto">

                <div class="desc_por_produto">Por:</div>

                <div class="por_valor_produto">R$ <?php $por = $value['por']; echo number_format($por, 2, ',', '.'); ?></div>
            </div>  <!--group-->    

   <?php } ?>

<?php
$link_site = $value['link_site'];

if($link_site != ''){?>
    <a class="maisinformacoes" target="_blank" href="<?php echo $value['link_site']?>">VER NO SITE</a>

<?php }
            
?>
          

<form method="post">
    <input type="hidden" name="id_produto" value="<?php echo $id_produto ?>">
    <button class="btn_curtir" <?php echo $habilita; ?>   type="submit" name="acao_curtir"><i class="<?php echo $icone_curtida; ?>"></i> Eu curti!</button>

</form>

<p class="sub-titulo-produto"><?php echo $value['subtitulo']?></p>

<p class="produto-descricao"><?php echo $value['paragrafo1']?></p>

<p class="produto-descricao"><?php echo $value['paragrafo2']?></p>

<p class="produto-descricao"><?php echo $value['paragrafo3']?></p>

<p class="produto-descricao"><?php echo $value['paragrafo4']?></p>

<p class="produto-descricao"><?php echo $value['paragrafo5']?></p>


<?php } ?>
 </div> <!--pagina-produtos descricao-->       

</div><!--box-content-->
