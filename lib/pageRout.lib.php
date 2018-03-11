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
    }    
    
}
 
?>