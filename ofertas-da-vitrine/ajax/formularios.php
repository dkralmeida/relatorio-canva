<?php
	include('../config.php');
	$data = array();
	$assunto = 'Novo mensagem do site!';
	$corpo = '';
	foreach ($_POST as $key => $value) {
		$corpo.=ucfirst($key).": ".$value;
		$corpo.="<hr>";
	}
	$info = array('assunto'=>$assunto,'corpo'=>$corpo);
	$mail = new Email('smtp.hostinger.com.br','doni@supermeinteressa.space','Senha2020','Doni');
	$mail->addAdress('dkralmeida@gmail.com','Doni');
	$mail->formatarEmail($info);
	if($mail->enviarEmail()){
		$data['sucesso'] = true;
	}else{
		$data['erro'] = true;
	}



//	$data['retorno'] = 'sucesso';

	die(json_encode($data));
?>