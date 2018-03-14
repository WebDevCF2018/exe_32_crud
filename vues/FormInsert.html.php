<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Insérez un article</title>
</head>
<body>
<h1>Insérez un article</h1>
<div id="menu">
    <a href="./">Retour à l'accueil</a> |
    <a href="?admin">Retour à l'administration des articles</a>
</div>
<div id="contenu">
    <h2>Insérez un nouvel article</h2>
<form name="envoi" method="post" action="">
    <label>Titre <input name="letitre" maxlength="100" placeholder="Le titre" required></label><br/>
    <label>Texte <textarea cols="40" rows="10" name="letexte" placeholder="Votre texte" required></textarea></label><br/>
    <label>Envoyer <input type="submit" value="Envoyer"></label>
</form>
</div>
</body>
</html>
