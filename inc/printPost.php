<?php
require_once "../lib/funcBd.lib.php";
$list = [];
$x = 0;

 $res = selectBdPost($_POST['param']);
   while($rovs = $res->fetch_assoc()){
     $x++;
     $list[$x] = 
     
    <<<"EOT"
 
    <div class="container-fluid printPost" id="printPost">
            <div class="container-fluid"> 
                <h2 class="title">{$rovs['title']}</h2>
                    <h5></span><i class="far fa-calendar"></i> {$rovs['date']}</h5>
                    <p class="teg"><span class="label label-danger">Food</span> <span class="label label-primary">Ipsum</span></p>
                    <h4> <span style="color:#1b5155;"><!-- тут ник пользователя-->{$rovs['login']}</span></h4>
                    <div class="containerIMG" style="background: url(img/intro.jpg);"></div> 
                    <br>
                    <p>{$rovs['publication']}</p>
                        <!-- а вот тут какое нибудь аудио -->
                        <!-- добавить кнопку понравилась поднятие статьи в рейтинге статей -->
                        <!-- захуярить коментирование статьи-->
                        <!--Добавить пагинацию-->
                    <a href="">Читать далее...</a>
            </div><br>    
        </div



EOT;
}
print_r(json_encode($list));
?>
   
   
   
