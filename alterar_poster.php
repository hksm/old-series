<?php include("conexao.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Alterar Imagem da Capa</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
</head>
<body>
	<?php include("navbar.php"); ?>
	<?php include("verifica_prioridade.php"); ?>
	
	<div class="container">
		<div class="sidebar sidebar-sm">
			<?php include("menu.php"); ?>
		</div>

		<div class="conteudo">
			<div class="titulo">
				<h1>Alterar Imagem da Capa</h1>
			</div>

			<form action="alterar_poster_db.php" method="post" enctype="multipart/form-data" class="form-cadastro">

				<?php
					$id = $_GET['id'];

					$sql = "SELECT id, nome FROM serie";
					$retorno = $mysqli->query($sql);
				?>

				<div>
					<label for="canal">Série</label>
					<select name="id" id="serie">
						<?php 
							while ($obj = $retorno->fetch_object()) {
						?>
						<option value="<?php echo $obj->id; ?>" <?php if($obj->id == $id) echo 'selected="selected"' ?>>
							<?php echo $obj->nome; ?>
						</option>
						<?php } ?>
					</select>
				</div>

				<div>
					<label for="poster">Poster</label>
					<input type="file" name="poster" id="poster">
				</div>
									
				<div>
					<input type="submit" value="Enviar">
				</div>
			</form>
			

			<?php
				if(@$_GET['erro'] == 1) {
					echo '<div class="msg-neg">';
					echo "Não foi possível alterar o poster.";
					echo '</div>';
				}
			?>
		</div>
	</div>
	<?php include("footer.php") ?>
</body>
</html>

<?php include("fechar_conexao.php"); ?>