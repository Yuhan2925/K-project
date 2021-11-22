<?php

// Classe représentant une image
class Image {
	// Attributs
	private $titre;
	private $date_publication;
	private $vues;
	private $description;
	private $chemin;
	private $utilisateur;
	
	//Permettra d'afficher le nombre de vues sur l'image
	public static $compteurVues=0;
	
	// Constructeur
	public function  __construct($titre, $description, $chemin, $utilisateur,$date_publication) {
	  $this->titre = $titre;
	  $this->datePublication = ('d F Y');
	  $this->vues = 0;
	  $this->description = $description;
	  $this->chemin = $chemin;
	  $this->utilisateur = $utilisateur;
	  $this->date_publication = $date_publication;
	}
	
	// Accesseurs et mutateurs
	public function getTitre() { return $this->titre; }
	public function getDatePublication() { return $this->date_publication; }
	public function getVues() { return $this->vues; }
	public function getDescription() { return $this->description; }
	public function getChemin() { return $this->chemin; }
	public function getUtilisateur() { return $this->utilisateur; }
	
	// Autres méthodes

	// Affichage
	public function __toString() {
		return $this->titre." (".$this->date_publication.") \n Nombre de vues : ".$this->vues."\n Description : ".$this->description."\n Publiée par : ".$this->utilisateur;
	}
}

?>