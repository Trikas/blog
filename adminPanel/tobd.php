<?php
    require_once "../lib/funcBd.lib.php";

    if ($_SERVER['REQUEST_METHOD']=='POST'){
        if ($_POST['title'] && $_POST['publication']){
            $title = $_POST['title'];  
            $publication = $_POST['publication'];
            echo $title;
            echo $publication;
            addedBdPost($title, $publication);
        }
    }
            
?>
