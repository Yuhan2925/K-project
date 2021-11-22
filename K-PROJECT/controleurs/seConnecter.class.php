<?php
	//----------------------------- INCLUSIONS
	include_once(DOSSIER_BASE_INCLUDE."modele/DAO/UtilisateurDAO.class.php");
	include_once(DOSSIER_BASE_INCLUDE."controleurs/controleur.abstract.class.php");
	include_once(DOSSIER_BASE_INCLUDE."controleurs/manufactureControleur.class.php");
	class SeConnecter extends  Controleur {
		
		// ******************* Constructeur vide
		public function __construct() {
			parent::__construct();
		}
		

		// ******************* Méthode exécuter action
		public function executerAction() {
			//----------------------------- RETOURNER LE NOM DE LA VUE À APPELER -----
			 if($this->validerPOST()){
				$listeMonUser = UtilisateurDAO::chercherAvecFiltre("WHERE pseudonyme ='".$_POST['pseudonyme']."'AND mot_passe ='".$_POST['motpasse']."'");
				if(empty($listeMonUser) == true){
					array_push($this->messagesErreur, "mot de passe ou pseudonyme invalide");
				}
				else{
					$this->acteur= "membre";
					$_SESSION['userConnecter'] = $_POST['pseudonyme'];
					
					return"pageAccueil";
				}
				
			}
			return "pageConnexion";
		}

		private function validerPOST() {
			if(!ISSET($_POST['pseudonyme']) && !ISSET($_POST['motpasse'])){
				return false;
			}
			return true;
		}
		
	}	
	
?>