<?php require_once '../../source/conexao.php'; 
	if (isset($_SESSION['login'])) {
		if (isset($_POST['nome'])) {
			$query = mysql_query("INSERT INTO corpo_docente(NOME, AREA, LINK_LATTES) VALUES ('$_POST[nome]', '$_POST[area]', '$_POST[lattes]')");
			header('Location: ../');
		} else {
		header('Location: ../');
		}
	} else {
		header('Location: ../login');
	}

?>