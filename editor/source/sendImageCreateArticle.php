<?php require_once '../../source/conexao.php';
 require_once '../source/autenticar.php';

	if (isset($_POST['Titulo'])) {
		if (isset($_POST['Slider'])) {
		 	$slider = 1;
		 } else {
		 	$slider = 0;
		 }
		 $TITULO = $_POST['Titulo'];
		 $CURSO = $_POST['Curso'];

		if (isset($_FILES['imagem'])) {
			// Pasta onde o arquivo vai ser salvo
			$_UP['pasta'] = '../../images/capa-noticias/';
			// Tamanho máximo do arquivo (em Bytes)
			$_UP['tamanho'] = 1024 * 1024 * 2; // 2Mb
			// Array com as extensões permitidas
			$_UP['extensoes'] = array('jpg', 'png', 'gif');

			// Array com os tipos de erros de upload do PHP
			$_UP['erros'][0] = 'Não houve erro';
			$_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
			$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
			$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
			$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
			// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
			if ($_FILES['imagem']['error'] != 0) {
			  die("Não foi possível fazer o upload, erro: " . $_UP['erros'][$_FILES['imagem']['error']]."<br><a href='../new-article'>Voltar</a>");
			  exit; // Para a execução do script
			}
			// Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar
			// Faz a verificação da extensão do arquivo
			$extensao = strtolower(end(explode('.', $_FILES['imagem']['name'])));
			if (array_search($extensao, $_UP['extensoes']) === false) {
			  echo "Por favor, envie arquivos com as seguintes extensões: jpg, png ou gif";
			  echo "<br><a href='../new-article'>Voltar</a>";
			  exit;
			}
			// Faz a verificação do tamanho do arquivo
			if ($_UP['tamanho'] < $_FILES['imagem']['size']) {
			  echo "O arquivo enviado é muito grande, envie arquivos de até 2Mb.";
			  echo "<br><a href='../new-article'>Voltar</a>";
			  exit;
			}
			// O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta

			  $nome_final = $_FILES['imagem']['name'];
			  
			// Depois verifica se é possível mover o arquivo para a pasta escolhida
			if (move_uploaded_file($_FILES['imagem']['tmp_name'], $_UP['pasta'] . $nome_final)) {
			  // Upload efetuado com sucesso, será feita a inserção dos campos no banco de dados
				$qrMax=mysql_query("SELECT MAX(ID_NOTICIA) FROM noticias");
				$MAX = ((int)mysql_fetch_assoc($qrMax)) + 1;
				$AUTO = mysql_query("ALTER TABLE noticias AUTO_INCREMENT = '$MAX'");
				$query = mysql_query("INSERT INTO noticias (TITULO, IMAGEM, DATA, SLIDER, CURSO) VALUES ('$TITULO', '$nome_final', NOW(), '$slider', '$CURSO')") or die("Não foi possível criar o artigo, verifique o título da notícia<br>
					<a href='../new-article'>Voltar</a>");
				$query1 = mysql_query("SELECT * FROM noticias WHERE TITULO='$TITULO'");
				$line1 = mysql_fetch_assoc($query1);
			  	echo "<script>window.location.href='../?id=".$line1['ID_NOTICIA']."'</script>";
			} else {
			  // Não foi possível fazer o upload, provavelmente a pasta está incorreta
			  echo "Não foi possível enviar o arquivo, tente novamente";
			}
		}
		else {
			$query = mysql_query("INSERT INTO noticias (TITULO, DATA, SLIDER, CURSO) VALUES ('$TITULO', NOW(), '0', '$CURSO')");
			$query1 = mysql_query("SELECT * FROM noticias WHERE TITULO='$TITULO'");
			$line1 = mysql_fetch_assoc($query1);
			echo "<script>window.location.href='../?id=".$line1['ID_NOTICIA']."'</script>";
			
		}
	}
	else{
		header('Location: ../new-article');
	}
?>