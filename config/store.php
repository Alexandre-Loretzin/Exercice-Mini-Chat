<?php
//appel de RandomColor
use \Colors\RandomColor;

include '../vendor/autoload.php';

// Connexion à la base de données
include "../includes/conexion.php";

 //fonction pour recuperer l'IP
 function getIp(){
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
               return $_SERVER['HTTP_CLIENT_IP'];
           } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
               return $_SERVER['HTTP_X_FORWARDED_FOR'];
           } else {
               return $_SERVER['REMOTE_ADDR'];
           }
       }

//insertion dans la BDD des messages ip et user agent
 $req = $bdd->prepare("INSERT INTO minichat (pseudo, message, ip, userAgent ) VALUES(?, ?, ?, ? )");
 $req->execute(array($_POST['pseudo'], $_POST['message'], getIp(), $_SERVER['HTTP_USER_AGENT']));

 //verification de l'existance du pseudo
$pseudoExist = $bdd->prepare('SELECT COUNT(*) FROM user WHERE pseudo = ?');
$pseudoExist->execute([$_POST["pseudo"]]);


//Si le pseudo n'existe pas, créer la variable sql
if ($pseudoExist->fetchColumn() === "0"){
        $addpseudo = $bdd->prepare('INSERT INTO user (pseudo, color) VALUES (?, ?)');
        $addpseudo->execute(array($_POST['pseudo'], RandomColor::one() ));
}

//test erreur
if(!$req) {
        die("Erreur mysql : ".$bdd->errorInfo()[2]);
 }

//creation cookie pseudo
setcookie("cookiepseudo", $_POST["pseudo"], time() + (86400 * 2), "/");

// Redirection
//header("location: ../index.php" );

