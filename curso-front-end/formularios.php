<style>
	*{
		margin:0;
		padding: 0;
	}

	html, body{
		height: 100%;
	}

	input[type=file]{
		display: none;
	}



	form{
		text-align: center;
		background-color: #ebedf9;
		padding: 30px 0;
	}

	form select{
		width: 220px;
		height: 30px;
		appearance:none; 
		border:0;
		padding-left: 10px;
		background-image: url('imagens/seta.png');
		background-size: 10px 10px;
		background-repeat: no-repeat;
		background-position: 96% 8px; /* 100% pra ficar na direita*/
		/*personalizar a aparencia em navegadores*/
		-webkit-appearence:none; /*prefixo do chrome e safari*/
		-moz-appearence:none;/*prefixo do mozila*/		
	}

	select:: -ms-expand{/*prefixo da internet explorer*/
		display: none;
	}

	.marcar{
		margin: 0 60px;
		display:inline-block;
		width: 30px;
		height: 30px;
		background-color: green;
	}
	input[type=checkbox]{
		display: none;
	}

	.arquivo{
		display: block;/*para poder definir dimensão*/
		cursor: pointer;
		font-size: 17px;
		margin: 20px auto;
		width: 320px;
		height: 40px;
		background-color: #ab47bc;
		color: white;
		text-align: center;
		line-height: 40px
	}



	input[type=checkbox]:checked + label{ /* colocar o + é para dizer que quer o elemento label abaixo(próximo*/
		background-color:red;
		width: 60px;
	}
</style>
<form>
	<fieldset>
		<legend>Meu grupo do Formulário</legend>
		<!--input-->
		<div><input type="text" name="nome" placeholder="Digite o seu nome" /></div>

		<!--select-->
		<div>
			<select name="lista">
				<option disabled selected>Qual sua idade?</option>
				<option value="20">20</option>
			</select>
		</div>

		<!--radio-->
		<div><input type="radio" name="cidade" value="Florianópolis"><span>Florianópolis</span></div>
		<div><input type="radio" name="cidade" value="Rio de Janeiro"><span>Rio de Janeiro</span></div>

	


		<!--textarea-->
		<div><textarea placeholder="Mensagem"></textarea></div>

		<!--checkbox-->


		<div><!--[] para mandar mais de um-->			
			<input name="checkbox" type="checkbox" id="check1" name="cidade[]" />
			<label class="marcar" for="check1" />
		</div>
		<div>
			<input name="checkbox" type="checkbox" id="check2" />
			<label class="marcar" for="check2" />
		</div>


		<!--file-->
		<div><input id="file" type="file" name="file"></div>
		<label class="arquivo" for="file">Clique aqui para carregar o arquivo</label> <!-- for: a label está fazendo referência para o id do input-->

		

		<div>
			<input type="submit" name="acao" value="Enviar!">
		</div>

	</fieldset>