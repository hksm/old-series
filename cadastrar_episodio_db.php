<?php include("conexao.php"); ?>

<?php

	$nome = addslashes(trim($_POST['nome']));
	$id_serie = $_POST['id_serie'];
	$season = $_POST['season'];
	$numero = $_POST['numero'];

	if ($_POST['data-exibicao'] != null) {
		$data_exibicao = DateTime::createFromFormat('d/m/Y', $_POST['data-exibicao']);
		$data_exibicao = $data_exibicao->format('Y-m-d');
	}

	$sql = "INSERT INTO episodio VALUES ($id_serie, $season, $numero, '$nome',";
	if (isset($data_exibicao)) {
		$sql = $sql . " '$data_exibicao')";
	} else {
		$sql = $sql . " null)";
	}
	$mysqli->query($sql);

	if ($_POST['data-exibicao'] != null) {
		$nova_data = new DateTime($data_exibicao);
		$nova_data->add(new DateInterval('P7D'));
		$nova_data = $nova_data->format('d/m/Y');
	}
	
	$numero++;
	
	if ($mysqli->affected_rows > 0) {
		header("Location: cadastrar_episodio.php?ok=1&serie=$id_serie&season=$season&numero=$numero&data_exibicao=$nova_data");
	} else {
		header("Location: cadastrar_episodio.php?erro=1&serie=$id_serie&season=$season&numero=".--$numero."&data_exibicao=".$_POST['data-exibicao']);
	}
?>

<?php include("fechar_conexao.php"); ?>