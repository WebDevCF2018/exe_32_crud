<?php
/**
 * Contrôleur gérant l'adùministration
 */

// chargement des modeles
require_once "modeles/ArticleModele.php";

// si on a cliqué sur ajouter
if (isset($_GET['ajout'])) {

    // si le formulaire a été envoyé
    if(isset($_POST['letitre'],$_POST['letexte'])){

        // on met nos variables POST en variables locales, on protège nos variables contre une éventuelle attaque sql
        $titre = htmlspecialchars(strip_tags(trim($_POST['letitre'])),ENT_QUOTES);
        $texte = htmlspecialchars($_POST['letexte'],ENT_QUOTES);

        // on va chercher la méthode qui permet d'insérer un nouvel article (modeles/ArticleModele.php)
        $envoi = insertArti($mysqli,$titre,$texte);

        // l'article est bien inséré
        if($envoi){
            // redirection accueil admin
            header("Location: ./?admin");
        }else{
            // l'article ne s'est pas inséré, on permet à l'utilisateur de retourner sur le formulaire déjà rempli
            die("<h3>Article non inséré</h3><button onclick='history.go(-1);'>Réessayer</button>");
        }

    // sinon affichage du formulaire
    }else {

        // on appel la vue contenant le formulaire
        require_once "vues/FormInsert.html.php";
    }

} else {

// on récupère les résumés d'articles depuis arti
    $articles = listeArtiAccueil($mysqli);

// on prend la vue
    require_once "vues/Admin.html.php";
}