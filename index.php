<?php
// подключение классов библиотек и создание обьектов
require_once "lib/funcBd.lib.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="/img/intro.jpg"/>
    <title>blog</title>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
</head>
<body>
<div class="wrapp">
    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-3 sidenav text-center">
            <div class="container">
                <img src="img/intro.jpg" alt="Avatar" class="image" style="width:100%">
                    <div class="middle">
                        <div class=""><p>Имя пользователя</p></div>
                    </div>
            </div><hr><br>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Все подряд</a></li>
        <li><a href="#section2">Белая полоса</a></li>
        <li><a href="#section3">Черная полоса</a></li>
        <li><a href="#section3"></a></li>
      </ul><br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Blog..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
           <i class="fas fa-search"></i>
          </button>
        </span>
      </div><br>
    </div>
    <!--начало области добавления из базы данных-->
    <div class="container-fluid">
        <div class="col-sm-9">
             <!--  настройка роутинга -->
           <div class="text-left"><p style="text-transform:uppercase; margin-top:2em; color: #000000;">Черная или белая или какая страница вывести</p></div> 
            <hr>
            <h2>Название статьи</h2>
          
            <h5><span><i class="far fa-clock"></i></span> время|<i class="far fa-calendar"></i> Sep 27, 2015</h5>
            <h4> <span style="color:#1b5155;">by пользователь</span></h4>
            <p class="teg"><span class="label label-danger">Food</span> <span class="label label-primary">Ipsum</span></p><br>
            <p>Food is my passion. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <a href="">Читать далее...</a>
            <br><br>
            
        </div>
    </div>
    <!--конец области добавления из базы данных-->
</div>  
</body>
</html>