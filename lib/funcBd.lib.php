<?php
define("DB_NAME","adminBD");
define("DB_USER","root");
define("DB_PASS","");

       function addedBd($title, $publication){
        $mysqli = new mysqli("127.0.0.1", DB_USER, DB_PASS, DB_NAME);
        if (!$mysqli){
            echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
            echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }
        
            if(!$stmt = $mysqli->prepare("INSERT INTO blog(title, publication) VALUES (?,?)")){
                echo "не получилось подготовить запрос";
                echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
                echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
                echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
                exit;
        }
        $stmt->bind_param('ss', $title, $publication);
        $stmt->execute();
        $stmt->close();
       
       }

       function selectBd(){
           $mysqli = new mysqli("127.0.0.1", DB_USER, DB_PASS, DB_NAME);
            if (!$mysqli){
                echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
                echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
                echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
                exit;
            }
            
          
           $rovs = $mysqli->query("SELECT `id`, `title`, `publication`, `date` FROM `blog` WHERE 1 ");
           if(!$rovs){
               echo "не удалось выполнить запрос";

            }
              return $rovs;  
       }



?>
