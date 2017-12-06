<?php require_once '../../source/conexao.php'; 
	if (isset($_SESSION['login'])) {
		if (isset($_GET['id'])) {
			$query = mysql_query("SELECT * FROM corpo_docente");
			if (mysql_num_rows($query)>1) {
				$query1=mysql_query("DELETE FROM corpo_docente WHERE corpo_docente.ID_DOCENTE='$_GET[id]'");
				header('Location: ../');
			} else {
				$query1=mysql_query("TRUNCATE TABLE corpo_docente");
				header('Location: ../');
			}
		} else {
		header('Location: ../');
		}
	} else {
		header('Location: ../login');
	}

?>