<?php
// подключение классов библиотек и создание обьектов
require_once "lib/funcBd.lib.php";
require_once "lib/pageRout.lib.php";

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
                <li class="active"><a href="index.php" id="all">Все подряд</a></li>
                <li><a href="index.php?id=top" id="top">Лучшее</a></li>
                <li><a href="index.php?id=white" id="white">Белая полоса</a></li>
                <li><a href="index.php?id=black" id="top">Черная полоса</a></li>
    
      
                </ul><hr>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Поиск">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                    <i class="fas fa-search"></i>
                    </button>
                    </span>
                </div><br>
                  
                <!-- <div class="btn-group">
                    <a href="inc/login.inc.php">Войти</a>
                </div>
               -->
    </div>
               
        <!--начало области добавления из базы данных-->
      
        <div class="container-fluid postHead">
        <div class="printPost">
            <div class="text-center"><p style="text-transform:uppercase; padding: 10px; color: black;"><?= printPage(); ?></p></div> 
        </div>    

                    <?php
                    // if ($_SERVER['REQUEST_METHOD']=='GET'){
                    //     $id = $_GET['id'];
                    // switch ($id) {
                    //     case 'all':
                    //         $sql = .
                    //         break;
                        
                    //     default:
                    //         # code...
                    //         break;
                    // }
                    
                
                    //     while($rovs = $rovs->fetch_assoc()){
                    
                   
                    // ?>
        <div id = "wrapp">

        </div>          <!--конец области добавления из базы данных-->
</div>  
</body>
</html>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
// $(window).scroll(function() {
//    var windowSckroll = $(window).scrollTop();
//    var windowHeight = $(window).height();
//    var documentHeight = $(document).height();
//    if ((windowSckroll + windowHeight)==documentHeight){
//        $("#wrapp").append('<div class="conatiner-fluid printPost"><h1>1111</h1></div>');
//    }
//    console.log(windowSckroll + " "+ windowHeight + " "+ documentHeight);
// }); ГОВНО ЕБАТЬ КОПАТЬ НО РАБОТАЕТ ЕБА БОБА ДОДЕЛАТЬ!!!!
    
    printPos = "";
    $.post(
        "inc/printPost.php",
        {
            param: "SELECT `id`, `title`, `publication`, `date`, `line` FROM `blog` ORDER BY id DESC"
        },
        
        printPost
    );
    function printPost(data){
      printPos =  $.parseJSON(data)
        $("#wrapp").append(printPos[1]);
        var listMax = 12; 
        var listMin = 2;
        alert(data);
        // $("#wrapp").append(value);
        
            $(window).scroll(function() {
                var windowSckroll = $(window).scrollTop();
                var windowHeight = $(window).height();
                var documentHeight = $(document).height();
                if ((windowSckroll + windowHeight)==documentHeight){
                    $.each(printPos, function(index,value){
                       
                        if (index < listMax && index >= listMin){
                             console.log(index);
                            $("#wrapp").append(value);
                      }
                      });
                      listMax+=10;
                      listMin+=10;
                      
                  }
                
            });
        
      
    }
  </script>
  <div></div>
