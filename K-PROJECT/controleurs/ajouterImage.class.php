<?php
	include_once(DOSSIER_BASE_INCLUDE."controleurs/controleur.abstract.class.php");
	include_once(DOSSIER_BASE_INCLUDE."modele/DAO/ImageDAO.class.php");
	class ajoutImage extends  Controleur {
		
		// ******************* Constructeur vide
		public function __construct() {
			parent::__construct();
		}
		

		// ******************* Méthode exécuter action
		public function executerAction() {
			//----------------------------- RETOURNER LE NOM DE LA VUE À APPELER -----
			if($this->validerPOST()){
				date_default_timezone_set('America/Toronto'); //Il faut set le default time zone pour eviter un message d'erreur
				$uneImage = new Image($_POST['name'],$_POST['comment'],$_FILES['fileToUpload']['name'],$_SESSION['userConnecter'],date("Y/m/d"));
				ImageDAO::inserer($uneImage);
				return "inclusions/upload.inc";
			}
			return "pageAjoutImage";
		}
		
		private function validerPOST() {
			if (count($_POST) == 0 ) {
				return false;
			}
			else{
				if(EMPTY($_POST['name'])){
					array_push($this->messagesErreur,"Vous devez obligatoirement insérer un titre");
					return false;
				}
				else{
					return true;
				}
			}
		}
	}	
	
?>