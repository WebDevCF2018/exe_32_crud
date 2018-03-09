<?php
/**
 * Connexion générique à notre serveur MySQL en utilisant
 * une connexion mysqli procédurale ( avec gestion d'erreur
 * de connexion et utilisation d'UTF-8 )
 * Notre connexion se trouve dans la variable
 * $mysqli
 * N'oubliez pas d'importer les constantes de connexion
 * à la base de donnée
 */

// on met dans la variable $mysqli notre connexion à une DB MySQL
$mysqli = @mysqli_connect(DB_HOST,DB_LOGIN,DB_PWD,DB_NAME,DB_PORT);

// on vérifie si la connexion a échoué (existance d'une erreur mysqli_connect)
if(mysqli_connect_error($mysqli)){
    // Arrêt du script avec affichage de l'erreur
    die("Numéro d'erreur: ".mysqli_connect_errno($mysqli)."<br>Affichage de l'erreur: ".utf8_encode(mysqli_connect_error($mysqli)));
}

// encodage des communications entre la db et php (choix de l'utf8)
mysqli_set_charset($mysqli,DB_CHARSET);
