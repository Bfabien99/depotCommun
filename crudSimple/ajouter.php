<?php
    require_once('config.php');
    $error = "";
    if(isset($_POST['submit'])){
        if(!empty($_POST['titre']) && !empty($_POST['description']) && !empty($_POST['url_image'])){
            $query = $connect->prepare("INSERT INTO `articles` (`titre`, `description`, `url_image`) VALUES (:titre,:description,:url_image)");
            $ajouter = $query->execute([
                "titre" => $_POST['titre'],
                "description" => $_POST['description'],
                "url_image" => $_POST['url_image']
            ]);

            if($ajouter){
                $error = '<div class="success">Nouvelle donnée enregistré!</div>';
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
    <title>CRUD SIMPLE - AJOUTER</title>
</head>
<body>
    <header>
        <ul>
            <li class="logo"><a href="./">CRUD SIMPLE</a></li>
        </ul>
    </header>

    <main>
        <h2>Créer un nouvel article</h2>
        <?= $error?>
        <form action="" method="post">
            <div class="group">
                <label for="titre">Titre</label>
                <input type="text" name="titre" placeholder="Titre de l'article" required>
            </div>
            <div class="group">
                <label for="description">Description</label>
                <textarea name="description" id="" cols="30" rows="10" placeholder="Description de l'article" required></textarea>
            </div>
            <div class="group">
                <label for="urlImage">Url de l'image</label>
                <input type="url" name="url_image" placeholder="url de l'image" required>
            </div>
            <button type="submit" name="submit">Enregistrer</button>
        </form>
    </main>
</body>
</html>