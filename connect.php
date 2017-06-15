<?php
     $database=array();
     $database['host'] = "localhost";
     $database['port'] = "8080";
     $database['dbname'] = "bd_projeto";
     $database['username'] = "root";
     $database['password'] = "";
//nova coneção a base da dados, aqui estou a colocar os dados num array 
     $conn=new mysqli($database['host'],$database['username'], $database['password'],$database['dbname'] );
     if($conn){
     	//echo "Conecção bem sucedida a base de dados: ".$database['dbname'];
    }else{
    	echo "A conecção a base de dados:" .$database['adname']. "não foi bem sucedida";
    }

?>
