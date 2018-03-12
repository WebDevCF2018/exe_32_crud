<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Admin du site</title>
</head>
<body>
<h1>Accueil</h1>
<div id="menu">
    <div id ="menu"><a href="./">retour accueil</a></div></div>

<div id="contenu">
<ul>
    <li>
        <a href="?admin&ajout">ajout d'un article</a>|<img width="16px" height="16px" src="vues/img/create.png" alt="Ajouter l'article" onclick="document.location='?admin&crea=<?= $item['idarti'] ?>';" /> |
    </li>
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
                |<img width="16px" height="16px" src="vues/img/update.png" alt="Modifier l'article" onclick="document.location='?admin&modif=<?= $item['idarti'] ?>';" /> |
                <img width="16px" height="16px" src="vues/img/delete.png" alt="Supprimer l'article" onclick="document.location='?admin&sup=<?= $item['idarti'] ?>';" /> |

            </p>
            <hr>
            <?php
        }
    }
    ?>
</div>
</body>