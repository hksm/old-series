<?php include("conexao.php"); ?>

<?php
	$nome = addslashes(trim($_POST['nome']));
	$id_canal = $_POST['id_canal'];
	$status = $_POST['status'];
	$inicio = $_POST['inicio'];
	$fim = ($_POST['fim'] != null ? $_POST['fim'] : 'null');
	$sinopse = ($_POST['sinopse'] != null ? $_POST['sinopse'] : 'null');

	$sql = "INSERT INTO serie VALUES (NULL, $id_canal, '$nome', '$status', $inicio, $fim, '$sinopse')";
	
	$mysqli->query($sql);

	$temp_poster = $_FILES['poster']['tmp_name'];
	$nome = $_FILES['poster']['name'];

	$caminho_partes = pathinfo($_FILES["poster"]["name"]);
	$extensao = $caminho_partes['extension'];

	if ($mysqli->insert_id > 0) {
		
		if(!$_FILES['poster']['error'] && $extensao == 'jpg') {
			move_uploaded_file($temp_poster, 'posters/'.$mysqli->insert_id.'.jpg');
		}

		header("Location: listar_series.php?ok=1");
	} else {
		header("Location: cadastrar_serie.php?erro=1");
	}
?>

<?php include("fechar_conexao.php"); ?>