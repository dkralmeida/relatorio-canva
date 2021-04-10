<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<?php
$str = file_get_contents('http://makeup-api.herokuapp.com/api/v1/products.json');		

$busca = json_decode($str);
sort($busca);

?>

<div class="container">
  <form method="post">
  	<div class="form-group">
    	<label for="nome_produto">Produto</label>
	    <select class="form-control" id="nome_produto" name="produto">
	    	<?php 
	    	foreach ( $busca as $valor )
	    	{?>
	      	<option value="<?php echo "$valor->id"; ?>"><?php echo "$valor->name"; ?></option>  
	      <?php	     
	      	} 
	      ?>    
	    </select>    
  </div>
  <input type="submit" name="acao" value="Buscar" />
</form>
</div>

<?php
	if(isset($_POST['acao'])){
		echo $id_produto = $_POST['produto'];



?>
	
<?php 
	}
?>
