<?php include("conexao.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Grade</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>

	<?php include("navbar.php"); ?>

	<div class="container">
		<div class="sidebar sidebar-sm">
			<img src="avatares/<?php echo $_SESSION['login'] ?>.jpg">
			<form action="alterar_avatar.php" method="get">
				<input type="submit" value="Alterar avatar">
			</form>
			<?php 
				$usuario = $_SESSION['login'];
				$sql = "SELECT data_cadastro FROM usuario WHERE usuario = '$usuario'";
				$data_cadastro = $mysqli->query($sql)->fetch_object()->data_cadastro;
				$data = new DateTime($data_cadastro);

				$sql = "SELECT usuario, COUNT(assistido) AS total_assistidos, AVG(nota) AS media_geral FROM assistido WHERE usuario = '$usuario' AND assistido = 1";
				$assistido_info = $mysqli->query($sql)->fetch_object();
			?>
			<div class="usuario-info">
				<p><strong>Cadastro:</strong> <?php echo $data->format('d/m/Y') ?></p>
				<p><strong>Assistidos:</strong> <?php echo (is_null($assistido_info->total_assistidos) ? 0 : $assistido_info->total_assistidos) ?></p>
				<p><strong>Média Geral:</strong> <?php echo number_format($assistido_info->media_geral, 1) ?></p>
			</div>
		</div>

<?php 
	$sql = "SELECT COUNT(id_serie) AS total, s.status FROM grade g INNER JOIN serie s on g.id_serie = s.id WHERE usuario = '$usuario' GROUP BY status";
	$retorno_totais = $mysqli->query($sql);

	$ativas = 0;
	$finalizadas = 0;

	while ($totais = $retorno_totais->fetch_object()) {
		if ($totais->status == 'Finalizada') {
			$finalizadas += $totais->total;
		} else {
			$ativas += $totais->total;
		}
	}

	$sql = "SELECT COUNT(DISTINCT id_serie) AS total FROM assistido a WHERE usuario = '$usuario' AND NOT EXISTS (SELECT * FROM grade g WHERE a.id_serie = g.id_serie AND g.usuario = '$usuario')";
	$abandonadas = $mysqli->query($sql)->fetch_object()->total;
?>

		<div class="conteudo conteudo-lg">
			<div class="titulo">
				<h1>Grade</h1>
			</div>
			
			<div class="botoes">
				<ul>
					<li><a href="grade.php?opcao=1">Ativas (<?php echo $ativas ?>)</a></li>
					<li><a href="grade.php?opcao=2">Finalizadas (<?php echo $finalizadas ?>)</a></li>
					<li><a href="grade.php?opcao=3">Abandonadas (<?php echo $abandonadas ?>)</a></li>
				</ul>
			</div>

			<?php if (@$_GET['opcao'] == 2) { ?>

				<?php
					$login = $_SESSION['login'];
					$sql = "SELECT s.*, COUNT(e.numero) AS episodios, g.usuario, SUM(assistido) AS assistidos, AVG(nota) AS media, COUNT(nota) as cont_media 
							FROM serie s
							LEFT JOIN episodio e ON s.id = e.id_serie
							INNER JOIN grade g ON s.id = g.id_serie AND g.usuario = '$login'
							LEFT JOIN assistido a ON s.id = a.id_serie AND e.season = a.season AND e.numero = a.episodio AND e.season = a.season
							WHERE status = 'Finalizada'
							GROUP BY s.id";

					$retorno = $mysqli->query($sql);
					$em_dia = array();
					$atrasadas = array();

					while ($obj = $retorno->fetch_object()) {
						if ($obj->assistidos == $obj->episodios) {
							array_push($em_dia, $obj);
						} else {
							array_push($atrasadas, $obj);
						}
					}
				?>

				<div class="sub-conteudo">
					<h2>Completas</h2>
					<table class="listas-adm">
						<tr>
							<th>Série</th>
							<th>Vistos</th>
							<th>Média</th>
							<th>Notas</th>
						</tr>
						<?php foreach ($em_dia as $obj) { ?>
						<tr>
							<td><a href="serie.php?id=<?php echo $obj->id ?>"><?php echo $obj->nome ?></a></td>
							<td><?php echo (is_null($obj->assistidos) ? 0 : $obj->assistidos) . "/" . $obj->episodios ?></td>
							<td><?php echo (is_null($obj->media) ? '–' : number_format($obj->media, 1)) ?></td>
							<td><?php echo $obj->cont_media ?></td>
						</tr>
						<?php } ?>
					</table>
				</div>

				<div class="sub-conteudo">
					<h2>Em falta</h2>
					<table class="listas-adm">
						<tr>
							<th>Série</th>
							<th>Vistos</th>
							<th>Média</th>
							<th>Notas</th>
						</tr>
						<?php foreach ($atrasadas as $obj) { ?>
						<tr>
							<td><a href="serie.php?id=<?php echo $obj->id ?>"><?php echo $obj->nome ?></a></td>
							<td><?php echo (is_null($obj->assistidos) ? 0 : $obj->assistidos) . "/" . $obj->episodios ?></td>
							<td><?php echo (is_null($obj->media) ? '–' : number_format($obj->media, 1)) ?></td>
							<td><?php echo $obj->cont_media ?></td>
						</tr>
						<?php } ?>
					</table>
				</div>

			<?php } else if (@$_GET['opcao'] == 3) { ?>

				<?php
					$login = $_SESSION['login'];
					$sql = "SELECT s.*, COUNT(e.numero) AS episodios, a.usuario, SUM(assistido) AS assistidos, AVG(nota) AS media, COUNT(nota) as cont_media 
							FROM serie s
							LEFT JOIN episodio e ON s.id = e.id_serie
							LEFT JOIN assistido a ON s.id = a.id_serie AND e.season = a.season AND e.numero = a.episodio AND e.season = a.season
							WHERE a.usuario = '$login' AND
							NOT EXISTS (SELECT * FROM grade g WHERE g.usuario = '$login' AND g.id_serie = s.id) 
							GROUP BY s.id";

					$retorno = $mysqli->query($sql);
				?>

				<div class="sub-conteudo">
					<h2>Fora da grade</h2>
					<table class="listas-adm">
						<tr>
							<th>Série</th>
							<th>Vistos</th>
							<th>Média</th>
							<th>Notas</th>
						</tr>
						<?php while ($obj = $retorno->fetch_object()) { ?>
						<tr>
							<td><a href="serie.php?id=<?php echo $obj->id ?>"><?php echo $obj->nome ?></a></td>
							<td><?php echo (is_null($obj->assistidos) ? 0 : $obj->assistidos) . "/" . $obj->episodios ?></td>
							<td><?php echo (is_null($obj->media) ? '–' : number_format($obj->media, 1)) ?></td>
							<td><?php echo $obj->cont_media ?></td>
						</tr>
						<?php } ?>
					</table>
				</div>

			<?php } else { ?>

				<?php
					$login = $_SESSION['login'];
					$sql = "SELECT s.*, COUNT(e.numero) AS episodios, g.usuario, SUM(assistido) AS assistidos, AVG(nota) AS media, COUNT(nota) as cont_media 
							FROM serie s
							LEFT JOIN episodio e ON s.id = e.id_serie
							INNER JOIN grade g ON s.id = g.id_serie AND g.usuario = '$login'
							LEFT JOIN assistido a ON s.id = a.id_serie AND e.season = a.season AND e.numero = a.episodio AND e.season = a.season
							WHERE status <> 'Finalizada'
							GROUP BY s.id";

					$retorno = $mysqli->query($sql);
					$em_dia = array();
					$atrasadas = array();

					while ($obj = $retorno->fetch_object()) {
						if ($obj->assistidos == $obj->episodios) {
							array_push($em_dia, $obj);
						} else {
							array_push($atrasadas, $obj);
						}
					}
				?>

				<div class="sub-conteudo">
					<h2>Em dia</h2>
					<table class="listas-adm">
						<tr>
							<th>Série</th>
							<th>Vistos</th>
							<th>Média</th>
							<th>Notas</th>
						</tr>
						<?php foreach ($em_dia as $obj) { ?>
						<tr>
							<td><a href="serie.php?id=<?php echo $obj->id ?>"><?php echo $obj->nome ?></a></td>
							<td><?php echo (is_null($obj->assistidos) ? 0 : $obj->assistidos) . "/" . $obj->episodios ?></td>
							<td><?php echo (is_null($obj->media) ? '–' : number_format($obj->media, 1)) ?></td>
							<td><?php echo $obj->cont_media ?></td>
						</tr>
						<?php } ?>
					</table>
				</div>

				<div class="sub-conteudo">
					<h2>Atrasadas</h2>
					<table class="listas-adm">
						<tr>
							<th>Série</th>
							<th>Vistos</th>
							<th>Média</th>
							<th>Notas</th>
						</tr>
						<?php foreach ($atrasadas as $obj) { ?>
						<tr>
							<td><a href="serie.php?id=<?php echo $obj->id ?>"><?php echo $obj->nome ?></a></td>
							<td><?php echo (is_null($obj->assistidos) ? 0 : $obj->assistidos) . "/" . $obj->episodios ?></td>
							<td><?php echo (is_null($obj->media) ? '–' : number_format($obj->media, 1)) ?></td>
							<td><?php echo $obj->cont_media ?></td>
						</tr>
						<?php } ?>
					</table>
				</div>

			<?php } ?>
		</div>
	</div>
	<?php include("footer.php") ?>
</body>
</html>

<?php include("fechar_conexao.php"); ?>