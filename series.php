<?php include("conexao.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Séries</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
</head>
<body>
	<?php //include("verifica_session.php") ?>
	<?php include("navbar.php") ?>
	
	<div class="container">
		<div class="titulo">
			<h1>Séries</h1>
		</div>
		
		<?php 
			if (@$_GET['busca'] != null) {
				echo '<div><h2>Busca por '.$_GET['busca'].'</h2></div>';
			}
		?>
		
		<div>			
			<ul>
				<?php
					$sql = "SELECT s.*, c.nome AS canal FROM serie s INNER JOIN canal c ON s.id_canal = c.id";
					
					if (@$_GET['busca'] != null) {
						$sql = $sql." WHERE LOWER(s.nome) like '%".$_GET['busca']."%'";
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
					<?php include("botao_adicionar_grade.php"); ?>
				</li>
			<?php
				}
			?>
			</ul>
		</div>
	</div>

	<?php include("footer.php") ?>
</body>
</html>

<?php include("fechar_conexao.php"); ?>