<?php include("conexao.php"); ?>

<?php
	$id = $_POST['id'];
	$url = $_POST['url'];
	$login = $_POST['login'];

	$sql = "DELETE FROM grade WHERE usuario = '$login' AND id_serie = $id";
	$mysqli->query($sql);

	header("Location: " . $url);
?>

<?php include("fechar_conexao.php"); ?>