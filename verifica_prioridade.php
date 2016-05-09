<?php
	if (@$_SESSION['prioridade'] < 1) { 
		header("Location: index.php?erro=1");
	}
?>