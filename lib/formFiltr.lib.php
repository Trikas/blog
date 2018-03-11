<?php
class formFiltr{
       public $method;
        function treatMet($nameForm=" "){
        if ($_SERVER['REQUEST_METHOD']=='POST'){
            $this->method = trim($_POST[$nameForm]);
            if (!empty($this->method)){
                  header("Location: admin.index.php");
            }

            return  $this->method;

    }
        elseif ($_SERVER['REQUEST_METHOD']=='GET'){
            $this->method = trim($_GET[$nameForm]);
            if (empty($this->method)){
        
            }
           
            return $this->method;
        }



    }

}

?>