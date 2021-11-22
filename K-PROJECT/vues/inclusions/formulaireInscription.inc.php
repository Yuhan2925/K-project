<div id="form-div">
	<form action="" method="post" class="form" id="form1" >
		<p class="prenom">
			<input name="prenom" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Prénom" id="prenom" />
		</p>	

		<p class="nom">
			<input name="nom" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Nom" id="nom" />
		</p>
		
		<p class="pseudonyme">
			<input name="pseudo" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Pseudonyme" id="pseudo" />
		</p>
		
		<p class="motpasse">
			<input name="motpasse" type="password" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Mot de passe" id="motpasse" />
		</p>
		
		<p class="email">
			<input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
		</p>
		
		<div class="submit">
			<input type="submit" value="ENVOYER" id="button-blue"/>
			<div class="ease"></div>
		</div>
	</form>
</div>