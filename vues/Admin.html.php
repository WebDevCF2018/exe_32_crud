<!DOCTYPE html>
<html lang="fr">
    <meta charset="UTF-8">
    <title>Admin du site</title>
<script src="vues/mesFonctions.js"></script>
</head>
<body>
<h1>Admin du site</h1>
<div id="menu">
    <a href="./">Retour sur l'accueil</a>
</div>
<div id="contenu">
        <ul>
            <li><a href="?admin&ajout"><img src="vues/img/create.png" alt="ajouter un article"> Ajouter un article</a> </li>
        </ul>
    <?php


    // pas d'articles
    if ($articles == false) {
        echo "<h2>Pas encore d'articles!</h2>";
    } else {
        foreach ($articles AS $item) {
            ?>
            <h3><a href="?article=<?= $item['idarti'] ?>"><?= $item['titre'] ?></a></h3>
            <p><?= $item['texte'] ?> ... <a href="?article=<?= $item['idarti'] ?>">Lire la suite</a></p>
            <p><?= $item['publie'] ?>
               |  <img width="16px" height="16px" src="vues/img/update.png" alt="Modifier l'article" onclick="document.location='?admin&modif=<?= $item['idarti'] ?>';" /> | <img width="16px" height="16px" src="vues/img/delete.png" alt="Supprimer l'article" onclick="deleteOk(<?=$item['idarti'] ?>);" />
            </p>
            <hr>
            <?php
        }
    }
    ?>
</div>
</body>
</html>
