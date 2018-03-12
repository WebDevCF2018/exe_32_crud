<?php
/**
 * Contrôleur gérant l'adùministration
 */

// chargement des modeles
require_once "modeles/ArticleModele.php";

// si on a cliqué sur ajouter
if (isset($_GET['ajout'])) {

    // on appel la vue contenant le formulaire
    require_once "vues/FormInsert.html.php";

} else {

// on récupère les résumés d'articles depuis arti
    $articles = listeArtiAccueil($mysqli);

// on prend la vue
    require_once "vues/Admin.html.php";
}