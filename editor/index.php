<?php require_once '../source/conexao.php';
	if (isset($_SESSION['login'])) {
		if (isset($_GET['id'])) {
		$query = mysql_query("SELECT * FROM noticias WHERE ID_NOTICIA='$_GET[id]'");
		$line = mysql_fetch_assoc($query);
		if (isset($line['ID_NOTICIA'])&!empty($line['ID_NOTICIA'])) {
			require_once 'Editor-noticia.php';
		}
		else {
			require_once 'new-article.php';
		}
	}
	else {
		require_once 'list.php';
	}
} else {
	require_once 'source/autenticar.php';
}

?>