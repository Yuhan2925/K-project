<!DOCTYPE html>

<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>Page d'accueil</title>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"/>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
		<script src="../js/index.js"></script>  
		<link rel="stylesheet" href="../css/style.css">
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
		
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"/> 
		<!-- CSS ============================================= -->	
	
		<link rel="stylesheet" href="K-PROJECT/css/linearicons.css"/>
		<link rel="stylesheet" href="K-PROJECT/css/font-awesome.min.css"/>
		<link rel="stylesheet" href="K-PROJECT/css/bootstrap.css"/>
		<link rel="stylesheet" href="K-PROJECT/css/magnific-popup.css"/>
		<link rel="stylesheet" href="K-PROJECT/css/nice-select.css"/>					
		<link rel="stylesheet" href="K-PROJECT/css/animate.min.css"/>
		<link rel="stylesheet" href="K-PROJECT/css/owl.carousel.css"/>
		<link rel="stylesheet" href="K-PROJECT/css/main.css"/>  <!-- Ex: background de la video -->	
		<link rel="shortcut icon" type="image/x-icon" href="../css/images/foodwarslogo2.png"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		
		<script src="K-PROJECT/js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="K-PROJECT/js/vendor/bootstrap.min.js"></script>			
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  		<script src="K-PROJECT/js/easing.min.js"></script>			
		<script src="K-PROJECT/js/hoverIntent.js"></script>
		<script src="K-PROJECT/js/superfish.min.js"></script>	
		<script src="K-PROJECT/js/jquery.ajaxchimp.min.js"></script>
		<script src="K-PROJECT/js/jquery.magnific-popup.min.js"></script>	
		<script src="K-PROJECT/js/webflow.js" type="text/javascript"></script>
	</head>

	<header id="header" id="home">
			<?php
			?>

			<?php
				include_once(DOSSIER_BASE_INCLUDE.'vues/inclusions/menu.inc.php');
				
				$tabOptions =	[DOSSIER_BASE_LIENS."||accueil",
								DOSSIER_BASE_LIENS."?action=galerie||galerie",
								DOSSIER_BASE_LIENS."?action=ajout||ajouter",
								DOSSIER_BASE_LIENS."?action=seConnecter||connexion",
								DOSSIER_BASE_LIENS."?action=inscrire||s'inscrire"];
				if ($controleur->getActeur() == "membre") {
					$tabOptions[3] = DOSSIER_BASE_LIENS."?action=seDeconnecter||Se deconnecter";
					array_splice($tabOptions, 4, 1);
				}
				else if ($controleur->getActeur() == "invite") {
					array_splice($tabOptions, 2, 1);
				}	
				afficherMenu($tabOptions);
			?>
	</header>
	
	<body>

		<!-- Section des plats principaux -->
		<section class="video-area">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content pb-60 col-lg-8">
						<div class="title text-center">
							<h1 class="mb-10">Galleries d'images</h1>
							<p class="mb-10">découvrez des créateurs sans limites!</p>
						</div>
					</div>
				</div>
				<div class="row d-flex justify-content-center">
					<div class="menu-content pb-60 col-lg-8">
						<!-- The form -->
						<form class="example" action="" method="post">
						  <input type="text" placeholder="Search.." name="search">
						  <button type="submit" ><i class="fa fa-search"></i></button>
						</form>
						
					</div>
				</div>
				
				<?php 
				include_once(DOSSIER_BASE_INCLUDE."vues/inclusions/affichage_erreurs.inc.php");
				if(count($controleur->getMessagesErreur()) != 0) {
					afficherListeErreurs($controleur->getMessagesErreur());
					echo "<img src='/K-PROJECT/images/nani.gif' width='200px'>";
				}
					include_once(DOSSIER_BASE_INCLUDE.'vues/inclusions/menu.inc.php');
				
					include_once(DOSSIER_BASE_INCLUDE."/modele/utilisateur.class.php");
					include_once(DOSSIER_BASE_INCLUDE."/modele/image.class.php");
					include_once(DOSSIER_BASE_INCLUDE."vues/inclusions/affichage_objets.inc.php");
					
					afficherListeImages($controleur->getTabImages());
				?>

			</div>
		</section>
		
	</body>
	
</html>
