<?php include("conexao.php"); ?>

<?php
	$id = $_POST['id'];
	$temp_poster = $_FILES['poster']['tmp_name'];
	$nome = $_FILES['poster']['name'];

	$caminho_partes = pathinfo($_FILES["poster"]["name"]);
	$extensao = $caminho_partes['extension'];

	if(!$_FILES['poster']['error'] && $extensao == 'jpg') {
		move_uploaded_file($temp_poster, 'posters/'.$id.'.jpg');
		header("Location: serie.php?id=$id");
	} else {
		header("Location: alterar_poster.php?id=$id&erro=1");
	}

?>

<?php include("fechar_conexao.php"); ?>