<?php include("conexao.php"); ?>

<?php
	$id = $_GET['id'];

	$sql = "DELETE FROM serie WHERE id = $id";
	
	$mysqli->query($sql);

	if ($mysqli->affected_rows > 0) {
		unlink("posters/".$id.".jpg");
		header("Location: listar_series.php?ok=3");
	} else {
		header("Location: listar_series.php?erro=1");
	}
?>

<?php include("fechar_conexao.php"); ?>