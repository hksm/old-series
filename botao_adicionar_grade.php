<?php
	if (isset($_SESSION['login'])) {
		
		$sql = "SELECT * FROM grade WHERE usuario = '".$_SESSION['login']."' AND id_serie = ".$serie->id;
		$retorno_botao_grade = $mysqli->query($sql);

		if ($retorno_botao_grade->num_rows > 0) {
			$acao = "remover_grade_db.php";
			$botao = "Remover da grade";
		} else {
			$acao = "adicionar_grade_db.php";
			$botao = "Adicionar à grade";
		}
?>
	<form action="<?php echo $acao; ?>" method="post">
		<input type="hidden" name="id" value="<?php echo $serie->id ?>">
		<?php 
			$url = "http://" .$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		?>
		<input type="hidden" name="url" value="<?php echo $url; ?>">
		<input type="hidden" name="login" value="<?php echo $_SESSION['login']; ?>">
		<input type="submit" value="<?php echo $botao ?>">
	</form>
<?php } ?>