<?php require_once '../source/conexao.php'; ?>
<link rel="stylesheet" type="text/css" href="../CSS/noticias.css">
<div class="content-pages">
	<div class="noticias">
		<h2>Notícias</h2>

		<ul class="list">
			<?php $query=mysql_query("SELECT * FROM noticias");
				$rows = mysql_num_rows($query);
				while ($line=mysql_fetch_assoc($query)) {?>
				<li><a href="?id=<?php echo $line['ID_NOTICIA']?>"><?php echo $line['TITULO'];?></a></li>

				<?php } ?>
		</ul>
	</div>

</div>