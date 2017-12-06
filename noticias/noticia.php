
			<article class="artigo">
				<h1 class="title"><?php echo $line['TITULO'];?></h1>
				<span class="data"><?php $piece = explode(" ", $line['DATA'])?> Publicado em <?php $piece2 = explode("-", $piece[0]); echo $piece2[2]."/".$piece2[1]."/".$piece2[0]; ?> às <?php $piece1 = explode(":", $piece[1]); echo $piece1[0]."h".$piece1[1]."m"?></span>
				<span class="image-capa"><a href="../images/capa-noticias/<?php echo $line['IMAGEM'] ?>"><img src="../images/capa-noticias/<?php echo $line['IMAGEM'] ?>"></a></span>
				<?php echo $line['CONTEUDO']; ?>
			</article>
