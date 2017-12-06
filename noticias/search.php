<?php  require_once './source/conexao.php'; ?>

<section class="container-search">
	<?php $query = mysql_query("SELECT * FROM noticias WHERE TITULO LIKE '%$_GET[search]%'"); 
		while ($line=mysql_fetch_assoc($query)) { ?>
			<a class="item-S" href="http://localhost/Site%20ifba/noticias/?id=<?php echo $line['ID_NOTICIA'] ?>"><div class="item-search">
				<style type="text/css">span#spn<?php echo $line['ID_NOTICIA']?> {background: url('images/capa-noticias/<?php if(isset($line['IMAGEM'])&!empty($line['IMAGEM'])){echo $line['IMAGEM'];} else {echo 'Default.png';}?>'); background-position: center; background-size: 100% 100%; transition: 0.2s}
				.item-search:hover span#spn<?php echo $line['ID_NOTICIA']?> {background-size: 120% 120%}
			</style>
				<span class="img-capa" id="spn<?php echo $line['ID_NOTICIA'] ?>"></span>
				<div class="data-nws">
					<h1 class="title-search"><span class="title"><?php echo $line['TITULO']; ?></span></h1>
					<span class="date"><?php $piece = explode(" ", $line['DATA'])?> Publicado em <?php $piece2 = explode("-", $piece[0]); echo $piece2[2]."/".$piece2[1]."/".$piece2[0]; ?> às <?php $piece1 = explode(":", $piece[1]); echo $piece1[0]."h".$piece1[1]."m"?></span>
					<span class="resume"><?php echo mb_strimwidth($line['CONTEUDO'], 0, 200, "...");; ?></span>
				</div>

			</div></a>
		<?php } ?>
</section>