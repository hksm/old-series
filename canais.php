<?php include("conexao.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Canais</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
</head>
<body>
	<?php //include("verifica_session.php") ?>
	<?php include("navbar.php") ?>
	
	<div class="container">

		<div class="sidebar sidebar-sm">
			<h3>Canais</h3>
			<ul>
				<?php
					$sql = "SELECT * FROM canal ORDER BY nome";
					$retorno_canal = $mysqli->query($sql);

					while ($canal = $retorno_canal->fetch_object()) { ?>
					
						<li><a href="canais.php?canal=<?php echo $canal->nome ?>"><?php echo $canal->nome ?></a></li>
				<?php } ?>
			</ul>
		</div>

		<div class="conteudo conteudo-lg">
			<div class="titulo">
				<h1>
					<?php
						if (@$_GET['canal'] != null) {
							echo $_GET['canal'];
						} else {
							echo "Todos";
						}
					?>
				</h1>
			</div>
			
			<div class="painel">			
				<ul>
					<?php
						$sql = "SELECT s.*, c.nome AS canal FROM serie s INNER JOIN canal c ON s.id_canal = c.id";
						
						if (@$_GET['canal'] != null) {
							$sql = $sql . " WHERE c.nome = '".$_GET['canal']."'";
						}

						$sql = $sql .  " ORDER BY s.id";

						$retorno = $mysqli->query($sql);

						while ($serie = $retorno->fetch_object()) {
					?>

					<li class="thumbnail">
						<div class="thumbnail-inner">
							<a href="serie.php?id=<?php echo $serie->id ?>">
								<div class="info">
									<h3><?php  echo $serie->nome ?></h3>
									<p><?php
										echo $serie->inicio;
										if ($serie->fim != null) {
											echo "-" . $serie->fim;
										}
									?></p>

								</div>
								<img src="posters/<?php echo $serie->id ?>.jpg">
							</a>
						</div>
						<form>
							<input type="submit" value="Adicionar à Grade">
						</form>
					</li>
				<?php
					}
				?>
				</ul>
			</div>
		</div>
	</div>

	<?php include("footer.php") ?>
	<?php include("footer.php") ?>
</body>
</html>

<?php include("fechar_conexao.php"); ?>