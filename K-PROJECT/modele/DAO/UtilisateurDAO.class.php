<?php
	// Importe lle fichier de configuration de la BD
	include_once(DOSSIER_BASE_INCLUDE."modele/DAO/configs/configBD.interface.php");
	// Importe l'interface DAO et la classe Image
	include_once(DOSSIER_BASE_INCLUDE."modele/DAO/DAO.interface.php");
	include_once(DOSSIER_BASE_INCLUDE."modele/utilisateur.class.php");

	class UtilisateurDAO implements DAO {	
		// Cette méthode doit retourner l'objet dont la clé primaire a été reçu en paramètre
		// Notes : 1) On retourne null si non-trouvé, 
		//         2) Si la clé primaire est composée, alors le paramètre est un tableau assiociatif
		// ici la seule $clés est un int représentant le code du Image
		
		public static function chercher($cles) { 
			try {
				$connexion=ConnexionDB::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD."); 
			}
			// valeur par défaut pour la variable à retourner si non-trouvée
			$unUser=null; 
			
			// Préparer une requête de type PDOStatement avec des paramètres SQL	
			$requete= $connexion->prepare("SELECT * FROM utilisateur WHERE pseudonyme=:unPseudo");
			// Attacher des variables PHP au paramètres SQL avec le code du Image 
			// reçu du paramètre $cles
			$requete->bindParam(":unPseudo",$cles);  
		  
			// Exécuter la requête
			$requete->execute();			
			
			// Analyser l’enregistrement, s’il existe, et créer l’instance de Image
			if ($requete->rowCount() > 0) {
				$enregistrement=$requete->fetch();
				$unUser=new Utilisateur($enregistrement['nom'], $enregistrement['prenom'], $enregistrement['pseudonyme'], $enregistrement['mot_passe'], $enregistrement['courriel']);
			}
			// fermer le curseur de la requête et la connexion à la BD
			$requete-> closeCursor();
			ConnexionDB::close();	
		  
			return $unUser;	 
		} 
		
		// Cette méthode doit retourner une liste de tous les objets reliés à la table de la BD
		static public function chercherTous() { 
			return self::chercherAvecFiltre("");
		} 
		
		// Comme la méthode chercherTous, mais en applicant le filtre (clause WHERE ...) reçue en param.
		static public function chercherAvecFiltre($filtre){ 
			try {
				$connexion=ConnexionDB::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD."); 
			}
			// initialisation du tableau vide
			$liste = array(); 
				
			// Préparer une requête de type PDOStatement avec des paramètres SQL	
			$requete= $connexion->prepare("SELECT * FROM utilisateur ".$filtre);

			// Exécuter la requête
			$requete-> execute();			

			// Analyser les enristrements s'il y en a 
			foreach ($requete as $enregistrement) {
				$unUser=new Utilisateur($enregistrement['nom'], $enregistrement['prenom'], $enregistrement['pseudonyme'], $enregistrement['mot_passe'], $enregistrement['courriel']);

				array_push($liste, $unUser);
			}
			// fermer le curseur de la requête et la connexion à la BD
			$requete-> closeCursor();
			ConnexionDB::close();	
			
			return $liste;	 
		} 
		// Cette méthode insère l'objet reçu en paramètre dans la table
		// Retourne true/false selon que l'opération a été un succès ou pas.
		static public function inserer($unUser) {
			try {
				$connexion=ConnexionDB::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD."); 
			}
			
			$requete = $connexion->prepare("INSERT INTO utilisateur (nom,prenom,pseudonyme,mot_passe,courriel) VALUES (?,?,?,?,?)");
			return	$requete-> execute(array($unUser->getNom(),$unUser->getPrenom(),$unUser->getPseudonyme(),$unUser->getMotPasse(),$unUser->getCourriel()));
		}
		// Cette méthode modifie tous les champs (non-clé primaire) de l'objet reçu en paramètre dans la table
		// Retourne true/false selon que l'opération a été un succès ou pas.
		static public function modifier($unUser) {
			try {
				$connexion=ConnexionDB::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD."); 
			}
			$commandeSQL = "UPDATE utilisateur SET nom='".$unUser->getNom()."',prenom='".$unUser->getPrenom();
			$commandeSQL .= "',mot_passe=".$unUser->getMotPasse()."',courriel='".$unUser->getCourriel()." WHERE pseudonyme=".$unUser->getPseudonyme();
			$requete = $connexion->prepare($commandeSQL);
			return	$requete->execute();
		}
		// Cette méthode supprime l'objet reçu en paramètre de la table
		// Retourne true/false selon que l'opération a été un succès ou pas.
		static public function supprimer($unUser){
			try {
				$connexion=ConnexionDB::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD."); 
			}
			$commandeSQL = "DELETE FROM utilisateur WHERE pseudonyme=".$unUser->getPseudonyme();
			$requete = $connexion->prepare($commandeSQL);
			return	$requete->execute();
		} 
	}
	
?>