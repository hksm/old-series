<?php include("conexao.php"); ?>

<?php
	$id = $_POST['id'];
	$nome = addslashes(trim($_POST['nome']));
	$pais = $_POST['pais'];

	$sql = "UPDATE canal SET nome = '$nome', pais = '$pais' WHERE id = $id";
	$mysqli->query($sql);

	if ($mysqli->affected_rows > 0) {
		header("Location: listar_canais.php?ok=1");
	} else {
		header("Location: alterar_canal.php?erro=1&id=".$id);
	}
?>

<?php include("fechar_conexao.php"); ?>