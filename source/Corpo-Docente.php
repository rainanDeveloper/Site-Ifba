<?php require_once 'conexao.php'; ?>

<div class="content-pages">
	<h1 class="title-style1">Corpo Docente</h1>

	<div class="lista-docentes">
		<table class="table table-docentes">
			<tr>
				<th width="50%">Nome</th>
				<th class="text-center">Área</th>
				<th class="text-center">Currículo Lattes</th>
			</tr>
			<?php $query = mysql_query("SELECT * FROM corpo_docente");
			while ($line=mysql_fetch_assoc($query)) { ?>
			 	<tr>
			 		<td class="nome-lattes" width="50%"><a target="_blank" href="<?php echo($line['LINK_LATTES']) ?>"><?php echo $line['NOME']; ?></a></td>
			 		<td class="text-center"><?php echo $line['AREA']; ?></td>
			 		<td class="text-center nome-lattes"><a class="link-LATTES" target="_blank" title="ir para o Currículo do professor: <?php echo $line['NOME'] ?>" href="<?php echo $line['LINK_LATTES']?>">Currículo Lattes</a></td>
			 	</tr>
			 <?php } ?>
		</table>
	</div>
</div>