<?php
/**
 * Contrôleur gérant les articles
 */
// chargement des modeles
require_once "modeles/ArticleModele.php";

// on récupère les résumés d'articles depuis arti
$articles = listeArtiAccueil($mysqli);

// on prend la vue
require_once "vues/admin.html.php";
