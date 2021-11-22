<?php
	include_once(DOSSIER_BASE_INCLUDE."controleurs/default.class.php");
	include_once(DOSSIER_BASE_INCLUDE."controleurs/galerie.class.php");
	include_once(DOSSIER_BASE_INCLUDE."controleurs/seConnecter.class.php");
	include_once(DOSSIER_BASE_INCLUDE."controleurs/seDeconnecter.class.php");
	include_once(DOSSIER_BASE_INCLUDE."controleurs/ajouterImage.class.php");
	include_once(DOSSIER_BASE_INCLUDE."controleurs/inscription.class.php");
	class ManufactureControleur {
		//  Méthode qui crée une instance du controleur associé à l'action
		//  et le retourne
		public static function creerControleur($action) {
			$controleur = null;
			if ($action == "galerie") {
				$controleur = new Galerie();	
			}
			else if ($action == "ajout") {
				$controleur = new ajoutImage();	
			} elseif ($action == "seConnecter") {
				$controleur = new SeConnecter();
			} elseif ($action == "inscrire") {
				$controleur = new Sinscrire();
			} elseif ($action == "seDeconnecter") {
				$controleur = new SeDeconnecter();
			}
			  else {
				$controleur = new Defaut();
			}
			return $controleur;
		}
	}
	
?>