<?php require_once '../source/conexao.php';
 require_once 'source/autenticar.php';
		if (isset($_GET['q'])) {
			$query = mysql_query("SELECT * FROM noticias WHERE TITULO LIKE '%$_GET[q]%'");
		}else{
			$query = mysql_query("SELECT * FROM noticias");
		}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Editor<?php if (isset($_GET['q'])) {
		echo " - Resultados da pesquisa";
	} ?></title>
	<link rel="stylesheet" type="text/css" href="../CSS/editor.css">
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>

</head>
<body>

	<section class="header">
		<div class="center">
			<a href="../"><span class="logo"><img src="../images/IFBA-LOGO.png"></span></a>
			<div class="search-area">
				<form action="" method="get">
					<button class="search-icon"></button>
					<input type="text" placeholder="Pesquisar" name="q" value="<?php if(isset($_GET['q'])) {echo($_GET['q']);}?>">
					<span class="icon-limpar"></span>
					<?php if (isset($_GET['q'])) {?>
						<a class="limpar-pesquisa" href="../editor"></a>
					<?php } ?>
				</form>
			</div>
			<a href="source/Logout.php"  title="Logout" class="Logout"></a>
		</div>
	</section>
	<section class="container-page">
		<h1 class="Titulo-pagina">Páginas-padrão</h1>
		<ul>
			<li class="list-itens-menu"><a class="pattern-page" href="Editor-pattern?page=Presentation">Página de apresentação</a></li>
			<li class="list-itens-menu"><a class="pattern-page" href="Editor-pattern?page=Processo-seletivo">Processo Seletivo</a></li>
			<li class="list-itens-menu"><a class="pattern-page" href="Editor-pattern?page=Pesquisa">Pesquisa</a></li>
			<li class="list-itens-menu"><a class="pattern-page" href="Editor-pattern?page=Extensao">Extensão</a></li>
			<li class="list-itens-menu"><a class="pattern-page" href="album">Álbum</a></li>
		</ul>
		<h1 class="Titulo-pagina">Notícias</h1>
		<table>
			<tr>
				<th width="30%">Título do artigo</th>
				<th width="20%">Imagem</th>
				<th width="20%">Slider</th>
				<th width="20%">Data de publicação</th>
				<th width="10%"><span class="excluir"></span></th>
			</tr>
			<?php while ($line=mysql_fetch_assoc($query)) { ?>
			<?php $data = explode(" ", $line['DATA']);
					$data1 = explode("-", $data[0]);
					$data_fix = $data1[2]."/".$data1[1]."/".$data1[0]." às ".$data[1]?>
			<tr>
				<td width="30%"><a class="item-lista-titulo" href="?id=<?php echo($line['ID_NOTICIA']) ?>"><?php echo $line['TITULO']; ?></a></td>
				<td width="20%"><?php echo $line['IMAGEM']; ?></td>
				<td width="20%"><?php if($line['SLIDER']=='1'){echo ("Sim");} else {echo ("Não");}?></td>
				<td width="20%"><?php echo $data_fix; ?></td>
				<td width="10%"><span title="excluir"><a href="source/excluir?id=<?php echo($line['ID_NOTICIA']) ?>" class="excluir"></a></span></td>
			</tr>
			<?php } ?>
		</table>
		<h1 class="Titulo-pagina">Docentes</h1>
		<div class="form-add-docente">
			<h3 class="titulo-add">Adicionar</h3>
			<form action="source/addDocente.php" method="post">
				<input type="text" placeholder="Nome" required="true" name="nome">
				<input type="text" placeholder="Área" required="true" name="area">
				<input type="text" placeholder="Link do currículo lattes" required="true" name="lattes">
				<input type="submit" name="btn-submit" value="Adicionar">
			</form>
		</div>
		<table>
			<tr>
				<th width="30%">Nome</th>
				<th width="20%">Área</th>
				<th width="20%">Lattes</th>
				<th width="10%"><span class="excluir"></span></th>
			<?php $query=mysql_query("SELECT * FROM corpo_docente");
			while ($line=mysql_fetch_assoc($query)) { ?>
			<tr>
				<td width="30%"><?php echo $line['NOME'];?></td>
				<td width="20%"><?php echo $line['AREA']; ?></td>
				<td width="20%"><a href="<?php echo $line['LINK_LATTES']; ?>" target="_blank"><?php echo $line['LINK_LATTES']; ?></a></td>
				<td width="10%"><span title="excluir"><a href="source/excluir_docente?id=<?php echo($line['ID_DOCENTE']) ?>" class="excluir"></a></span></td>
			</tr>
			<?php } ?>
		</table>
	</section>
	<a class="new-article-icon" title="Nova notícia" href="new-article"></a>

</body>
</html>