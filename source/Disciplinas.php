<?php require_once 'conexao.php'; ?>

<div class="content-pages">
	<ul class="content-disc">
		<?php $query = mysql_query("SELECT * FROM cursos");
			while ($line=mysql_fetch_assoc($query)) { ?>
			<li><input type="CHECKBOX" name="tab-disc" class="tab-it" id="tab<?php echo $line['ID_CURSO']?>"><label for="tab<?php echo $line['ID_CURSO']?>"><div class="status-check"></div><?php echo $line['NOME']; ?></label>
				<div class="content-tab-disc">
					<table class="table table-disc">
						<tr>
							<th width="20%">COD</th>
							<th width="20%">Nome</th>
							<th>Descrição</th>
						</tr>
						<?php $query1 = mysql_query("SELECT * FROM disciplinas WHERE (disciplinas.ID_CURSO='$line[ID_CURSO]');");
						while ($line1=mysql_fetch_assoc($query1)) { ?>
							<tr>
								<td><span class="title-table-data"><?php echo $line1['COD_DISCIPLINA'];?></span></td>
								<td><span class="title-table-data"><?php echo $line1['NOME'];?></span></td>
								<td><span class="title-table-data"><?php echo $line1['DESCR'];?></span></td>
							</tr>

						<?php }?>
					</table>
				</div>
			</li>

			<?php }	?>
	</ul>

</div>