
<?php include 'slides_boo.php';?>

<style>

.button_logo_loja{
	background-color:#ffffff;
	vertical-align: middle;
	border: 0;
	height: 225px;
}
.box_content_home{
		background-color: white !important;
		text-align: left;
}

.botoes-categoria{ 
	vertical-align: top;   
    display: inline-block;      
    margin-bottom: 30px;    
    font-size: 13px;
    text-align: center;
    margin-right: 25px;     
    width: 24%;/*calc(22% - 50px);*/
    margin: auto; 
    padding-left: 10px;
    background-color: white;
}



@media screen and (max-width: 768px){
    
.button_logo_loja{
	vertical-align: middle;
	border: 0;
	height:150px;
	
	
}
.button_logo_loja img{
    width:100%;
}
    
.box_content_home{
    padding-left:10px;
    padding-right:10px;
    text-align: center;
}

.botoes-categoria{ 
    vertical-align: top;   
    display: inline-block;      
    margin-bottom: 0px;    
    font-size: 13px;
    text-align: center;
    margin-right: 0px;     
    width: 46%;
    padding-left:10px;
    padding-right:10px;
    
}

}
</style>


<?php
    $categoria = Plataforma::carregarCategoria(1);
        foreach ($categoria as $key => $value) {
    ?>      
        <h2><i class="fa fa-pencil"></i> Lojas Favoritas</h2>
    <?php } ?>
    
    <?php
        $usuariosPainel = MySql::conectar()->prepare("SELECT * FROM `tb_lojas` ORDER BY `ranking` DESC LIMIT 8");
            $usuariosPainel->execute();
            $usuariosPainel = $usuariosPainel->fetchAll();
        ?>

<div class="box_content_home">

    <?php
        foreach ($usuariosPainel as $key => $value) {?>

        <?php $id = $value['id'];?>
            <?php $ranking = $value['ranking'];?>




      





<div class="botoes-categoria"> 

                <form method="post" action="<?php echo INCLUDE_PATH_PLATAFORMA ?>loja">

            <input type="hidden" name="idloja" value="<?php echo $value['id'];?>">  

                <button class="button_logo_loja" type="submit" value=""><img src="<?php echo INCLUDE_PATH_PLATAFORMA?>uploads/<?php echo $value['img_logo']?>" /></button>
            
            </form>


</div><!--botoes-categoria-->


<?php } ?>

</div><!--box-content-->














