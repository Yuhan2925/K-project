<?php

function afficherListeConfirmation($listeConfirm) {
	echo "<div class='alert alert-success'  role='alert'>";
	echo "<h4 class='alert-heading'>Confirmation</h4>";
	foreach ($listeConfirm as $confirm){
		echo "<p>".$confirm."</p>";
		
	}
	echo "</div>";
}

?>