<?php
// роут для админки 
function routAdminPanel(){
   if ($_SERVER['REQUEST_METHOD']=="GET")
        $id  = $_GET['id'];
    
    switch ($id) {
        case 'addedPub':
            require_once "inc/addedPUB.inc.php";
            break;
        
        case 'sms':
            require_once "inc/sms.inc.php";
            break;

        case 'visits':
            require_once "inc/visits.inc.php";
            break;
        
         default: 
            require_once "inc/addedPUB.inc.php";
            break;
    }    
    
}

function routIndex(){
     if ($_SERVER['REQUEST_METHOD']=="GET")
        $id  = $_GET['id'];
    
    switch ($id) {
        case 'top':
            require_once "inc/topPost.inc.php";
            break;
        
        case 'black':
            require_once "inc/black.inc.php";
            break;

        case 'white':
            require_once "inc/white.inc.php";
            break;

        default: 
            require_once "inc/allPost.inc.php";
            break;
    }  

} 
?>