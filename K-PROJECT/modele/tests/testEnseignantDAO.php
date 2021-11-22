<!DOCTYPE html>
<!------------------------------------------------------------------>
<!---- TP2 partie C                                              --->
<!---- Fichier de test pour la classe DAO Enseignant             ---> 
<!---- Auteurs : P. Coutu                                        --->
<!---- Date    : Automne 2019                                    --->
<!------------------------------------------------------------------>
<html lang="fr">
<head>
<title>TP2A_tests</title>
<meta charset="utf-8" />
<style rel="stylesheet" type="text/css">
h2 {
	background-color:black;
	color:white;
}
.note {
	color:#CCCCCC;
	font-style:italic;
} 
</style>
</head>
<body >
	<!-- ****************************************************************************************************** -->
	<!-- ****************** CETTE PARTIE SERA FAITE DANS LE CONTROLEUR PRINCIPAL PLUS TARD ******************** -->
	<?php
		define("DOSSIER_BASE_LIENS", "/TP2D");  
		define("DOSSIER_BASE_INCLUDE", $_SERVER['DOCUMENT_ROOT']."TP2D/");
	?>

	<?php
		include_once(DOSSIER_BASE_INCLUDE.'modele/DAO/EnseignantDAO.class.php');
		include_once(DOSSIER_BASE_INCLUDE.'vues/inclusions/affichage_objets.inc.php');
	?>

	<!---- Images des classes ---->
	<img alt='Diagramme de classes' src='<?php echo DOSSIER_BASE_LIENS;?>/images/ClassesEnseignantDAO.png' height='400' />
	
	<!---- Test méthode chercher ---->
	<h2>Méthode chercher : affichez dans un paragraphe l'enseignant #20001</h2>
	<?php
		$unEnseignant=EnseignantDAO::chercher(20001);
		echo "<p>".$unEnseignant."</p>";
	?>

	<!---- Test méthode chercherTous ---->
	<h2>Méthode chercherTous : affichez dans une liste tous les enseignants</h2>
	<p class="note">Note: utilisez la fonction afficherListeEnseignant($tab) du fichier affichage_objets.inc.php pour l'affichage</p>
	<?php
		$tabEnseignants=EnseignantDAO::chercherTous();
		afficherListeEnseignants($tabEnseignants);
	?>
	

	<!---- Test méthode insérer  ---->
	<h2>Méthode inserer : créez l'enseignant => #12345 Franz Ferdinand (mot passe : crosemont)</h2>
	<p class="note">Note: utilisez la fonction afficherListeEnseignant($tab) et la méthode chercherTous pour vérifier le résultat</p>
	<?php
		$unEnseignant = new Enseignant(12345, "Franz", "Ferdinand", "crosemont");
		EnseignantDAO::inserer($unEnseignant);
		$tabEnseignants=EnseignantDAO::chercherTous();
		afficherListeEnseignants($tabEnseignants);
	?>

	<!---- Test méthode supprimer  ---->
	<h2>Méthode supprimer : supprimez l'enseignant créé à la section précédente</h2>
	<p class="note">Note: utilisez la fonction afficherListeEnseignant($tab) et la méthode chercherTous pour vérifier le résultat</p>
	<?php
		EnseignantDAO::supprimer($unEnseignant);
		$tabEnseignants=EnseignantDAO::chercherTous();
		afficherListeEnseignants($tabEnseignants);
	?>

	<!---- Retour au fichier d'accueil -->
	<h3><a href='<?php echo DOSSIER_BASE_LIENS;?>/index.php'>Retour à la page d'accueil</a></h3>

	</body>
</html>
