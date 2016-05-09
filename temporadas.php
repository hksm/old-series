<?php
	$sql = "SELECT MAX(season) as season FROM episodio WHERE id_serie = $id AND data_exibicao <= SYSDATE()";
	$retorno = $mysqli->query($sql);
	$season_obj = $retorno->fetch_object();

	$season_atual = $season_obj->season;
	
	if (@$_GET['season'] != null) {
		if ($_GET['season'] <= $season_atual) {
			$season_atual = $_GET['season'];
		}
	}

	$sql = "SELECT e.id_serie, e.season, SUM(assistido) AS assistiram, AVG(nota) AS media FROM episodio e 
					LEFT JOIN assistido a ON e.id_serie = a.id_serie AND e.season = a.season AND e.numero = a.episodio 					
					WHERE e.id_serie = $id AND data_exibicao <= SYSDATE()
					GROUP BY e.id_serie, e.season 
					ORDER BY e.season DESC";
	$retorno = $mysqli->query($sql);

	while ($obj = $retorno->fetch_object()) {
?>
	<form action="salvar_marcacoes_db.php" method="post">
		<div class="episodios-box">
			<a href="serie.php?id=<?php echo $id; ?>&season=<?php echo $obj->season ?>">
				Temporada <?php echo $obj->season; ?>
			</a>

			<div class="glyphicons-right">
				<div class="icones">
					<span title="Total de assistidos">
						<img src="glyphicons/eye-open.png" class="glyphicon"><?php echo ' '.(isset($obj->assistiram) ? $obj->assistiram : 0) ?>
					</span>
					<span title="Média da temporada">
						<img src="glyphicons/star.png" class="glyphicon"><?php echo ' '.number_format($obj->media, 1) ?>
					</span>
				</div>
			</div>
		</div>

<?php
		if ($obj->season == $season_atual) {
			$sql = "SELECT *, SUM(assistido) AS assistidos, AVG(nota) AS media FROM episodio e 
					LEFT JOIN assistido a ON e.id_serie = a.id_serie AND e.season = a.season AND e.numero = a.episodio 					
					WHERE e.id_serie = $id AND e.season = $season_atual AND e.data_exibicao <= SYSDATE()
					GROUP BY e.id_serie, e.season, e.numero 
					ORDER BY e.numero DESC";
			$retorno_epis = $mysqli->query($sql);
?>
		<div class="sub-episodios-box">
			<table>
				<input type="hidden" name="usuario" value="<?php echo $_SESSION['login']; ?>">
				<input type="hidden" name="serie" value="<?php echo $id; ?>">
				<input type="hidden" name="season" value="<?php echo $season_atual; ?>">

			<?php if(isset($_SESSION['login'])) { ?>
				<tr>
					<td colspan="1"></td>
					<td colspan="2" class="marcar-tudo-td">Marcar temporada toda:</td>
					<td colspan="1" class="td-checkbox">
						<input type="checkbox" class="pull-right" name="tudo_assistido" value="1" title="Marcar tudo como assistido">
					</td>
					<td colspan="1">
						<select name="tudo_nota">
							<option value="-1">Nota</option>
							<?php
								for ($i = 10; $i > 0; $i--) {
									$option = '<option value="' . $i.'"';
									$option = $option . '>'.$i.'</option>';
									echo $option;
								}
							?>
						</select>
					</td>
					<td colspan="1"><div class="btn-enviar"><input type="submit" value="Enviar Tudo"></div></td>
				</tr>
			<?php } ?>
<?php
			if(isset($_SESSION['login'])) {
				$sql = "SELECT * FROM assistido WHERE usuario = '".$_SESSION['login']."' AND id_serie = $id AND season = $season_atual";
				$assistidos = $mysqli->query($sql)->fetch_all(MYSQLI_ASSOC);
			}
			
			while ($epis = $retorno_epis->fetch_object()) {

				if(isset($_SESSION['login'])) {
					foreach ($assistidos as &$epi_assistido) {
						if ($epi_assistido['episodio'] == $epis->numero) {
							$atual = $epi_assistido;
						}
					}
				}
?>
				<tr>
					<td class="align-center" title="Número"><?php echo $epis->numero; ?></td>
					<td title="Título"><?php echo $epis->nome; ?></td>
					<td title="Data de exibição" class="data-exib-td">
						<?php
							$data = new DateTime($epis->data_exibicao);
							echo $data->format('d/m/Y');
						?>
					</td>
					<td class="td-checkbox">
					<?php if(isset($_SESSION['login'])) { ?>
						<input type="checkbox" class="pull-right" name="epis[<?php echo $epis->numero ?>][assistido]" value="1" title="Marcar como assistido"
							<?php if (isset($atual) && $atual['assistido'] == 1) echo 'checked' ?>
						>
					<?php } ?>
					</td>
					<td class="nota-td">
					<?php if(isset($_SESSION['login'])) { ?>
						<select name="epis[<?php echo $epis->numero ?>][nota]">
							<option value="-1">Nota</option>
							<?php
								for ($i = 10; $i > 0; $i--) {
									$option = '<option value="' . $i.'"';
									if (isset($atual) && $atual['nota'] == $i) {
										$option = $option . ' selected';
									}
									$option = $option . '>'.$i.'</option>';
									echo $option;
								}
							?>
						</select>
					<?php } ?>
					</td>
					<td class="icones-td">
						<div class="icones">
							<span title="Assistiram">
								<img src="glyphicons/eye-open.png" class="glyphicon"><?php echo ' '.(isset($epis->assistidos) ? $epis->assistidos : 0 ) ?>
							</span>
							<span title="Média">
								<img src="glyphicons/star.png" class="glyphicon"><?php echo ' '.number_format($epis->media, 1) ?>
							</span>
						</div>
					</td>
				</tr>
<?php
				$atual = null;
			}
?>
			</table>
<?php 
			if(@$_GET['sucesso'] == 1) {
				echo '<div class="msg-pos">';
				echo "Marcações salvas.";
				echo '</div>';
			} else if(@$_GET['erro'] == 1) {
				echo '<div class="msg-neg">';
				echo "Erro ao salvar.";
				echo '</div>';
			}
 ?>
		</div>
<?php
		}
?>
	</form>
<?php
	}
?>

<div class="obs">
	<p>Observações:<p>
	<ol>
		<li>Clique na temporada para visualizar a lista de episódios correspondente;</li>
		<li>Episódios avaliados são marcados como assistidos automaticamente;</li>
		<li>Episódios marcados como assistidos não precisam ser avaliados necessariamente;.</li>
		<li>A opção de nota para a temporada toda não substitui notas atribuídas individualmente.</li>
	</ol>
</div>