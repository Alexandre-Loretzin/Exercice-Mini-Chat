<?php 
// namespace SuperPDO;


// class superPDO
// {
//     private $config;

//       // Configuration de la class
//     public function __construct(){
//         $this->config = include(__DIR__."/../config/app.php");
//     }

//     private static $pdo;

//     static public function connect($config) {
//         static::$pdo = new \PDO($config["dsn"], $config["user"], $config["password"]);
        

// }

try{

$bdd = new PDO('mysql:host='.(getenv('MYSQL_HOST') ?: 'localhost').';dbname=Minichat_Loretzin_Alexandre;charset=utf8', 'root', '');

}

catch(Exception $e){

    die('Erreur : '.$e->getMessage());

}


