<?php
$_SERVER['REQUEST_METHOD']='POST';
print_r($_SERVER['REQUEST_METHOD']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
</head>
    <body>
        <div class="container login">
            <h1 class="text-center">Введите логин и пароль</h1>
            <form action="login.inc.php"  method="post">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="login" type="text" class="form-control" name="login" placeholder="login" required>
                </div><br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                </div><br>  
                <input type="hidden" name="check" value="<?= md5(time());?>"> 
                 <input type="button" class="btn btn-default" value="Войти"> <br>  
            </form>
           
            <p class="text-center">Если вы впервые то <a href="login.inc.php?id=reg">зарегестрируйтесь</a></p>
        </div>
    </body>
</html>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>

    $("#subm").click(function(){
       $.post(
            "/inc/tobd.php",
           {
            login: $("#login").val(),
            password: $("#publ").val(),
           },
           onAjaxSuccess
           
       );
    });
    function onAjaxSuccess(data)
    {
  // Здесь мы получаем данные, отправленные сервером и выводим их на экран.
       
        if (data==""){
            alert("Заполните все поля");
        }
        else{
            $("#login").val('');
            $("#password").val('');
        }  
    }

</script>
