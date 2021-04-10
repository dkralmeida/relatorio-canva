<!DOCTYPE html>
<html>
<head>
	<title>Sistema</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

	<form>
  <div class="form-row">
  	<div class="form-group col-md-6">
      <label for="inputNome">Nome</label>
      <input type="text" class="form-control" id="inputNome" placeholder="Nome">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
   
  </div>
  <div class="form-group">
    <label for="inputAddress">Endereço</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>




<form>
<fieldset>
	<legend>Novo Membro</legend>

		<!--Nome-->
		<label>Nome:</label>
		<div><input type="text" name="nome" placeholder="Digite o seu nome" /></div>

		<!--Nome-->
		<label>Data de Nascimento:</label>
		<div><input type="date" name="data_nascimento"/></div>

		<!--Gênero-->		
		<label>Gênero:</label>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="genero" value="Masculino" id="masculino">Masculino
			<label class="form-check-label" for="masculino">
		</div>
		<div class="form-check">		
			<input class="form-check-input" type="radio" name="genero" value="Feminino" id="feminino">Feminino
			<label class="form-check-label" for="feminino">
		</div>

		<!--Estado Civil-->
		<label>Estado Civil:</label>
		<div>
			<select name="genero" class="form-control">
				<option disabled selected>Estado Civil</option>
				<option value="masculio">Casado</option>
				<option value="feminino">Divorciado</option>
				<option value="feminino">Noivo</option>
				<option value="feminino">Separado</option>
				<option value="feminino">Solteiro</option>
				<option value="feminino">viúvo</option>
			</select>
		</div>

		<!--Categoria-->
		<label>Categoria:</label>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="categoria" value="Membro" id="membro">Membro
			<label class="form-check-label" for="membro">
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="categoria" value="Congregado" id="congregado">Congregado
			<label class="form-check-label" for="congregado">
		</div>

<fieldset>
	<legend>Contatos</legend>

	
		<label>E-mail:</label>
		<!--E-mail-->
		<div><input type="email" name="email" placeholder="Digite o seu e-mail" /></div>


		<label>Celular:</label>
		<!--Celular-->
		<div><input type="text" name="ddd" placeholder="DDD" /><input type="text" name="celular" placeholder="Número" /></div>
</fieldset>
		
		<!--Foto-->
		<label>Foto:</label>
		<div><input id="foto" type="file" name="foto"></div>
		<label class="arquivo" for="foto">Upload da foto</label> <!-- for: a label está fazendo referência para o id do input-->	

		<input type="hidden" name="status" value="ativo" />	

		<div>
			<input class="btn btn-primary mb-2" type="submit" name="acao" value="Enviar!">
		</div>

</fieldset>	

</body>
</html>