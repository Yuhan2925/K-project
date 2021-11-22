<!DOCTYPE html>
<!------------------------------------------------------------------>
<!---- TP2 partie A                                              --->
<!---- Fichier de test pour les classes Enseignant et Evaluation ---> 
<!---- Auteurs : P. Coutu                                        --->
<!---- Date    : Automne 2019                                    --->
<!------------------------------------------------------------------>
<html lang="fr">
<head>
<title>TP2A_tests</title>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../../css/styleTable.css" />
</head>
<body >
	<img alt="Diagramme de classes" src="../../images/classesEvaluations.png" height="400" />
	<?php include_once('../evaluation.class.php');?>

	<!---- Création d'un ensignant ---->
	<h1>Fichier de test pour la classe Enseignant</h1>
	<?php 
		$unProf=new Enseignant(12345,"Alice","Anctil","InfoRosemont"); 
	?>

	<!---- Utilisation et affichage des méthodes -->
	<table>
		<thead>
			<tr>
				<th>Méthode</th>
				<th>Résultat</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>toString</td>
				<td> <?php echo $unProf; ?></td>
			</tr>
			<tr>
				<td>getNumeroEmploye</td>
				<td> <?php echo $unProf->getNumeroEmploye(); ?></td>
			</tr>
			<tr>
				<td>getPrenom</td>
				<td> <?php echo $unProf->getPrenom(); ?></td>
			</tr>
			<tr>
				<td>getNom</td>
				<td> <?php echo $unProf->getNom(); ?></td>
			</tr>
			<tr>
				<td>changerMotPasse (succes)</td>
				<td> <?php echo $unProf->changerMotPasse("InfoRosemont","crosemont") ? 'vrai' : 'faux'; ?></td>
			</tr>
			<tr>
				<td>changerMotPasse (trop court)</td>
				<td> <?php echo $unProf->changerMotPasse("crosemont","trocour") ? 'vrai' : 'faux'; ?></td>
			</tr>
			<tr>
				<td>changerMotPasse (mauvais ancien)</td>
				<td> <?php echo $unProf->changerMotPasse("MauvaisMDP","NouveauMDP") ? 'vrai' : 'faux'; ?></td>
			</tr>
			<tr>
				<td>getMotPasse</td>
				<td> <?php echo $unProf->getMotPasse(); ?></td>
			</tr>
		</tbody>
	</table>
	<br/>
	
	<!---- Création d'une evaluation ---->
	<h1>Fichier de test pour la classe Evaluation</h1>
	<?php 
		$uneEval=new Evaluation("420-G16-RO","TP2 : Php, la base","Travaux Pratiques",88,$unProf); 
	?>

	<!---- Utilisation et affichage des méthodes -->
	<table>
		<thead>
			<tr>
				<th>Méthode</th>
				<th>Résultat</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>toString</td>
				<td><?php echo $uneEval; ?></td>
			</tr>
			<tr>
				<td>getCodeCours()</td>
				<td><?php echo $uneEval->getCodeCours(); ?></td>
			</tr>
			<tr>
				<td>getCategorie()</td>
				<td><?php echo $uneEval->getCategorie(); ?></td>
			</tr>
			<tr>
				<td>getDescription()</td>
				<td><?php echo $uneEval->getDescription(); ?></td>
			</tr>
			<tr>
				<td>getProf()</td>
				<td><?php echo $uneEval->getProf(); ?></td>
			</tr>
			<tr>
				<td>set/getPoids()</td>
				<td><?php $uneEval->setPoids(8);echo $uneEval->getPoids(); ?></td>
			</tr>
		</tbody>
	</table>
	<br/>

	<!---- Retour au fichier d'accueil -->
	<h2><a href="../../index.php">Retour à la page d'accueil</a></h2>
</body>
</html>
