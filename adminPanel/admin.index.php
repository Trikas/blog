<?php
// подключение классов библиотек и создание обьектов
// <i class="fab fa-medapps"></i> для страницы с добавлением идей и рандомным счетсчиком охуенности идеи 
// РАСКИДАТЬ ПО ФАЙЛАМ ЭТО ГОВНО!!!!!!!!!!!!
// 
    session_start();
    require_once "../lib/funcBd.lib.php";
    require_once "../lib/pageRout.lib.php";
  // говно для того что бы при обновлении страницы не летели копии данных с форм в бд
    if ($_SERVER['REQUEST_METHOD']=='POST'){
        $title = $_POST['title'];  
        $publication = $_POST['publication'];
        $hesh = $_POST['check'];
    }
    if($_SESSION['check']!=$_POST['check']){
        $_SESSION['check']=$_POST['check'];
        addedBdPost($title, $publication);
    }
   
    
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.css">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>admin</title>
</head>
    <body>
    <nav class="navbar navbar-inverse text-center" id="menuUser">
            <div class="navbar-header">
                <a class="navbar-brand" href="admin.index.php">adminPanel</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
                </button>
            </div>    
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    
                    <li><a href="admin.index.php?id=addedPub"><i class="far fa-edit"></i> Добавить статью</a></li>
                    <li><a href="admin.index.php?id=visits"><i class="far fa-address-book"></i> Посещения</a></li>
                    <li><a href="admin.index.php?id=sms"><i class="far fa-envelope"></i> Сообщения</a></li>  
                </ul>     
        </div>  
    </nav>
     <!--Начало области соновного контента-->
  
    <?php
	

        routAdminPanel()
     
     ?>
    <!--Конец области соновного контента-->
    </body>
</html>