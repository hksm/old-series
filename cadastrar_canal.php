<?php include("paises_array.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Canal</title>
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
				<h1>Cadastro de Canal</h1>
			</div>

			<form action="cadastrar_canal_db.php" method="post" class="form-cadastro">
				<div>
					<label for="nome">Nome</label>
					<input type="text" name="nome" id="nome"  maxlength="255">
				</div>

				<div>
					<label for="pais">País</label>
					<select name="pais" id="pais">
						<?php foreach(LISTA_PAISES as &$valor) { ?>
							<option value="<?php echo $valor; ?>">
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
					echo "Não foi possível inserir o registro.";
					echo '</div>';
				}
			?>
		</div>
	</div>
	<?php include("footer.php") ?>
</body>
</html>