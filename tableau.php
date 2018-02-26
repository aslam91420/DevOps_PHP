<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Liste des personnes</title>
    </head>

    <body>
     <p> <a href="formulaire.php"> Cliquer ici pour le formulaire d'ajout d'une nouvelle personne</a> </p>
    </body>
</html>

<?php
try
{
   $bdd = new PDO('mysql:host=localhost;dbname=devops;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

	 // Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT * FROM personne ORDER BY id');




while ($val = $reponse->fetch())
{
	?>
	<form method="post" action="delete.php">
	<p>
		<strong>Nom</strong> : <?php echo $val['nom']; ?>
		<strong>Prenom</strong> : <?php echo $val['prenom']; ?>
		<strong>Date de naissance</strong> : <?php echo $val['dateNaiss']; ?>
		<strong>Adresse</strong> : <?php echo $val['adresse']; ?>
		<strong>Telephone</strong> : <?php echo $val['tel']; ?>
		<strong>Mail</strong> : <?php echo $val['mail']; ?>
		<input type="hidden" name="id"  value = <?php echo $val['id']; ?> /> 
		<input type="submit" value="Supprimer la personne" />
	</p>
	
	</form>
	<?php
}

$reponse->closeCursor();


?>