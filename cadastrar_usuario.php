<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
</head>
<body>

	<?php include("navbar.php"); ?>
	<?php include("verifica_prioridade.php"); ?>

	<div class="login">
		<h1>Cadastrar</h1>

		<form action="cadastrar_usuario_db.php" method="post">
			<label id="login">Usuário</label>
			<input type="text" id="login" name="login" maxlength="50">

			<label id="senha">Senha</label>
			<input type="password" id="senha" name="senha" maxlength="20">
			
			<label id="senha_confirm">Repita a Senha</label>
			<input type="password" id="senha_confirm" name="senha_confirm" maxlength="20">

			<label id="nome">Nome</label>
			<input type="text" id="nome" name="nome" maxlength="255">

			<label id="email">E-mail</label>
			<input type="text" id="email" name="email" maxlength="255">

			<input type="submit" value="Cadastrar">
		</form>
	</div>
	
	<?php
		if(@$_GET['erro'] == 1) {
			echo '<div class="msg-neg">';
			echo "Não foi possível realizar o cadastro.";
			echo '</div>';
		} else if(@$_GET['erro'] == 2) {
			echo '<div class="msg-neg">';
			echo "Senhas digitadas não conferem.";
			echo '</div>';
		}
	?>
	<?php include("footer.php") ?>
</body>
</html>