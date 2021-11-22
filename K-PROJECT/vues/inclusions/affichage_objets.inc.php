<?php
//include_once("../../modele/image.class.php");

function afficherListeImages($tabImages) {
		echo '<div class="row">';
		// Boucle for qui parcours la liste des images
		foreach ($tabImages as $image){
			echo '<div class="single-dish col-lg-4">';
				echo '<blockquote class="generic-blockquote">';
				
					echo '<div class="thumb">';
						echo '<img class="img-fluid"  src="/K-PROJECT/images/'.$image->getChemin().'" alt=""  width="400"  />';
					echo '</div>';
				
					echo '<h4 class="text-uppercase pt-20 pb-20">'.$image->getTitre().'</h4>';
					
					echo '<p>'.$image->getDescription().'</p>';
					
					echo '<p>'.$image->getDatePublication().'</p>';
					
					echo '<h4> @ '.$image->getUtilisateur().'</h4>';
					
				echo '</blockquote>';
			echo '</div>';
		}
		echo '</div>';	
}

?>