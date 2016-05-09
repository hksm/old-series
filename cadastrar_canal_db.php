<?php include("conexao.php"); ?>

<?php
	$nome = addslashes(trim($_POST['nome']));
	$pais = $_POST['pais'];

	$sql = "INSERT INTO canal VALUES (NULL, '$nome', '$pais')";
	$mysqli->query($sql);

	if ($mysqli->insert_id > 0) {
		header("Location: listar_canais.php?ok=1");
	} else {
		header("Location: cadastrar_canal.php?erro=1");
	}
?>

<?php include("fechar_conexao.php"); ?>