<?php
	//----------------------------- INCLUSIONS
	include_once(DOSSIER_BASE_INCLUDE."modele/DAO/UtilisateurDAO.class.php");
	include_once(DOSSIER_BASE_INCLUDE."controleurs/controleur.abstract.class.php");
	class Sinscrire extends  Controleur {
		
		// ******************* Constructeur vide
		public function __construct() {
			parent::__construct();
		}
		

		// ******************* Méthode exécuter action
		public function executerAction() {
			if($this->validerPOST()){
				$unUser = new Utilisateur($_POST['nom'],$_POST['prenom'],$_POST['pseudo'],$_POST['motpasse'],$_POST['email']);
				UtilisateurDAO::inserer($unUser);
				array_push($this->messagesConfirmation,"Inscription effectuer avec succes");
			}
			//----------------------------- RETOURNER LE NOM DE LA VUE À APPELER -----
			return "pageInscription";
		}


		private function validerPOST() {
			$valide=true;
			$listeParametres = ['nom', 'prenom', 'pseudo', 'motpasse','email'];
			if (count($_POST) == 0 ) {
				$valide = false;
			}
			else{
				foreach ($listeParametres as $parametre) {
					if (EMPTY($_POST[$parametre]) ) {
						$valide=false;
						array_push($this->messagesErreur,"Assurez vous de remplir tous les champs");
						break;
					}
				}
				if(strlen(trim($_POST['pseudo'])) < 8 || strlen(trim($_POST['motpasse'])) < 8 ){
					$valide=false;
					array_push($this->messagesErreur,"Votre pseudo et/ou mot de passe doit contenir au moins 8 caractères");
				}
				if(strpos($_POST['email'],"@")==false){
					$valide=false;
					array_push($this->messagesErreur,"Votre email doit contenir un @");
				}
				if(strpbrk($_POST['motpasse'], '1234567890')==false){
					$valide=false;
					array_push($this->messagesErreur,"Votre mot de passe doit contenir au moins un numero");
				}
			}
			return $valide;
		}
	}	
	
?>