<?php include("conexao.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
</head>
<body>

	<?php include("navbar.php"); ?>

<?php
	if(@$_GET['erro'] == 1) {
		echo '<div class="msg-neg">';
		echo "Acesso negado.";
		echo '</div>';
	}
?>

	<div class="container">
		
		<div class="painel">
			<div class="titulo">
				<h1>Com episódio essa semana</h1>
			</div>
			
			<div>			
				<ul>
					<?php
						$sql = "SELECT s.*, c.nome AS canal, e.season, e.numero, e.data_exibicao FROM serie s 
								INNER JOIN canal c ON s.id_canal = c.id 
								INNER JOIN episodio e ON s.id = e.id_serie
								WHERE WEEK(e.data_exibicao) = WEEK(SYSDATE())
								AND YEAR(e.data_exibicao) = YEAR(SYSDATE())
								ORDER BY e.data_exibicao DESC";
						$retorno = $mysqli->query($sql);
						while ($serie = $retorno->fetch_object()) {
					?>

					<li class="thumbnail">
						<div class="thumbnail-inner">
							<a href="serie.php?id=<?php echo $serie->id ?>">
								<div class="info">
									<h3 class="pull-left"><?php echo $serie->nome ?></h3>
									<div class="numero">
										<?php
											$num = $serie->season . "x";
											if ($serie->numero < 10) {
												$num = $num . "0";
											}
											$num = $num . $serie->numero;
											echo $num;
										?>
									</div>
								</div>
								<img src="posters/<?php echo $serie->id ?>.jpg">
							</a>
						</div>
						<?php include("botao_adicionar_grade.php"); ?>
					</li>
				<?php
					}
				?>
				</ul>
			</div>
		</div>

		<div class="painel">
			<div class="titulo">
				<h1>Top 10 mais assistidas</h1>
			</div>
			
			<div>			
				<ul>
					<?php
						$sql = "SELECT s.id, s.nome, SUM(a.nota) AS cont FROM serie s 
								INNER JOIN assistido a ON s.id = a.id_serie 
								GROUP BY s.id ORDER BY cont DESC LIMIT 10";
						$retorno = $mysqli->query($sql);
						while ($serie = $retorno->fetch_object()) {
					?>

					<li class="thumbnail">
						<div class="thumbnail-inner">
							<a href="serie.php?id=<?php echo $serie->id ?>">
								<div class="info">
									<h3 class="pull-left"><?php echo $serie->nome; ?></h3>
									<div class="numero" title="Total de Assistidos">
										<?php echo $serie->cont; ?>
									</div>
								</div>
								<img src="posters/<?php echo $serie->id ?>.jpg">
							</a>
						</div>
						<?php include("botao_adicionar_grade.php"); ?>
					</li>
				<?php
					}
				?>
				</ul>
			</div>
		</div>
	</div>

	<?php include("footer.php") ?>
</body>
</html>

<?php include("fechar_conexao.php"); ?>