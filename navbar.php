<?php
	session_start();
?>

<div class="navbar">
	<div class="container">
		<ul>
			<li><a href="index.php" class="marca">SÉRIES</a></li>
			<li><a href="index.php">Home</a></li>
			<?php if (isset($_SESSION['login'])) echo '<li><a href="grade.php">Grade</a></li>';  ?>
			<li><a href="series.php">Séries</a></li>
			<li><a href="canais.php">Canais</a></li>
		</ul>

		<form class="input-pesquisa" action="series.php" method="get">
			<input type="text" name="busca" placeholder="Pesquisar Série">
			<button type="submit" title="Pesquisar"><img src="glyphicons/search.png"></button>
		</form>

	<?php if (!isset($_SESSION['login'])) {  ?>

		<p><a href="cadastrar_usuario.php">Cadastrar</a></p>
		<p><a href="login.php">Entrar</a></p>
	
	<?php } else { ?>
		
		<p><a href="logoff.php">Sair</a></p>	
		<p><span class="usuario" title="Usuário ativo"><?php echo $_SESSION['nome'] ?></span></p>

	<?php } ?>

	<?php if (@$_SESSION['prioridade'] > 0) { ?>
		<p><a href="listar_series.php">Dashboard</a></p>
	<?php } ?>
	</div>
</div>