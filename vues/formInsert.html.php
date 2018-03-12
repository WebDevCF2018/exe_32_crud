<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil du site</title>
</head>
<body>
<h1>Accueil</h1>
<div id ="menu"><a href="?admin">Retour administration des articles</a></div>
<div id ="menu"><a href="./">Retour accueil</a></div>
<div id="contenu">
<form name="envoi" method="post" action="">
    <label>Titre : </label><input name="letitre" maxlength="100" placeholder="le titre" required><br>
    <label>Texte : </label><textarea name="letexte" cols="50" rows ="20" placeholder="Votre texte" required></textarea><br>
    <label>Envoyer : </label><input type="submit" value="envoyer">
</form>
</div>
</body>
</html>
