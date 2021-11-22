<?php
    //----------------------------- INCLUSIONS
	include_once(DOSSIER_BASE_INCLUDE."modele/DAO/UtilisateurDAO.class.php");
	include_once(DOSSIER_BASE_INCLUDE."controleurs/controleur.abstract.class.php");

	class SeDeconnecter extends  Controleur {

		// ******************* Constructeur vide
		public function __construct() {
			parent::__construct();
		}
		
		// ******************* Méthode exécuter action
		public function executerAction() {
			//----------------------------- VÉRIFIER LE TYPE D'ACTEUR -----------
			if($this->acteur != "membre"){
					array_push($this->messagesErreur, "Vous etes deja deconnecter");
				}
			else{
					unset($_SESSION['userConnecter']);
					$this->acteur = "invite";
				}
			//----------------------------- RETOURNER LE NOM DE LA VUE À APPELER -----
			return "pageAccueil";
		}

	}	
	
?>