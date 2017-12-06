<?php require_once '../source/conexao.php'; 
if (isset($_GET['id'])) {
			$query = mysql_query("SELECT * FROM noticias WHERE noticias.ID_NOTICIA='$_GET[id]'");
			$line=mysql_fetch_assoc($query); }
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php if (isset($_GET['id'])) { echo $line['TITULO'];	} else {echo "Notícias";}?> - IFBA Graduação em computação</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../CSS/style.css">
	<link rel="stylesheet" type="text/css" href="../CSS/pages-artigos.css">
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="../JS/scripts.js"></script>
</head>
<body>
	<a class="editing-system" href="http://localhost/Site%20ifba/editor/" title="Acessar sistema de edição - para servidores autorizados"></a>
	<header>
		<section class="head">
			<div class="Logo">
				<a class="Logo" href="http://localhost/Site%20ifba" title="Página inicial do site de graduação">
					<span>IFBA - Campus camaçari</span>
					<h1>Graduação em Computação</h1>
				</a>
			</div>
			<div class="flt-right">
				<div class="search">
					<form action="../" method="get">
					<input type="text" placeholder="Buscar" id="search-text-field" value="" name="search">
					<input type="submit" id="search-submit" value="" name="">
					</form>
				</div>
			</div>
		</section>
	</header>
	<section class="menu">
		<nav class="menu-sup">
			<ul>
				<li><a href="http://localhost/Site ifba/" title="Home">Home</a></li>
				<li><a href="http://www.camacari.ifba.edu.br/" title="Site do instituto">IFBA Camaçari</a></li>
				<li><a href="https://webmailzimbra.ifba.edu.br/" title="Webmail">Webmail</a></li>
				<li><a href="#" title="Contato">Contato</a></li>
			</ul>
		</nav>
	</section>
	<section class="content">
		<span class="location">
			Você está aqui: <a class="item-location" href="http://localhost/Site ifba/">Página Inicial</a> > <a class="item-location" href="http://localhost/Site ifba/noticias/">Noticias</a> <?php if (isset($_GET['id'])) {
				echo ">"; ?>
				<a class="item-location" href="http://localhost/Site ifba/noticias/?id=<?php echo $_GET['id']; ?>"><?php echo $line['TITULO'] ?></a>
				<?php } ?>
		</span>
		<nav class="lat-bar">
			<ul>
				<li><a href="../?page=Apresentacao">Apresentação</a></li>
				<li><a href="../?page=Processo-Seletivo">Processo Seletivo</a></li>
				<li><a href="../?page=Corpo-docente">Corpo docente</a></li>
				<li><a href="../?page=Disciplinas">Disciplinas</a></li>
				<li><a href="../?page=Pesquisa">Pesquisa</a></li>
				<li><a href="../?page=Extensao">Extensão</a></li>
				<li><a href="../?page=Album">Álbum</a></li>
			</ul>
		</nav>

		<section class="left-content">
			<?php if (!isset($_GET['id'])) {
				require_once 'list.php';
			}else {
				require_once 'noticia.php';
			}

			?>
		</section>
	</section>
	<div class="back-top">

	</div>

	<footer>
		<section class="footer">
			Copyright © 2017 Instituto Federal de Educação, Ciência e Tecnologia da Bahia - IFBA - Campus Camaçari. Todos os direitos reservados.
		</section>
	</footer>
</body>
</html>