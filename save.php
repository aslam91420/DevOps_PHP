<?php

try
{
   $bdd = new PDO('mysql:host=localhost;dbname=devops;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}



$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$date = $_POST['dateNaiss'];
$adresse = $_POST['adresse'];
$tel = $_POST['tel'];
$mail = $_POST['mail'];


	$req = $bdd->prepare('INSERT INTO personne(id,nom, prenom, dateNaiss, adresse, tel, mail) VALUES(null, :nom, :prenom, :dateNaiss, :adresse, :tel, :mail)');
	$req->execute(array(
    'nom' => $nom,
    'prenom' => $prenom,
    'dateNaiss' => $date,
    'adresse' => $adresse,
    'tel' => $tel,
    'mail' => $mail
    ))or die(print_r($req->errorInfo(), TRUE));

echo 'Personne ajouté !';

header('Location: formulaire.php');

?>
   <!DOCTYPE html>
<html>
       <p> <a href="formulaire.php"> Retour au formulaire</a> </p>
     </html>
