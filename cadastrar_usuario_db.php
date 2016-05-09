<?php include("conexao.php"); ?>

<?php
	$login = strtolower($_POST['login']);
	$senha = strtolower($_POST['senha']);
	$senha_confirm = strtolower($_POST['senha_confirm']);
	$nome = addslashes(trim($_POST['nome']));
	$email = strtolower($_POST['email']);

	if ($senha != $senha_confirm) {
		header("Location: cadastrar_usuario.php?erro=2");
	} else {
		$senha = md5($senha);

		$sql = "INSERT INTO usuario VALUES ('$login', '$senha', '$nome', '$email', 0, CURDATE())";
		$mysqli->query($sql);

		if ($mysqli->affected_rows > 0) {
			header("Location: login.php?ok=1");
		} else {
			header("Location: cadastrar_usuario.php?erro=1");
		}
	}
?>

<?php include("fechar_conexao.php"); ?>