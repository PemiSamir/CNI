<html>
	<head>
		<title> inscription au lycee</title>

		<link rel="stylesheet" href="style.css">
	</head>

	<body>
		<form method="POST" action="traitement.php" enctype="multipart/form-data">
			<h3 align="left"> Formulaire de données </h3> <br>

				<fieldset>
					<legend>Informations</legend>
					<label name="nom"> Nom : </label><input type="text" size="90" name="nom" required> <br><br>
					<label name="prenom"> Prenom : </label> <input type="text" size="40" name="prenom"> <br><br>
					<label name="date"> Date de naissance : </label> <input type="date" size="50" name="date" required> <br><br>
					<label name="lieu"> Lieu de naissance : </label> <input type="text" size="40" name="lieu" required> <br><br>

					<label name="sexe"> sexe : </label> 
						<input type="radio" name="sexe" value="M" required> <label> masculin</label>
						<input type="radio" name="sexe" value="F" required> <label> feminin </label> <br><br>
					
					<label name="taille"> Taille : </label> <input type="text" size="40" name="taille" required> <br><br>

					<label name="profession"> Profession : </label> <input type="text" size="40" name="profession" required> <br><br>
					<label name="pere"> Nom du père : </label><input type="text" size="40" name="pere" required> <br><br>
					<label name="mere"> Nom de la mère : </label> <input type="text" size="40" name="mere" required> <br><br>
					<label name="adresse"> Adresse : </label> <input type="text" size="40" name="adresse" required> <br><br>

					
					<label name="tel"> Telephone : </label> <input type="text" size="30"  name="tel"> <br><br>
					<label name="image"> Photo : </label> <input type="file" size="30" name="image" onchange="document.getElementById('append-big-btn').value = this.value;" required>
					<input type="text" id="append-big-btn" placeholder="no file selected" name="voir" hidden> <br><br>

					<input type="submit" value="Valider">     
					<input type="reset" value="Effacer"> <br>
				</fieldset>
		</form>
	</body>
</html>