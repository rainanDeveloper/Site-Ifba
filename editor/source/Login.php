<?php
 require_once '../../source/conexao.php';
	if (!isset($_SESSION['login'])) {
		if (session_status()==PHP_SESSION_NONE) {
			session_start();
		}
		$login = $_POST['Login-usr'];
	$senha = $_POST['Senha'];
	$query = mysql_query("SELECT * FROM editor WHERE login = '$login' AND senha='$senha'");
	if (mysql_num_rows($query)>0) {

		$_SESSION['login']=$login;
		$_SESSION['senha']=$senha;

		var_dump($_SESSION);
		header('Location: ../'); }
	}
?>