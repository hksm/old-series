<?php include("conexao.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Lista de Séries</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
</head>
<body>
	<?php include("navbar.php") ?>
	<?php include("verifica_prioridade.php"); ?>
	
	<div class="container">
		<div class="sidebar sidebar-sm">
			<?php include("menu.php"); ?>
		</div>

		<div class="conteudo">
			<div class="titulo">
				<h1>Séries</h1>
			</div>
			
			<table class="listas-adm">
					<tr>
						<th>#</th>
						<th>Nome</th>
						<th>Canal</th>
						<th>Status</th>
						<th>Início</th>
						<th>Fim</th>
						<th></th>
						<th></th>
						<th></th>
					</tr>
					
					<?php
						$sql = "SELECT s.*, c.nome AS canal FROM serie s INNER JOIN canal c ON s.id_canal = c.id ORDER BY s.id;";
						$retorno = $mysqli->query($sql);

						while ($obj = $retorno->fetch_object()) {
					?>

					<tr>
						<td><?php  echo $obj->id ?></td>
						<td>
							<a href="<?php echo "serie.php?id=" . $obj->id ?>">
								<?php  echo $obj->nome ?>
							</a>
						</td>
						<td><?php  echo $obj->canal ?></td>
						<td><?php  echo $obj->status ?></td>
						<td><?php  echo $obj->inicio ?></td>
						<td>
							<?php
								if ($obj->fim == null) {
									echo "–";
								} else {
									echo $obj->fim;
								}
							?>
						</td>
						<td>
							<a href="cadastrar_episodio.php?serie=<?php echo $obj->id ?>">Episódios</a>					
						</td>
						<td>
							<a href="alterar_serie.php?id=<?php echo $obj->id ?>">Alterar</a>					
						</td>
						<td>
							<a href="excluir_serie_db.php?id=<?php echo $obj->id ?>">Excluir</a>					
						</td>
					</tr>

			<?php
				}
			?>
			</table>

			<p id="cont-lines">Existem <?php echo $retorno->num_rows ?> registro(s).</p>

			<?php 
				if(@$_GET['ok'] == 1) {
					echo '<div class="msg-pos">';
					echo "Cadastrado com sucesso!";
					echo '</div>';
				} else if(@$_GET['ok'] == 2) {
					echo '<div class="msg-pos">';
					echo "Alterado com sucesso!";
					echo '</div>';
				} else if(@$_GET['ok'] == 3) {
					echo '<div class="msg-pos">';
					echo "Removido com sucesso!";
					echo '</div>';
				} else if(@$_GET['erro'] == 1) {
					echo '<div class="msg-neg">';
					echo "Não foi possível remover o registro.";
					echo '</div>';
				}
			?>
		</div>
	</div>
	<?php include("footer.php") ?>
</body>
</html>

<?php include("fechar_conexao.php"); ?>