<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil du site</title>
</head>
<body>
<h1>inserer un article</h1>
<div id="menu">

    <a href="./">retour a l'acceuil</a>
    <a href="?admin">Administration des articles</a>

</div>
<div id="contenu">
    <form name="envoie" method="post" action="">
        <label>Titre</label> <input name="letitre" maxlength="100" placeholder="Le titre" type="text" required><br/>
        <label>Texte</label> <textarea cols="40" rows="10" name="letexte" maxlength="100" placeholder="Le texte"  required></textarea><br/>
        <input type="submit" value="Envoyer"> <br/>
    </form>
</div>
</body>
</html>
