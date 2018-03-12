<?php

require_once "modeles/ArticleModele.php";


if (isset($_GET['ajout'])){
    // on appelle la vue contenant le formulaire else{       }
    require_once "vues/forminsert.html.php";
}else {

    $articles = listeArtiAccueil($mysqli);

// on prend la vue

    require_once "vues/Admin.html.php";

}
