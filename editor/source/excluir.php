<?php require_once '../../source/conexao.php'; 
	if (isset($_SESSION['login'])) {
		if (isset($_GET['id'])) {
			$query = mysql_query("SELECT * FROM noticias");
			if (mysql_num_rows($query)>1) {
				$query = mysql_query("SELECT * FROM noticias WHERE noticias.ID_NOTICIA='$_GET[id]'");
				$line = mysql_fetch_assoc($query);
				$pasta='../../images/capa-noticias/';
				unlink($pasta.$line['IMAGEM']);
				$query1=mysql_query("DELETE FROM noticias WHERE noticias.ID_NOTICIA='$_GET[id]'");
				header('Location: ../');
			} else {
				$query1=mysql_query("TRUNCATE TABLE noticias");
				header('Location: ../');
			}
		} else {
		header('Location: ../');
		}
	} else {
		header('Location: ../login');
	}

?>