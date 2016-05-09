<?php include("conexao.php"); ?>

<?php
	$login = strtolower($_POST['login']);
	$senha = md5(strtolower($_POST['senha']));

	$sql = "SELECT * FROM usuario WHERE usuario = '$login' AND senha = '$senha'";

	$retorno = $mysqli->query($sql);

	if($retorno->num_rows > 0) {
		session_start();
		$_SESSION['login'] = $login;
		$usuario = $retorno->fetch_object();
		$_SESSION['nome'] = $usuario->nome;
		$_SESSION['prioridade'] = $usuario->prioridade;
		header("Location: index.php");
	} else {
		header("Location: login.php?erro=1");
	}
?>

<?php include("fechar_conexao.php"); ?>