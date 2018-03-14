<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un article</title>
</head>
<body>
<h1>Modifier un article</h1>
<div id="menu">
    <a href="./">Retour à l'accueil</a> |
    <a href="?admin">Retour à l'administration des articles</a>
</div>
<div id="contenu">
    <h2>Modifier l'article dont l'id est <?=$arti['idarti']?></h2>
    <form name="envoi" method="post" action="">
        <label>Titre <input name="letitre" maxlength="100" placeholder="Le titre" value="<?=htmlspecialchars($arti['titre'],ENT_QUOTES)?>" required></label><br/>
        <label>Texte <textarea cols="40" rows="10" name="letexte" placeholder="Votre texte" required><?=$arti['texte']?></textarea></label><br/>
        <input type="hidden" name="idarti" value="<?=$arti['idarti']?>">
        <label>Modifier <input type="submit" value="Modifier"></label>
    </form>
</div>
</body>
</html>
