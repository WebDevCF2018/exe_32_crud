<?php
/**
 * On va "simuler" l'existence d'un objet Arti (représentation de la table arti) en utilisant des fonctions utiles pour nos contrôleurs
 *
 * Pour effectuer le CRUD (Create Read Update Delete)
 *
 */

/*
 * Affiche tous les articles
 *
 * Read
 *
 */

function listeArtiAccueil($db){
    $sql = "SELECT idarti, titre, substr(texte,1,150) AS texte, publie  
		FROM arti
        ORDER BY publie DESC;";
    $recup = mysqli_query($db,$sql);
    // on prends le nombre de résultat(s)
    $nb = mysqli_num_rows($recup);
    // si on a au moins 1 résultat ($nb == true)
    if($nb){
        return mysqli_fetch_all($recup, MYSQLI_ASSOC);
    }else{
        return false;
    }
}

/*
 * Affiche le détail d'un article
 *
 * Read
 *
 */

function listeArtiComplet($db, $id){
   $id = (int)$id;
    $sql = "SELECT idarti, titre, texte, publie  
		FROM arti
        where idarti=$id;";
    $recup = mysqli_query($db,$sql);
    // on prends le nombre de résultat(s)
    $nb = mysqli_num_rows($recup);
    // si on a au moins 1 résultat ($nb == true)
    if($nb){
        return mysqli_fetch_assoc($recup);
    }else{
        return false;
    }
}
/*
 * Permet d'insérer un article dans la table arti, renvoie true si ça a fonctionné, false en cas d'échec
 *
 * Create
 *
 */
function insertArti($db,$title,$text){
    // vérification de sécurité de $title et $text
    if(empty($title)||empty($text)){
        return false;
    }
    // req sql
    $sql = "INSERT INTO arti (titre,texte) VALUES ('$title','$text');";
    $ajout = mysqli_query($db,$sql);
    // si on a inséré l'article
    if(mysqli_affected_rows($db)){
        return true;
    }
    return false;
}

/*
 * Permet de supprimer un article
 *
 * Delete
 *
 */
function deleteArti($db,$id){

}

/*
 * Permet de modifier un article
 *
 * Update
 *
 */
function updateArti($db,$id,$title,$text){
    // si au moins un des champs est vide
    if(empty($id)||empty($title)||empty($text)){
        return false;
    }
    $sql = "UPDATE arti SET titre = '$title', texte='$text' WHERE idarti=$id";
    $req = mysqli_query($db,$sql);
    // si on a modifié l'article
    if(mysqli_affected_rows($db)){
        return true;
    }
    return false;
}