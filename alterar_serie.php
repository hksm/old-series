<?php include("conexao.php"); ?>
<?php include("status_array.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Alteração de Série</title>
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
			$id = $_GET['id'];
			$sql = "SELECT * FROM serie WHERE id = $id";
			$retorno = $mysqli->query($sql);
			$obj = $retorno->fetch_object();
		?>

		<div class="conteudo">
			<div class="titulo">
				<h1>Alteração de Série</h1>
			</div>

			<form action="alterar_serie_db.php" method="post" class="form-cadastro">
				<input type="hidden" name="id" value="<?php echo $obj->id ?>">
				
				<div>
					<label for="nome">Nome</label>
					<input type="text" name="nome" id="nome" maxlength="255" value="<?php echo $obj->nome; ?>">
				</div>
				
				<?php
					$sql = "SELECT id, nome FROM canal";
					$retorno = $mysqli->query($sql);
				?>

				<div>
					<label for="canal">Canal</label>
					<select name="id_canal" id="canal">
						<?php 
							while ($canal = $retorno->fetch_object()) {
						?>
						<option value="<?php echo $canal->id; ?>" <?php if($canal->id == $obj->id_canal) echo 'selected="selected"'; ?>>
							<?php echo $canal->nome; ?>
						</option>
						<?php } ?>
					</select>
				</div>

				<div>
					<label for="status">Status</label>
					<select name="status" id="status">
						<?php foreach(LISTA_STATUS as &$valor) { ?>
							<option value="<?php echo $valor; ?>" <?php if($valor == $obj->status) echo 'selected="selected"'; ?>>
								<?php echo $valor; ?>
							</option> 
						<?php } ?>
					</select>
				</div>

				<div class="input-inline">
					<div>
						<label for="inicio">Ano de Início</label>
						<input type="text" name="inicio" id="inicio" maxlength="4" value="<?php echo $obj->inicio; ?>">
					</div>

					<div>
						<label for="fim">Ano de Finalização</label>
						<input type="text" name="fim" id="fim" maxlength="4" <?php if($obj->fim != null) echo 'value="'.$obj->fim.'"'; ?>>
					</div>
				</div>

				<div>
					<label for="sinopse">Sinopse</label>
					<textarea name="sinopse" id="sinopse"></textarea>
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