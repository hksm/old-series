<?php include("conexao.php"); ?>

<?php
	$serie = $_GET['serie'];
	$season = $_GET['season'];
	$numero = $_GET['numero'];

	$sql = "DELETE FROM episodio WHERE id_serie = $serie AND season = $season AND numero = $numero";
	
	$mysqli->query($sql);

	if ($mysqli->affected_rows > 0) {
		header("Location: listar_episodios.php?ok=3");
	} else {
		header("Location: listar_episodios.php?erro=1");
	}
?>

<?php include("fechar_conexao.php"); ?>