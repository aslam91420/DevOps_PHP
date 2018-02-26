

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon Formulaire</title>
        <link rel="stylesheet" href="style.css" />

    </head>

    <body>
    	<h1>Formulaire</h1>
    		<div class = "formulaire">
    		<form method="post" action="save.php">
   				<label>Nom</label> : <input type="text" name="nom" />
   				<br />
   				<label>Prenom</label> : <input type="text" name="prenom" /><br />
   				<label>Date de naissance</label> : <input type="date" name="dateNaiss" />
   				<br />
   				<label>Adresse</label> : <input type="text" name="adresse" /><br />
   				<label>Numéro de téléphone</label> : <input type="text" name="tel" /><br />
   				<label>Adresse Mail</label> : <input type="text" name="mail" /><br />
   				<input type="submit" value="Enregistrer" />
			</form>
		</div>
  </br>
  <p> <a href="tableau.php"> Liste des personne</a> </p>
    </body>
</html>
