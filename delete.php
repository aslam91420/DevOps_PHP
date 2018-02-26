<?php
try
{
   $bdd = new PDO('mysql:host=localhost;dbname=devops;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$id = $_POST['id'];


	$req = $bdd->prepare('DELETE FROM personne WHERE Id = :id');
	$req->execute(array(
    'id' => $id
    ))or die(print_r($req->errorInfo(), TRUE));

    echo 'Personne supprimé !';


header('Location: tableau.php');
?>

<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
  <p> <a href="tableau.php"> Retour vers la liste des personnes</a> </p>
</body>
</html>