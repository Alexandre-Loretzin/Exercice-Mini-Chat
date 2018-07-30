<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=Minichat;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


 $req = $bdd->prepare('INSERT INTO Minichat.minichat (pseudo, message, date) VALUES(?, ?, NOW())');

 $req->execute(array($_POST['pseudo'], $_POST['message']));

setcookie("cookiepseudo", $_POST["pseudo"], time() + (86400 * 2), "/");


header("location: ../index.php" );

?>