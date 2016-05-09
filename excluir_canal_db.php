<?php include("conexao.php"); ?>

<?php
	$id = $_GET['id'];

	$sql = "DELETE FROM canal WHERE id = $id";
	
	$mysqli->query($sql);

	if ($mysqli->affected_rows > 0) {
		header("Location: listar_canais.php?ok=3");
	} else {
		header("Location: listar_canais.php?erro=1");
	}
?>

<?php include("fechar_conexao.php"); ?>