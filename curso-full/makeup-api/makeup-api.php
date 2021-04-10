<form method="post">
	<input type="text" name="pesquisa" />
	<input type="submit" name="acao" value="Buscar" />
</form>

<?php
	if(isset($_POST['acao'])){
		$url = urldecode($_POST['pesquisa']);
		$str = file_get_contents('http://makeup-api.herokuapp.com/api/v1/products.json');
		$busca = json_decode($str);
	

		echo 'Produto:';
		echo $busca[0]->name;
		echo '<br>';

		echo 'Preço:';
		echo $busca[0]->price;
		echo '<br>';

		echo 'Etiqueta:';
		echo $busca[0]->tag_list[1];
		echo '<br>';

		echo 'Cor:';
		echo $busca[0]->product_colors[0]->hex_value;		
		echo '<br>';

		?>
		<!--<img src= "<?php //echo $busca[0]->image_link; ?>";-->
		<?php
		


		echo '<pre>';
			print_r($busca);
		echo '</pre>';


		

	}
?>