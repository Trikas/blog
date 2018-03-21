<?php
// подключение классов библиотек и создание обьектов
require_once "lib/funcBd.lib.php";
require_once "lib/pageRout.lib.php";
if ($_SERVER['REQUEST_METHOD']=='GET'){
    $id = $_GET['id'];
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
                    <div class="col-sm-3 sidenav text-center navbar-fixed">
                    <div class="container">
                        <img src="img/intro.jpg" alt="Avatar" class="image" style="width:100%">
                            <div class="middle">
                                <div class=""><p>Имя пользователя</p></div>
                            </div>
                    </div><hr><br>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="index.php?id=all">Все подряд</a></li>
                <li><a href="index.php?id=top">Лучшее</a></li>
                <li><a href="index.php?id=white">Белая полоса</a></li>
                <li><a href="index.php?id=black">Черная полоса</a></li>
    
      
                </ul><hr>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Поиск">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                    <i class="fas fa-search"></i>
                    </button>
                    </span>
                </div><br>
                  
                <div class="btn-group">
                    <a href="inc/login.inc.php">Войти</a>
                </div>
              
    </div>
               
        <!--начало области добавления из базы данных-->
      
        <div class="container-fluid postHead">
        <div class="printPost">
            <div class="text-center"><p style="text-transform:uppercase; padding: 10px; color: black;"><?= printPage(); ?></p></div> 
        </div>    

                    <?php
                    switch ($id) {
                        case 'all':
                            $sql = .
                            break;
                        
                        default:
                            # code...
                            break;
                    }
                    
                    if ($_GET['id']=='all'){
                        $res =  selectBdPost($sql);
                        while($rovs = $res->fetch_assoc()){
                    } 
                   
                    ?>

            <div class="container-fluid printPost">
                <div class="container-fluid"> 
                    <h2 ><!-- тут название статьи --> <?php echo $rovs['title']; ?></h2>
                    <h5></span><i class="far fa-calendar"></i> <?php echo $rovs['date']; ?></h5>
                   <p class="teg"><span class="label label-danger">Food</span> <span class="label label-primary">Ipsum</span></p>
                    <h4> <span style="color:#1b5155;"><!-- тут ник пользователя--> <?php  ?></span></h4>
                   <div class="containerIMG" style="background: url(img/intro.jpg);"></div> 
                    
                    <br>
                    <p><?php echo $rovs['publication'];?></p>
                    
                    <!-- а вот тут какое нибудь аудио -->
                    <!-- добавить кнопку понравилась поднятие статьи в рейтинге статей -->
                    <!-- захуярить коментирование статьи-->
                    <!--Добавить пагинацию-->
                    <a href="">Читать далее...</a>
                </div>    
                    <br><br>
                </div><br>
            <?} ?>
        </div>

           <!--конец области добавления из базы данных-->
</div>  
</body>
</html>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  