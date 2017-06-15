<?php

session_start();

function loggedin(){
    
    if(isset($_SESSION['nome_user']) && !empty($_SESSION['nome_user'])){
        return true;
    }else{
        return false;
    }
    
}
?>