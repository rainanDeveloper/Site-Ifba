<?php require_once 'source/autenticar.php';?>

<!DOCTYPE html>
<html>
<head>
	<title>Editor - IFBA Graduação em computação</title>
	<link rel="stylesheet" type="text/css" href="../CSS/editor.css">
</head>
<body>
	<section class="header">
		<div class="center">
			<a href="../"><span class="logo"><img src="../images/IFBA-LOGO.png"></span></a>
			<a class="back-btn" href="../editor"></a>
			<a href="source/Logout.php" title="Logout" class="Logout"></a>
		</div>
	</section>
	<section class="container-page">
		<form action="source/sendImageCreateArticle.php" enctype="multipart/form-data" method="post">
			<input type="text" required="true" placeholder="Defina um nome para seu artigo" name="Titulo">
			<input type="file" id="imagem" name="imagem">
			<label for="imagem" class="imagem">
				<span class="imagem"></span>
				<span class="text-selection">Selecionar Imagem</span>
			</label>
			<input type="submit" name="btn-enviar" value="Criar">
			<div class="center_90">
				<input type="checkbox" id="Slider" name="Slider">
				<label for="Slider">Colocar no slider</label><br>
				<span class="curso">Curso: </span>
					<input type="radio" name="Curso" required="true" id="Lic" value="1"><label class="curso" for="Lic">Licenciatura</label>
						<input type="radio" name="Curso"  required="true" id="Bac" value="2"><label class="curso" for="Bac">Bacharelado</label>
			</div>
		</form>
	</section>
</body>
</html>