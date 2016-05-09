<?php include("conexao.php"); ?>
<?php include("status_array.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Episódio</title>
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
				<h1>Cadastro de Episódio</h1>
			</div>
			<form action="cadastrar_episodio_db.php" method="post" class="form-cadastro">
				<?php
					$sql = "SELECT id, nome FROM serie";
					$retorno = $mysqli->query($sql);
				?>

				<div>
					<label for="serie">Série</label>
					<select name="id_serie" id="serie">
						<?php 
							while ($obj = $retorno->fetch_object()) {
						?>
						<option value="<?php echo $obj->id; ?>" <?php if(@$_GET['serie'] == $obj->id) echo 'selected'; ?>>
							<?php echo $obj->nome; ?>
						</option>
						<?php } ?>
					</select>
				</div>

				<div>
					<label for="season">Season</label>
					<input type="text" name="season" id="season"  maxlength="2" <?php if(isset($_GET['season'])) echo 'value="'.$_GET['season'].'"' ?>>
				</div>

				<div>
					<label for="numero">Número</label>
					<input type="text" name="numero" id="numero"  maxlength="2" <?php if(isset($_GET['numero'])) echo 'value="'.$_GET['numero'].'"' ?>>
				</div>

				<div>
					<label for="nome">Nome</label>
					<input type="text" name="nome" id="nome"  maxlength="255">
				</div>

				<div>
					<label for="data-exibicao">Data de Exibição</label>
					<input type="text" name="data-exibicao" id="data-exibicao"  maxlength="10" <?php if(isset($_GET['data_exibicao'])) echo 'value="'.$_GET['data_exibicao'].'"' ?>>
				</div>

				<div>
					<input type="submit" value="Enviar">
				</div>
			</form>
			

			<?php
				if(@$_GET['erro'] == 1) {
					echo '<div class="msg-neg">';
					echo "Não foi possível inserir o registro.";
					echo '</div>';
				} else if(@$_GET['ok'] == 1) {
					echo '<div class="msg-pos">';
					echo "Cadastrado com sucesso!";
					echo '</div>';
				}
			?>
		</div>
	</div>
	<?php include("footer.php") ?>
</body>
</html>

<?php include("fechar_conexao.php"); ?>