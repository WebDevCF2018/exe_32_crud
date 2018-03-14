<?php
/**
 * On va "simuler" l'existence d'un objet Arti (représentation de la table arti) en utilisant des fonctions utiles pour nos contrôleurs
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

