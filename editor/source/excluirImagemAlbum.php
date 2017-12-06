<?php require_once '../../source/conexao.php'; 
	if (isset($_SESSION['login'])) {
		if (isset($_GET['id'])) {
			$query = mysql_query("SELECT * FROM album");
			if (mysql_num_rows($query)>1) {
				$query1=mysql_query("DELETE FROM album WHERE album.ID='$_GET[id]'");
				header('Location: ../album');
			} else {
				$query1=mysql_query("TRUNCATE TABLE album");
				header('Location: ../album');
			}
		} else {
		header('Location: ../album');
		}
	} else {
		header('Location: ../login');
	}

?>