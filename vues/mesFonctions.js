// créez une fonction (procédure) qui va demander si vous voulez vraiment supprimer l'article dont l'id est passé en paramètre. Si on répond oui redrection vers ?admin&sup={id}, sinon on ne fait rien

function deleteOk(id){
    // fenêtre demandant la confirmation de suppression
    var fenetre = confirm("Voulez-vous supprimer l'article : "+id);
    // si on clic sur ok (fenetre==true)
    if(fenetre){
        // redirection vers la partie du contrôleur AdminController qui va supprimer réellement l'article
        document.location="./?admin&sup="+id;
    }
}