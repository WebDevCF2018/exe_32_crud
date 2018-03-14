<?php
/**
 * Contrôleur gérant l'adùministration
 */

// chargement des modeles
require_once "modeles/ArticleModele.php";


/*
 *
 * Partie insertion article
 *
 */

// si on a cliqué sur ajouter
if (isset($_GET['ajout'])) {

    // si le formulaire a été envoyé
    if (isset($_POST['letitre'], $_POST['letexte'])) {

        // on met nos variables POST en variables locales, on protège nos variables contre une éventuelle attaque sql
        $titre = htmlspecialchars(strip_tags(trim($_POST['letitre'])), ENT_QUOTES);
        $texte = htmlspecialchars($_POST['letexte'], ENT_QUOTES);

        // on va chercher la méthode qui permet d'insérer un nouvel article (modeles/ArticleModele.php)
        $envoi = insertArti($mysqli, $titre, $texte);

        // l'article est bien inséré
        if ($envoi) {
            // redirection accueil admin
            header("Location: ./?admin");
        } else {
            // l'article ne s'est pas inséré, on permet à l'utilisateur de retourner sur le formulaire déjà rempli
            die("<h3>Article non inséré</h3><button onclick='history.go(-1);'>Réessayer</button>");
        }

        // sinon affichage du formulaire
    } else {

        // on appel la vue contenant le formulaire
        require_once "vues/FormInsert.html.php";
    }

/*
 *
 * Partie modification
 *
 */

}elseif (isset($_GET['modif'])) {
    // modif doit être un numérique entier non signé => ctype_digit() vérifie si une chaîne (string) ne contient que des numériques (pas de . ni -)
    if (ctype_digit($_GET['modif'])) {
        // conversion de string à int
        $idc = (int)$_GET['modif'];

        // si on a pas cliqué sur "modifier", on doit afficher le formulaire
        if (!isset($_POST['idarti'], $_POST['letitre'], $_POST['letexte'])) {

            // on récupère l'article pour l'insérer dans le formulaire d'update
            $arti = listeArtiComplet($mysqli, $idc);

            // si $arti vaut false (inexistence de l'article dans la db)
            if (!$arti) {
                header("Location: ./?admin");
            }


            // on prend la vue d'update
            require_once "vues/FormUpdate.html.php";

            // on a cliqué sur modifier
        } else {
            // préparations de nos variables POST pour la modification
            $idArt = (int)$_POST['idarti'];
            $titreArt = htmlspecialchars(strip_tags(trim($_POST['letitre'])), ENT_QUOTES);
            $texteArt = htmlspecialchars($_POST['letexte'], ENT_QUOTES);
            // mise à jour
            $update = updateArti($mysqli, $idArt, $titreArt, $texteArt);
            // si changement, redirection vers le détail de l'article
            if ($update) {
                header("Location: ./?article=$idArt");
                // pas de changement, on reste sur le formulaire de modification
            } else {
                header("Location: ./?admin&modif=$idArt");
            }
        }

    } else {
        header("Location: http://www.bases-hacking.org/");
    }
/*
 *
 * Partie suppression
 *
 */

// si il existe la variable get 'sup' et que le string contenu ne contient QUE des numériques => ctype_digit("12")
}elseif (isset($_GET['sup'])&&ctype_digit($_GET['sup'])){
    // conversion de string en integer
    $idSup = (int) $_GET['sup'];
    // utilisation de la fonction de suppression
    $del = deleteArti($mysqli,$idSup);
    // si on a supprimé un article
    if($del){
        header("Location: ./?admin");
    }else{
        die("<h2>Article déjà supprimé ou inexistant</h2><button onclick='history.go(-1);'>Retour en arrière</button>");
    }

/*
 *
* Partie affichage administration
 *
*/
} else {

// on récupère les résumés d'articles depuis arti
    $articles = listeArtiAccueil($mysqli);

// on prend la vue
    require_once "vues/Admin.html.php";
}