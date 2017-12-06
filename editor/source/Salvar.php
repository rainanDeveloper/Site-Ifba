<?php require_once '../../source/conexao.php'; 
 require_once '../source/autenticar.php';
	$Titulo = $_POST['Titulo'];
	$conteudo = "<p>".str_replace("\n", "</p>\n<p>", $_POST['conteudo'])."</p>";
	$id = $_POST['id'];


	$query = mysql_query("UPDATE noticias SET TITULO='$Titulo', CONTEUDO='$conteudo' WHERE ID_NOTICIA='$id'") or die("Não foi possível fazer as mudanças no arquivo<br>
		<a href='../?id=".$id.">Voltar</a>");
	header('Location: ../?id='.$id);
?>