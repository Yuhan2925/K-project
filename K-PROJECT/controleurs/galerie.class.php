<?php
	include_once(DOSSIER_BASE_INCLUDE."controleurs/controleur.abstract.class.php");
	class Galerie extends  Controleur {
		//Attributs
		
		// ******************* Constructeur vide
		public function __construct() {
			parent::__construct();
		}
		
		// ******************* Accesseurs TabImages
		public function getTabImages() { return $this->tabImages; }

		// ******************* Méthode exécuter action
		public function executerAction() {
			if(ISSET($_POST['search'])){
				$this->tabImages = ImageDAO::chercherAvecFiltre("WHERE titre LIKE'%".$_POST['search']."%'");
				if(empty($this->tabImages) == true){
					array_push($this->messagesErreur, "Aucun résultat ne corresponde à vos recherches");
				}
			}
			else{
				$this->tabImages = ImageDAO::chercherTous();
			}
			return "galerieImage";
		}


		
	}	
	
?>