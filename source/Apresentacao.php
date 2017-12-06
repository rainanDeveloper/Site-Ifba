<?php require_once 'conexao.php'; ?>

<div class="content-pages">
	<?php $query = mysql_query("SELECT conteudo FROM apresentacao");
			$line=mysql_fetch_assoc($query);
			echo $line["conteudo"];
	?>

</div>