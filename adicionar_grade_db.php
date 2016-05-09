<?php include("conexao.php"); ?>

<?php
	$id = $_POST['id'];
	$url = $_POST['url'];
	$login = $_POST['login'];

	$sql = "INSERT INTO grade VALUES ('$login', $id)";
	$mysqli->query($sql);

	header("Location: " . $url);
?>

<?php include("fechar_conexao.php"); ?>