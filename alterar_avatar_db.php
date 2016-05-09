<?php include("conexao.php"); ?>

<?php
	$usuario = $_POST['usuario'];
	$temp_avatar = $_FILES['avatar']['tmp_name'];
	$nome = $_FILES['avatar']['name'];

	$caminho_partes = pathinfo($_FILES["avatar"]["name"]);
	$extensao = $caminho_partes['extension'];

	if($extensao == 'jpg') {
		header("Location: alterar_avatar.php?erro=2");

		if (!$_FILES['avatar']['error']) {
			move_uploaded_file($temp_avatar, 'avatares/'.$usuario.'.jpg');
			header("Location: grade.php");
		}

	} else {
		header("Location: alterar_avatar.php?erro=1");
	}

?>

<?php include("fechar_conexao.php"); ?>