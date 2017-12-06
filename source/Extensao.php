<?php require_once 'conexao.php'; ?>

<div class="content-pages">
	<?php $query = mysql_query("SELECT conteudo FROM pesquisa");
			$line=mysql_fetch_assoc($query);
			echo $line["conteudo"];
	?>

</div>