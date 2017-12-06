<?php require_once 'source/autenticar.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Editor - IFBA Graduação em computação</title>
	<link rel="stylesheet" type="text/css" href="../CSS/editor.css">
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
</head>
<body>
	<section class="header">
		<div class="center">
			<a href="../"><span class="logo"><img src="../images/IFBA-LOGO.png"></span></a>
			<a class="back-btn" href="../editor"></a>
			<a href="source/Logout.php" title="Logout" class="Logout"></a>
		</div>
	</section>
	<form action="source/Salvar.php" method="post">
	<section class="container-page">
			<input type="hidden" name="id" value="<?php if (isset($_GET['id'])) {echo $_GET['id'];}?>">
			<input type="text" name="Titulo" placeholder="Título do artigo" value="<?php if (isset($_GET['id'])){ echo $line['TITULO']; } ?>">
			<div class="container-img"><img src="../images/capa-noticias/<?php echo $line['IMAGEM']; ?>"></div>
			<textarea class="content" data-min-rows="3" rows="10" name="conteudo"><?php
			$conteudo = str_replace("<p>", "", $line['CONTEUDO']);

			$conteudo = str_replace("</p>", "", $conteudo);
			 echo $conteudo; ?></textarea>
			 <input type="submit" name="btn-enviar" value="Salvar">
	</section>
	</form>
	<a class="visualize" title="Ver o artigo" href="http://localhost/Site%20ifba/noticias/?id=<?php echo($_GET['id']) ?>" target="_blank"></a>
</body>
	<script src='../JS/autosize.js'></script>
	<script>
		autosize(document.querySelectorAll('textarea'));
	</script>
</html>