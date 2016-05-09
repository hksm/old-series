<?php include("conexao.php"); ?>

<?php
	$id = $_GET['id'];
	
	$sql = "SELECT s.*, c.nome AS canal FROM serie s INNER JOIN canal c ON s.id_canal = c.id WHERE s.id = $id";
	$retorno = $mysqli->query($sql);
	$serie = $retorno->fetch_object();
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $serie->nome; ?></title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>

	<?php include("navbar.php"); ?>

	<div class="container">
		<div class="sidebar">
			<img src="posters/<?php echo $serie->id ?>.jpg">
			<?php include("botao_adicionar_grade.php"); ?>
			<form action="alterar_poster.php" method="get">
				<input type="hidden" name="id" value="<?php echo $serie->id ?>">
				<input type="submit" value="Alterar imagem da capa">
			</form>
		</div>

		<div class="conteudo">
			<div class="titulo">
				<h1><?php echo $serie->nome; ?></h1>
				<h2>
					<?php
						echo "(" . $serie->inicio;
						if ($serie->fim != null) {
							echo "-" . $serie->fim;
						}
						echo ")";
					?>
				</h2>
			</div>
			<div class="serie-info">
				<p><strong>Status:</strong> <?php echo $serie->status; ?></p>
				<p><strong>Canal:</strong> <?php echo $serie->canal; ?></p>
				<p>
					<strong>Sinopse:</strong>
					<div class="sinopse">
						<?php echo $serie->sinopse; ?>
					</div>
				</p>
			</div>

			<?php include("temporadas.php"); ?>
		</div>
	</div>
	<?php include("footer.php") ?>
</body>
</html>

<?php include("fechar_conexao.php"); ?>