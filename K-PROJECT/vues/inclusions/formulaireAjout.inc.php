<div class='row d-flex justify-content-center'><h1>Ajouter une vidéo</h1></div>
				<div id="form-div">
					<form class="form" id="form1" action=""" method="post" enctype="multipart/form-data">
						<p class="name">
							<input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Titre" id="name" />
						</p>
						<p class="text">
							<textarea name="comment" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Description"></textarea>
						</p>
						
						<div class="custom-file">
							<input class="custom-file-input" type="file" name="fileToUpload" id="fileToUpload" >
							<label class="custom-file-label" for="customFile">Choisir un fichier</label>
						</div>
						
						<br />
						<br />
						<div class="submit">
							<input type="submit" value="Upload Image" name="submit" id="button-blue" />
							<!-- L'animation sur "upload" -->
							<div class="ease"></div>
						</div>
					</form>
				</div>	