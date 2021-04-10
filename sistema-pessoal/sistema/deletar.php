<?php
	if(isset($_POST['id_membro'])){
	 $pdo = new PDO('mysql:host=localhost;dbname=sistema_pessoal','root','');
	 $sql = $pdo->prepare("DELETE FROM `tb_sites` WHERE id = ?");
	 $sql->execute(array($_POST['id_membro']));
	}
?>