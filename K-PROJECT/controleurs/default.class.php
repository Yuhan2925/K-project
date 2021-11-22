<?php
	include_once(DOSSIER_BASE_INCLUDE."controleurs/controleur.abstract.class.php");
	class Defaut extends  Controleur {
		//Attributs
		
		// ******************* Constructeur vide
		public function __construct() {
			parent::__construct();
		}
		
		// ******************* Accesseurs TabImages

		// ******************* Méthode exécuter action
		public function executerAction() {
			return "pageAccueil";
		}


		
	}	
	
?>