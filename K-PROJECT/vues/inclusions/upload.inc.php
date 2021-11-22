<?php
	$target_dir = 'C:/UwAmp/www/K-PROJECT/images/';
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	
	// Check if file already exists
	if (file_exists($target_file)) {
		echo "<div class='alert alert-danger'  role='alert'>";
			echo "<h4 class='alert-heading'>Erreur</h4>";
			echo "<p> Il y'a eu une erreur avec le fichier</p>";
		echo "</div>";
		$uploadOk = 0;
	}
	
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif") {
		echo "<div class='alert alert-danger'  role='alert'>";
			echo "<h4 class='alert-heading'>Erreur</h4>";
			echo "<p> Il y'a eu une erreur avec le fichier</p>";
		echo "</div>";
		$uploadOk = 0;
	}
	
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "<div class='alert alert-danger'  role='alert'>";
			echo "<h4 class='alert-heading'>Erreur</h4>";
			echo "<p> Il y'a eu une erreur avec le fichier</p>";
		echo "</div>";
	// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			echo "<div class='alert alert-success'  role='alert'>";
			echo "<h4 class='alert-heading'>Confirmation</h4>";
			echo "<p>Fichier télécharger avec succes</p>";
		echo "</div>";
		} else {
			echo "<div class='alert alert-danger'  role='alert'>";
			echo "<h4 class='alert-heading'>Erreur</h4>";
			echo "<p> Il y'a eu une erreur avec le fichier</p>";
		echo "</div>";
		}
	}
?>
<?php
echo "<a href='?action=ajout'>";
echo "<div class='submit'>";
			echo "<input  type='submit' value='Retour' id='button-blue'/>";
			echo "<div class='ease'></div>";
echo "</div>";
echo "</a>";
?>