<?php
// controleur gérant l'administration

require_once "modeles/ArticleModele.php";

if(isset($_GET['ajout'])){

    if(isset($_POST['letitre'],$_POST['letitre'])){
        $titre = htmlspecialchars(strip_tags(trim($_POST['letitre'])),ENT_QUOTES);
        $texte = htmlspecialchars($_POST['letexte'],ENT_QUOTES);

        $envoi = insertArti($mysqli,$titre,$texte);
    }else{
        require_once "vues/formInsert.html.php";
    }

}else {

    $articles = listeArtiAccueil($mysqli);
    require_once "vues/Admin.html.php";
}