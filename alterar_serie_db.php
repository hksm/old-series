<?php include("conexao.php"); ?>

<?php
	$id = $_POST['id'];
	$nome = addslashes(trim($_POST['nome']));
	$canal = $_POST['id_canal'];
	$status = $_POST['status'];
	$inicio = $_POST['inicio'];
	$fim = ($_POST['fim'] != null ? $_POST['fim'] : 'null');
	$sinopse = ($_POST['sinopse'] != null ? $_POST['sinopse'] : 'null');

	$sql = "UPDATE serie SET nome = '$nome', id_canal = '$canal', status = '$status', inicio = $inicio, fim = $fim, sinopse = '$sinopse' WHERE id = $id";
	$mysqli->query($sql);

	if ($mysqli->affected_rows > 0) {
		header("Location: listar_series.php?ok=2");
	} else {
		header("Location: alterar_serie.php?erro=1&id=".$id);
	}
?>

<?php include("fechar_conexao.php"); ?>