<?php
// controleur gérant l'administration

require_once "modeles/ArticleModele.php";

if(isset($_GET['ajout'])){
require_once "vues/formInsert.html.php";
}else {

    $articles = listeArtiAccueil($mysqli);
    require_once "vues/Admin.html.php";
}