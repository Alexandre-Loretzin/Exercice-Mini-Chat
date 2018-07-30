

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

if(!$reponse) {
    die($bdd->errorInfo()[2]);
}

foreach ($reponse->fetchAll() as $message){
    echo '<p><strong>' . htmlspecialchars($message['pseudo']) . '</strong> : ' . htmlspecialchars($message['message']) ." ". $message['date'] .'</p>';
}

?>
