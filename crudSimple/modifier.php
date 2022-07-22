<?php
    require_once('config.php');

    // Récuperer les informations de l'artcle grâce à l'ID
    if(!empty($_GET['id'])){
        $query = $connect->prepare("SELECT * FROM articles WHERE id = " . $_GET['id']);
        $query->execute();
        $article = $query->fetch();
    }

    // Modifier les valeurs
    $error = "";
    if(isset($_POST['submit'])){
        if(!empty($_POST['titre']) && !empty($_POST['description']) && !empty($_POST['url_image'])){
            $query = $connect->prepare("UPDATE articles SET titre=:titre, description=:description, url_image=:url_image WHERE id = " . $_GET['id']);
            $modifier = $query->execute([
                "titre" => $_POST['titre'],
                "description" => $_POST['description'],
                "url_image" => $_POST['url_image']
            ]);

            if($modifier){
                $article->titre = $_POST['titre'];
                $article->description = $_POST['description'];
                $article->url_image = $_POST['url_image'];
                $error = '<div class="success">Donnée modifiée!</div>';
            }
        }
        else{
            $error = '<div class="error">Veuillez remplir tous les champs.</div>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CRUD SIMPLE - MODIFIER</title>
</head>
<body>
    <header>
    <ul>
        <li class="logo"><a href="./">CRUD SIMPLE</a></li>
        <li class="link"><a href="ajouter.php">Ajouter un article</a></li>
    </ul>
    </header>

<main>
    <h2>Modifier l'article <?= $article->titre?></h2>
        <?= $error?>
        <form action="" method="post">
            <div class="group">
                <label for="titre">Titre</label>
                <input type="text" name="titre" placeholder="Titre de l'article" value="<?= $article->titre?>" required>
            </div>
            <div class="group">
                <label for="description">Description</label>
                <textarea name="description" id="" cols="30" rows="10" placeholder="Description de l'article" required><?= $article->description ?></textarea>
            </div>
            <div class="group">
                <label for="urlImage">Url de l'image</label>
                <input type="url" name="url_image" placeholder="url de l'image" value="<?= $article->url_image?>" required>
            </div>
            <button type="submit" name="submit">Enregistrer</button>
        </form>
</main>

</body>
</html>