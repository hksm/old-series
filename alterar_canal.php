<?php include("conexao.php"); ?>
<?php include("paises_array.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Alteração de Canal</title>
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
			$sql = "SELECT * FROM canal WHERE id = $id";
			$retorno = $mysqli->query($sql);
			$obj = $retorno->fetch_object();
		?>

		<div class="conteudo">
			<div class="titulo">
				<h1>Alteração de Canal</h1>
			</div>

			<form action="alterar_canal_db.php" method="post" class="form-cadastro">
				<input type="hidden" name="id" value="<?php echo $obj->id ?>">

				<div>
					<label for="nome">Nome</label>
					<input type="text" name="nome" id="nome" maxlength="255" value="<?php echo $obj->nome ?>">
				</div>

				<div>
					<label for="pais">País</label>
					<select name="pais" id="pais">
						<?php foreach(LISTA_PAISES as &$valor) { ?>
							<option value="<?php echo $valor; ?>" <?php if($valor == $obj->pais) echo 'selected="selected"' ?>>
								<?php echo $valor; ?>
							</option> 
						<?php } ?>
					</select>
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