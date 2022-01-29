<?php
// Informations d'identification
define('DB_SERVER', 'localhost:3307');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'ominfos');
 
// Connexion à la base de données MySQL 
$omdataconn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Vérifier la connexion
if($omdataconn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>