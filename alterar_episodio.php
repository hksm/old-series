<?php include("conexao.php"); ?>
<?php include("status_array.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Alteração de Episódio</title>
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

		<?php 
			$id_serie = $_GET['serie'];
			$season = $_GET['season'];
			$numero = $_GET['numero'];
			$sql = "SELECT * FROM episodio WHERE id_serie = $id_serie AND season = $season AND numero = $numero";
			$retorno = $mysqli->query($sql);
			$obj = $retorno->fetch_object();
		?>

		<div class="conteudo">
			<div class="titulo">
				<h1>Alteração de Episódio</h1>
			</div>

			<form action="alterar_episodio_db.php" method="post" class="form-cadastro">				
				<?php
					$sql = "SELECT id, nome FROM serie";
					$retorno = $mysqli->query($sql);
				?>

				<div>
					<label for="serie">Série</label>
					<select name="id_serie" id="serie">
						<?php 
							while ($serie = $retorno->fetch_object()) {
						?>
						<option value="<?php echo $serie->id; ?>" <?php if($serie->id == $obj->id_serie) echo 'selected'; ?>>
							<?php echo $serie->nome; ?>
						</option>
						<?php } ?>
					</select>
				</div>

				<div>
					<label for="season">Season</label>
					<input type="text" name="season" id="season"  maxlength="2" value="<?php echo $obj->season; ?>">
				</div>

				<div>
					<label for="numero">Número</label>
					<input type="text" name="numero" id="numero"  maxlength="2" value="<?php echo $obj->numero; ?>">
				</div>

				<div>
					<label for="nome">Nome</label>
					<input type="text" name="nome" id="nome"  maxlength="255" value="<?php echo $obj->nome; ?>">
				</div>
				<?php 
					$data = new DateTime($obj->data_exibicao);
				?>
				<div>
					<label for="data-exibicao">Data de Exibição</label>
					<input type="text" name="data-exibicao" id="data-exibicao"  maxlength="10" value="<?php echo $data->format('d/m/Y'); ?>">
				</div>

				<div>
					<input type="submit" value="Enviar">
				</div>
			</form>
			

			<?php
				if(@$_GET['erro'] == 1) {
					echo '<div class="msg-neg">';
					echo "Não foi possível alterar o registro.";
					echo '</div>';
				}
			?>
		</div>
	</div>
	<?php include("footer.php") ?>
</body>
</html>

<?php include("fechar_conexao.php"); ?>