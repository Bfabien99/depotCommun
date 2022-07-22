<?php
    require_once('config.php');

    if(!empty($_GET['id'])){
        $query = $connect->prepare("DELETE FROM articles WHERE id = " . $_GET['id']);
        $delete = $query->execute();

        if($delete){
            header('location:./');
        }
        
    }
?>
