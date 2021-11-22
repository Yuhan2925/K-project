<div class='row d-flex justify-content-center'><h1>Se connecter</h1></div>

<div id="form-div">
	<form class="form" id="form1" method="post">
		<p class="pseudonyme">
			<input name="pseudonyme" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Pseudonyme" id="pseudonyme" />
		</p>
		
		<p class="motpasse">
			<input name="motpasse" type="password" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Mot de passe" id="motpasse" />
		</p>
		
		<div class="submit">
			<input type="submit" value="ENVOYER" id="button-blue"/>
			<div class="ease"></div>
		</div>
	</form>
</div>
