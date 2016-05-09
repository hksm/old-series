<?php include("conexao.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Lista de Episódios</title>
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
				<h1>Episódios</h1>
			</div>
			
			<table class="listas-adm">
					<tr>
						<th>Série</th>
						<th>Epis.</th>
						<th>Nome</th>
						<th>Exibição</th>
						<th></th>
						<th></th>
					</tr>
					
					<?php
						$sql = "SELECT e.*, s.nome AS serie FROM episodio e INNER JOIN serie s ON e.id_serie = s.id";
						$retorno = $mysqli->query($sql);

						while ($obj = $retorno->fetch_object()) {
					?>

					<tr>
						<td><?php  echo $obj->serie ?></td>
						<td>
							<?php
								echo $obj->season . "x";
								if ($obj->numero < 10) {
									echo "0";
								}
								echo $obj->numero;
							?>
						</td>
						<td><?php  echo $obj->nome ?></td>
						<td>
							<?php
								if ($obj->data_exibicao == null) {
									echo "–";
								} else {
									$data = new DateTime($obj->data_exibicao);
									echo $data->format('d/m/Y');
								}
							?>
						</td>
						<td>
							<a href="alterar_episodio.php?serie=<?php echo $obj->id_serie; ?>&season=<?php echo $obj->season ?>&numero=<?php echo $obj->numero ?>">Alterar</a>					
						</td>
						<td>
							<a href="excluir_episodio_db.php?serie=<?php echo $obj->id_serie; ?>&season=<?php echo $obj->season ?>&numero=<?php echo $obj->numero ?>">Excluir</a>					
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