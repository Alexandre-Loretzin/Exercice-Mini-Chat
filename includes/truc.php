<?php

// Connexion à la base de données

try{

    $bdd = new PDO('mysql:host=localhost;dbname=Minichat;charset=utf8', 'root', '');

}

catch(Exception $e){

        die('Erreur : '.$e->getMessage());

}

// Récupération des 10 derniers messages
 $reponse = $bdd->query('SELECT pseudo, message, date FROM Minichat.minichat ORDER BY ID DESC LIMIT 0, 10');

 while ($donnees = $reponse->fetch()){
    echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) ." ". $donnees['date'] .'</p>';
}
$reponse->closeCursor();

?>