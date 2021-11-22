<?php

// Classe représentant un Utilisateur
class Utilisateur {
	// Attributs
	private $nom;
	private $prenom;
	private $pseudonyme;
	private $mot_passe;
	private $courriel;
	
	// Constructeur
	public function  __construct($unNom, $unPrenom, $unPseudonyme, $unMotPasse, $unCourriel) {
	  $this->nom = $unNom;
	  $this->prenom = $unPrenom;
	  $this->pseudonyme = $unPseudonyme;
	  $this->mot_passe = $unMotPasse;
	  $this->courriel = $unCourriel;
	}
	
	// Accesseurs et mutateurs
	public function getNom() { return $this->nom; }
	public function getPrenom() { return $this->prenom; }
	public function getPseudonyme() { return $this->pseudonyme; }
	public function getMotPasse() { return $this->mot_passe; }
	public function getCourriel() { return $this->courriel; }
	
	// Autres méthodes
	public function changerMotPasse($ancien, $nouveau) {
		$test = false;
		// Si bon ancien mot de passe et au moins 8 cararcteres,on modifie
		if ($ancien == $this->motPasse && strlen($nouveau) >= 8) {
			$test = true;
			$this->motPasse = $nouveau;
		} 
		return $test;
	}	
	// Affichage
	public function __toString() {
		return "";
	}
	
}
?>