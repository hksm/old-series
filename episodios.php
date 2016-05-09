<?php include("conexao.php"); ?>

<?php
	$id = $_GET['id'];
	
	$sql = 'SELECT e.*, s.nome AS serie_nome FROM episodio e INNER JOIN serie s ON e.id_serie = s.id WHERE id = $id';
	$retorno = $mysqli->query($sql);
	$episodio = $retorno->fetch_object());
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $episodio.serie_nome . ' - ' . $episodio.nome; ?></title>
</head>
<body>

	<div>
		<img src="<?php echo $episodio.poster; ?>">
	</div>
	
	<h1>
		<a href="series.php?id=<?php echo $episodio->serie_id; ?>">
			<?php echo $episodio.serie_nome; ?>
		</a>
		<?php echo ' - ' . $episodio.temporada . 'x' . $episodio.numero	. ' - ' . $episodio.nome ?>
	</h1>

	<p>Data de Exibição: <?php echo $episodio->data_exibicao; ?></p>

	<?php include("footer.php") ?>
</body>
</html>

<?php include("fechar_conexao.php"); ?>