<?php
    require_once('config.php');
    $query = $connect->prepare('SELECT * FROM articles ORDER BY date_publication');
    $query->execute();

    $articles = $query->fetchAll();
?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css">
            <title>CRUD SIMPLE</title>
        </head>

        <body>
            <header>
                <ul>
                    <li class="logo"><a href="./">CRUD SIMPLE</a></li>
                    <li class="link"><a href="ajouter.php">Ajouter un article</a></li>
                </ul>
            </header>

            <main>
                <?php if(!empty($articles)):?>
                    <div class="grid grid-3">
                    <?php foreach($articles as $article):?>
                        <div class="box">
                            <img src="<?= $article->url_image ?>" alt="<?= $article->titre ?>" class="imgbox">
                            <div class="content">
                                <h3 class="title"><?= $article->titre ?></h3>
                                <p><?= nl2br($article->description) ?></p>
                                <p>Publié le: <small><?= $article->date_publication ?></small></p>
                            </div>
                            <div class="btn-group grid grid-2 w-5">
                                <a href="modifier.php?id=<?= $article->id ?>" class="edit">Modifier</a>
                                <a href="supprimer.php?id=<?= $article->id ?>" class="delete">Supprimer</a>
                            </div>
                        </div>
                    <?php endforeach;?>
                    </div>
                <?php else:?>
                    <center><h3>Aucun article inséré pour l'instant</h3></center>
                <?php endif;?>
            </main>
        </body>
</html>