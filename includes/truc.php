<?php

// Connexion à la base de données

include "conexion.php";
// Récupération des 10 derniers messages
 $reponse = $bdd->query('SELECT m.*, u.color
                         FROM minichat m
                         LEFT JOIN user u ON u.pseudo = m.pseudo
                         ORDER BY ID DESC LIMIT 0, 10');



 //test erreur
if(!$reponse) {
    die("Erreur mysql : ".$bdd->errorInfo()[2]);
}



//affichage des messages
foreach ($reponse->fetchAll() as $message){
    echo '<p><strong style="color : '.$message['color'].'">' . htmlspecialchars($message['pseudo']) . '</strong> : ' . htmlspecialchars($message['message']) ." ". $message['date'] .'</p>';
}

?>