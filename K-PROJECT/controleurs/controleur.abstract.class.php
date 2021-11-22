<?php
	abstract class Controleur{
		// ******************* Attributs 
		protected $messagesErreur = array();
		protected $messagesConfirmation = array();
		protected $acteur = "invite";
		private $tabImages = array();
		// ******************* Constructeur qui appelle la méthode determinerActeur
		public function __construct() {
			$this->determinerActeur();
		}
		
		// ******************* Accesseurs 
		public function getMessagesErreur() { return $this->messagesErreur; }
		public function getMessagesConfirmation() { return $this->messagesConfirmation; }
		public function getActeur() { return $this->acteur;}
		public function getTabImages() { return $this->tabImages; }

		// ******************* Méthode abstraite executer action
		// Cette méthode :
		//  - gère la session (s'il y en a une)
		//  - valide les données reçues en POST (s'il y en a)
		//  - effectue le travail requis par l'action (interactions avec les DAO, ...)
		//  - retourne le nom de la vue à appliquer (en format string, sans le chemin(path))
		abstract public function executerAction();
		
		// ******************* Méthode qui détermine l'acteur en fonction des variables de session
		private function determinerActeur() {
			session_start();
			if(ISSET($_SESSION['userConnecter'])){
				$this->acteur = "membre";
			}
			
		}
	}
	
?>