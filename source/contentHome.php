<?php require_once 'conexao.php'; ?>

<div class="slider">
				<div class="slide_nav_item" id="prv"> < </div>
				<div class="slide_nav_item" id="nxt"> > </div>
				<ul>
					<?php $query = mysql_query("SELECT * FROM NOTICIAS WHERE NOTICIAS.SLIDER=1 LIMIT 3"); 
						while ($lista=mysql_fetch_assoc($query)) {
					?>
					<li><a href="noticias/?id=<?php echo $lista['ID_NOTICIA']?>" ><span class="title-news"><?php echo $lista['TITULO']?></span><img src="images/capa-noticias/<?php echo $lista['IMAGEM'] ?>"></a></li>
					<?php } ?>
				</ul>
			</div>

			<div class="noticias">
				<h2>Noticias</h2>
				<?php $qr = mysql_query("SELECT * FROM noticias LIMIT 1"); 
				$ln = mysql_fetch_assoc($qr);
				 ?>
				<a href="#"><span class="destaque"><?php echo $ln['TITULO']; ?></span>
					<span class="infos-destaque"><?php $piece = explode(" ", $ln['DATA']);
					$piece2 = explode("-", $piece[0]); echo $piece2[2]."/".$piece2[1]."/".$piece2[0]; ?> <?php $piece1 = explode(":", $piece[1]); echo $piece1[0]."h".$piece1[1]?></span>
				</a>

				<hr>

				<div class="noticias_gerais">
					<ul>
						<?php $query1 = mysql_query("SELECT * FROM noticias LIMIT 20"); 
						while ($lista1=mysql_fetch_assoc($query1)) {
						?>
						<li><a href="noticias/?id=<?php echo $lista1['ID_NOTICIA']?>"><?php echo $lista1['TITULO'];?></a></li>
						<?php } ?>
						<li><a class="MoreNews" href="noticias/">Mais notícias</a></li>
					</ul>
				</div>
				<div class="noticias_curso">
					<ul>
						<li><input type="Radio" name="Tab" class="tab-it" id="tab1" checked> <label for="tab1">Licenciatura</label>
							<div class="content-tab">
								<ul>
									<?php $query2 = mysql_query("SELECT * FROM noticias WHERE CURSO=1 LIMIT 10"); 
									while ($lista2=mysql_fetch_assoc($query2)) { ?>
									<li><a href="noticias/?id=<?php echo $lista2['ID_NOTICIA']?>"><?php echo $lista2['TITULO']; ?></a></li>
									<?php } ?>
								</ul>
							</div>
						</li>
						<li><input type="Radio" name="Tab" class="tab-it" id="tab2"> <label for="tab2">Bacharelado</label>
							<div class="content-tab" id="ctt2">
								<ul>
									<?php $query3 = mysql_query("SELECT * FROM noticias WHERE CURSO=2 LIMIT 10"); 
									while ($lista3=mysql_fetch_assoc($query3)) { ?>
									<li><a href="noticias/?id=<?php echo $lista3['ID_NOTICIA']?>"><?php echo $lista3['TITULO']?></a></li>
									<?php } ?>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div>