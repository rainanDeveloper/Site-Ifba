<?php require_once '../../source/conexao.php'; 
	require_once 'autenticar.php'; 
		switch ($_POST['page']) {
			case 'Presentation':
				$query = mysql_query("UPDATE apresentacao SET conteudo='$_POST[conteudo]' WHERE ID='1'");
				break;
			case 'Processo-seletivo':
				$query = mysql_query("UPDATE processo_seletivo SET conteudo='$_POST[conteudo]' WHERE ID='1'");
				break;
			case 'Pesquisa':
				$query = mysql_query("UPDATE pesquisa SET conteudo='$_POST[conteudo]' WHERE ID='1'");
				break;
			case 'Extensao':
				$query = mysql_query("UPDATE extensao SET conteudo='$_POST[conteudo]' WHERE ID='1'");
				break;
			
			default:
				header('Location: ../../editor');
				break;
		}
		header('Location: ../../editor');
?>