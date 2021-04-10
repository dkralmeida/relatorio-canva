
<!DOCTYPE html>
<html>
<body>

<?php
$str = file_get_contents('http://makeup-api.herokuapp.com/api/v1/products.json');		

$busca = json_decode($str);

foreach ( $busca as $valor )
    {
        echo "Nome: $valor->name <br> Preço: $valor->price <br>";               
     }
?>

</body>
</html>