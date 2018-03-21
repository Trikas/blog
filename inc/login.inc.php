<?php 
    session_start();
    require_once "../lib/funcBd.lib.php";
    define("ADMIN_PASS","1111");
    define("ADMIN_LOGIN", "name");
    
    // говно для того что бы при обновлении страницы не летели копии данных с форм в бд
    if ($_SERVER['REQUEST_METHOD']=='POST'){
        $login = $_POST['login'];
        $password = $_POST['password'];
        $hesh = $_POST['check'];
    }
    if($_SESSION['check']!=$_POST['check']){
        $_SESSION['check']=$_POST['check'];
       usersAutho($login,$password);
    }
    
   if ($_POST['login']==ADMIN_NAME && $_POST['password']==ADMIN_PASS){
       echo "дОБРО ПОЖАЛОВАТЬ АДМИН";
   }
       

   
    
          
        

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
                    <input id="login" type="text" class="form-control" name="login" placeholder="login">
                </div><br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                </div><br>  
                <input type="hidden" name="check" value="<?= md5(time());?>"> 
                 <input type="submit" class="btn btn-default"> <br>  
            </form>
           
            <p class="text-center">Если вы впервые то <a href="login.inc.php?id=reg">зарегестрируйтесь</a></p>
        </div>
    </body>
</html>