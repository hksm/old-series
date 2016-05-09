<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
</head>
<body>

	<?php include("navbar.php"); ?>

	<div class="login">
		<h1>Login</h1>

		<form action="login_db.php" method="post">
			<label id="login">Usuário</label>
			<input type="text" id="login" name="login" maxlength="50">

			<label id="senha">Senha</label>
			<input type="password" id="senha" name="senha" maxlength="20">

			<input type="submit" value="Entrar">
		</form>
	</div>
	
	<?php 
		if(@$_GET['erro'] == 1) {
			echo '<div class="msg-neg">';
			echo "Login Inválido!";
			echo '</div>';
		} else if(@$_GET['ok'] == 1) {
			echo '<div class="msg-pos">';
			echo "Usuário criado com sucesso!";
			echo '</div>';
		}
	?>
	
	<?php include("footer.php") ?>
</body>
</html>