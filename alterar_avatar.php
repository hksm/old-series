<?php include("conexao.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Alterar Avatar</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
</head>
<body>
	<?php include("navbar.php"); ?>
	<?php include("verifica_prioridade.php"); ?>
	
	<div class="container">
		<div class="sidebar">
			<img src="avatares/<?php echo $_SESSION['login'] ?>.jpg">
		</div>

		<div class="conteudo">
			<div class="titulo">
				<h1>Alterar Avatar</h1>
			</div>

			<form action="alterar_avatar_db.php" method="post" enctype="multipart/form-data" class="form-cadastro">
				<input type="hidden" name="usuario" value="<?php echo $_SESSION['login'] ?>">
				<div>
					<label for="avatar">Imagem</label>
					<input type="file" name="avatar" id="avatar">
				</div>
									
				<div>
					<input type="submit" value="Enviar">
				</div>
			</form>
			
			<?php
				if(@$_GET['erro'] == 1) {
					echo '<div class="msg-neg">';
					echo "Não foi possível alterar o avatar.";
					echo '</div>';
				} else if(@$_GET['erro'] == 2) {
					echo '<div class="msg-neg">';
					echo "Extensão não suportada.<br>Insira uma imagem no formato '.jpg'.";
					echo '</div>';
				}
			?>
		</div>
	</div>
	<?php include("footer.php") ?>
</body>
</html>

<?php include("fechar_conexao.php"); ?>