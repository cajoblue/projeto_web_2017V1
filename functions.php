<?php

session_start();

function loggedin(){
    
    if(isset($_SESSION['idUtilizador']) && !empty($_SESSION['idUtilizador'])){
        return true;
    }else{
        return false;
    }
    
}
?>