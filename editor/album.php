<?php require_once '../source/conexao.php';
	require_once 'source/autenticar.php'; 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Editor - Página padrão</title>
	<link rel="stylesheet" type="text/css" href="../CSS/editor.css">
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="../JS/scripts.js"></script>
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
		<div class="adicionar">
			<form action="source/addImageAlbum.php" enctype="multipart/form-data" method="post">
				<input type="file" required="true" id="imagem" name="imagem">
				<label for="imagem" class="imagem">
				<span class="imagem"></span>
				<span class="text-selection">Selecionar Imagem</span>
			</label>
			<div id="left">
				<input type="radio" name="semestre" required="true" value="1" id="semestre1">
				<label class="curso" for="semestre1">Primeiro semestre</label>
				<input type="radio" name="semestre" required="true" value="2" id="semestre2">
				<label class="curso" for="semestre2">Segundo semestre</label>
			</div>
			<input type="text" id="left" placeholder="Ano..." name="ano">
			<input type="submit" id="right" name="Enviar">
			</form>
		</div>
		<ul>
			<?php 
				$qr1=mysql_query("SELECT MIN(ANO) as MINIMO, MAX(ANO) as MAXIMO FROM album");
				$ln1 = mysql_fetch_assoc($qr1);
				for ($i=$ln1['MINIMO']; $i < ($ln1['MAXIMO']+1); $i++) { 
					$query = mysql_query("SELECT * FROM album WHERE ANO='$i' AND SEMESTRE='1'");
					echo "<span class='title-ano'>Semestre ".$i.".1</span>"; 
					while ($line=mysql_fetch_assoc($query)) { ?>
					<li><a href="../images/album/<?php echo($line['ENDERECO']) ?>"><div class="image" id="container"><span class="title-abrir">Abrir</span><a href="source/excluirImagemAlbum?id=<?php echo($line['ID']) ?>"><span title="fechar" class="close"></span></a><img src="../images/album/<?php echo($line['ENDERECO'])?>"></div></a></li>
				<?php } 
				$query = mysql_query("SELECT * FROM album WHERE ANO='$i' AND SEMESTRE='2'");
					if (mysql_num_rows($query)>0) {
					 	echo "<span class='title-ano'>Semestre ".$i.".2</span>";
					 } 
					while ($line=mysql_fetch_assoc($query)){ ?>
					<li><a href="../images/album/<?php echo($line['ENDERECO'])?>"><div class="image" id="container"><span class="title-abrir">Abrir</span><a href="source/excluirImagemAlbum?id=<?php echo($line['ID']) ?>"><span title="fechar" class="close"></span></a><img src="../images/album/<?php echo($line['ENDERECO'])?>"></div></a></li>
					<?php } } ?>

		</ul>
	</section>
</body>
</html>