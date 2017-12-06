<?php require_once 'conexao.php'; ?>

<div class="content-pages">
	<h1 class="title-style1">Álbum</h1>
	<ul>
		<?php 
			$qr1=mysql_query("SELECT MIN(ANO) as MINIMO, MAX(ANO) as MAXIMO FROM album");
			$ln1 = mysql_fetch_assoc($qr1);
			for ($i=$ln1['MINIMO']; $i < ($ln1['MAXIMO']+1); $i++) { 
				$query = mysql_query("SELECT * FROM album WHERE ANO='$i' AND SEMESTRE='1'");
				echo "<span class='title-ano'>Semestre ".$i.".1</span>"; 
				while ($line=mysql_fetch_assoc($query)) { ?>
				<li><a href="images/album/<?php echo($line['ENDERECO']) ?>"><div class="image" id="container"><span class="title-abrir">Abrir</span><img src="images/album/<?php echo($line['ENDERECO'])?>"></div></a></li>
			<?php } 
			$query = mysql_query("SELECT * FROM album WHERE ANO='$i' AND SEMESTRE='2'");
				if (mysql_num_rows($query)>0) {
				 	echo "<span class='title-ano'>Semestre ".$i.".2</span>";
				 } 
				while ($line=mysql_fetch_assoc($query)){ ?>
				<li><a href="images/album/<?php echo($line['ENDERECO'])?>"><div class="image" id="container"><span class="title-abrir">Abrir</span><img src="images/album/<?php echo($line['ENDERECO'])?>"></div></a></li>
				<?php } } ?>

	</ul>
</div>