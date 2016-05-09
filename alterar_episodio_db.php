<?php include("conexao.php"); ?>

<?php
	$nome = addslashes(trim($_POST['nome']));
	$id_serie = $_POST['id_serie'];
	$season = $_POST['season'];
	$numero = $_POST['numero'];

	if ($_POST['data-exibicao'] != null) {
		$data_exibicao = DateTime::createFromFormat('d/m/Y', $_POST['data-exibicao']);
		$data_exibicao = $data_exibicao->format('Y-m-d');
	} else {
		$data_exibicao = 'null';
	}

	$sql = "UPDATE episodio SET nome = '$nome', data_exibicao = '$data_exibicao' WHERE id_serie = $id_serie AND season = $season AND numero = $numero";
	$mysqli->query($sql);

	if ($mysqli->affected_rows > 0) {
		header("Location: listar_episodios.php?ok=2");
	} else {
		header("Location: alterar_episodio.php?erro=1&serie=".$id_serie."&season=".$season."&numero=".$numero);
	}
?>

<?php include("fechar_conexao.php"); ?>