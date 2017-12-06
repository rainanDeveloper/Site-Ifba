<?php require_once '../source/conexao.php';
	require_once 'source/autenticar.php'; 
		switch ($_GET['page']) {
			case 'Presentation':
				$query = mysql_query("SELECT * FROM apresentacao");
				$page="Apresentacao";
				break;
			case 'Processo-seletivo':
				$query = mysql_query("SELECT * FROM processo_seletivo");
				$page="Processo-Seletivo";
				break;
			case 'Pesquisa':
				$query = mysql_query("SELECT * FROM pesquisa");
				$page="Pesquisa";
				break;
			case 'Extensao':
				$query = mysql_query("SELECT * FROM extensao");
				$page="Extensao";
				break;
			
			default:
				header('Location: ../editor');
				break;
		}
		$line=mysql_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Editor - Página padrão</title>
	<link rel="stylesheet" type="text/css" href="../CSS/editor.css">
	<script type="text/javascript" src="tinymce/js/tinymce/tinymce.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script>tinymce.init({
  selector: 'textarea',
  height: 500,
  plugins: 'image link media'});
	</script>
</head>
<body>
	<section class="header">
		<div class="center">
			<a href="../"><span class="logo"><img src="../images/IFBA-LOGO.png"></span></a>
			<a class="back-btn" href="../editor"></a>
			<a href="source/Logout.php" title="Logout" class="Logout"></a>
		</div>
	</section>
	<form action="source/Salvar-pattern.php" method="post">
		<input type="hidden" name="page" value="<?php echo($_GET['page']) ?>">
	<section class="container-page">
		<h3><?php echo "Page: ".$_GET['page']; ?></h3>
			<textarea class="content" data-min-rows="3" rows="10" name="conteudo"><?php echo $line['conteudo']; ?></textarea>
			 <input type="submit" name="btn-enviar" value="Salvar">
	</section>
	</form>
	<a class="visualize" title="Ver o artigo" href="http://localhost/Site%20ifba/?page=<?php echo($page) ?>" target="_blank"></a>
</body>
	<script src='../JS/autosize.js'></script>
	<script>
		autosize(document.querySelectorAll('textarea'));
	</script>
		<script type="text/javascript">
	</script>
</html>