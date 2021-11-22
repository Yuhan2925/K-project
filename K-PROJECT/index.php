<!DOCTYPE html>
<html lang="fr">
<head>
	<title>K-PROJECT</title>
	<meta charset="utf-8" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"/>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
		<script src="K-PROJECT/js/index.js"></script>  
		<link rel="stylesheet" href="css/style.css">
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
		<link rel="stylesheet" href="css/contact.css">		
		<link rel="stylesheet" href="css/linearicons.css"/>
		<link rel="stylesheet" href="css/font-awesome.min.css"/>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<link rel="stylesheet" href="css/magnific-popup.css"/>
		<link rel="stylesheet" href="css/nice-select.css"/>					
		<link rel="stylesheet" href="css/animate.min.css"/>
		<link rel="stylesheet" href="css/owl.carousel.css"/>
		<link rel="stylesheet" href="css/main.css"/>  <!-- Ex: background de la video -->	
		<link rel="shortcut icon" type="image/x-icon" href="../images/coffee-cup.svg"/>
		<script src="K-PROJECT/js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="K-PROJECT/js/vendor/bootstrap.min.js"></script>			
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  		<script src="K-PROJECT/js/easing.min.js"></script>			
		<script src="K-PROJECT/js/hoverIntent.js"></script>
		<script src="K-PROJECT/js/superfish.min.js"></script>	
		<script src="K-PROJECT/js/jquery.ajaxchimp.min.js"></script>
		<script src="K-PROJECT/js/jquery.magnific-popup.min.js"></script>	
		<script src="K-PROJECT/js/webflow.js" type="text/javascript"></script>
</head>
</html>
<?php
	// Définition des constantes pour les chemins absolus 
	define("DOSSIER_BASE_LIENS", "/K-PROJECT");  
	define("DOSSIER_BASE_INCLUDE", $_SERVER['DOCUMENT_ROOT']."K-PROJECT/");

	//Inclusion de la manufacture de controleur
	include_once(DOSSIER_BASE_INCLUDE."controleurs/manufactureControleur.class.php");
	// Obtenir le bon controleur en fonction de la variable action du get
	if(ISSET($_GET["action"])){
		$action = $_GET["action"];
	}
	// si cette variable n'existe pas, on utilisera une chaine de caractère vide
	else{
		$action = "";
	}
	// le controleur doit absolument être placé dans la variable $controleur pour que le reste fonctionne
	$controleur = ManufactureControleur::creerControleur($action);
	// Executer l'action sur le controleur et obtenir le nom de la vue
	$nomVue = $controleur->executerAction();
	// inclure la bonne vue
	include_once(DOSSIER_BASE_INCLUDE."vues/".$nomVue.".php");
?>
