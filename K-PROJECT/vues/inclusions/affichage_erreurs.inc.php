<?php

function afficherListeErreurs($listeErreurs) {
	echo "<div class='alert alert-danger'  role='alert'>";
	echo "<h4 class='alert-heading'>Erreurs!</h4>";
	foreach ($listeErreurs as $erreur){
		echo "<p>".$erreur."</p>";
		
	}
	echo "</div>";
}

?>