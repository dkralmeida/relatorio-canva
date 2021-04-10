<!DOCTYPE html>
<html>
<head>
  <title>Sistema</title>
  <link rel="stylesheet" type="text/css" href="estilo.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<form>
  <div class="form-group">
    <label for="data">Data:</label>
    <input type="date" class="form-control" id="data">
  </div>

    <div class="form-group">
    <label for="membro">Membro</label>
    <select class="form-control" id="membro">
      <option>Doni Almeida</option>
      
    </select>
  </div>

  <div class="form-group">
    <label for="dizimmo">Valor:</label>
    <input type="text" class="form-control" id="dizimo" placeholder="0,00">    
  </div>
  
 
  <button type="submit" class="btn btn-primary">Lançar Dízimo</button>
</form>

</body>
</html>