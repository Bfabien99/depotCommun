<?php
require_once '../vendor/autoload.php';
require_once('config.php');

$faker = Faker\Factory::create('fr_FR');


for ($i=0; $i < 3; $i++) { 
    $query = $connect->prepare("INSERT INTO `articles` (`titre`, `description`, `url_image`,`date_publication`) VALUES (:titre,:description,:url_image,:date)");
    $ajouter = $query->execute([
        "titre" => $faker->realText(mt_rand(30,45)),
        "description" => $faker->realText(200,3) . "<br>" . $faker->realText(200,2),
        "url_image" => $faker->imageUrl(),
        "date" => $faker->dateTimeBetween('-' . mt_rand(1,3) . 'month')->format('Y-m-d H:i:s')
    ]);

    if($ajouter){
        echo '<div class="success">Nouvelle donnée enregistré!</div>';
    }
}
