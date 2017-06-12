<?php

$database=array();
$database['host'] = "localhost";
$database['port'] = "8080";
$database['dbname'] = "bd_projeto";
$database['username'] = "root";
$database['password'] = "";

$conn=new mysqli($database['host'],$database['username'], $database['password'],$database['dbname'] );
if($conn){

}else{
    echo "A conecção a base de dados:" .$database['adname']. "não foi bem sucedida";
}

