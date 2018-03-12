<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $article['titre'] ?></title>
</head>
<body>
<h1><?= $article['titre'] ?></h1>
<div id="menu">
    <a href="?admin">Administration des articles</a>
</div>
<div id="contenu">
    <h2><?= $article['titre'] ?></h2>
    <p><button onclick="document.location='./'">BACK</button></p>
    <?php

    // pas d'articles
    if ($article == false) {
        echo "<h2>Cet article n'existe plus</h2>";
    } else {
        ?>
        <p><?= nl2br($article['texte']) ?></p>
        <p><?= $article['publie'] ?></p>
        <hr>
        <?php
    }
    ?>
</div>
</body>
</html>
