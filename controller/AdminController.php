<?php

require_once "modeles/ArticleModele.php";


if (isset($_GET['ajout'])){
    // on appelle la vue contenant le formulaire else{       }


    if (isset($_POST['letitre'],$_POST['letexte'])){
        $titre = htmlspecialchars(strip_tags(trim($_POST['letitre'])),ENT_QUOTES);
        $texte = htmlspecialchars($_POST['letexte'],ENT_QUOTES);

        // on va chercher la méthode qui permet de d'inserer un nouvelles articles (modeles/Articlemodele.php)
        $envoi = insertarti($mysqli,$texte,$titre);
        if($envoi){
            header("location:/?admin");
        }
        // on protège nos variable contre les attaque sql
    }else {
        require_once "vues/forminsert.html.php";
    }
}else {

    $articles = listeArtiAccueil($mysqli);

// on prend la vue

    require_once "vues/Admin.html.php";

}
