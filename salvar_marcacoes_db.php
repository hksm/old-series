<?php include("conexao.php"); ?>

<?php
	$id_serie = $_POST['serie'];
	$season = $_POST['season'];
	$usuario = $_POST['usuario'];

	foreach ($_POST['epis'] as $num_epis => $epis) {
		if (isset($epis['assistido']) || isset($_POST['tudo_assistido'])) {
			$assistido = 1;
		} else {
			$assistido = 0;
		}

		$nota = ($epis['nota'] > -1 ? $epis['nota'] : ($_POST['tudo_nota'] > -1 ? $_POST['tudo_nota'] : 'NULL'));

		if ($nota != 'NULL' && $assistido == 0) {
			$assistido = 1;
		}
		
		$sql = "REPLACE assistido VALUES ('$usuario', $id_serie, $season, $num_epis, $assistido, $nota)";
		$mysqli->query($sql);
		
		if ($mysqli->affected_rows > 0) {
			header("Location: serie.php?id=$id_serie&season=$season&sucesso=1");
		} else {
			header("Location: serie.php?id=$id_serie&season=$season&erro=1");
		}
	}
?>

<?php include("fechar_conexao.php"); ?>