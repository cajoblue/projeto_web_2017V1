<?php

session_start();

function loggedin(){

  if(isset($_SESSION['idUtilizador']) && !empty($_SESSION['idUtilizador'])){
    return true;
  }else{
    return false;
  }

}
function descobrirUser(){
  include ("conexao.php");
  $my_id = $_SESSION['idUtilizador'];

  $sql_3 = "SELECT tipo FROM login WHERE idUtilizador= $my_id";
  $retval_3 = mysqli_query( $conn, $sql_3 );
  $row_3 = mysqli_fetch_assoc($retval_3);
  $tipo=$row_3['tipo'];

  if($tipo=='estudante'){
    return "estudante";
  }else if($tipo=='prof_saude'){
    return "prof_saude";
  }else if($tipo=='admin'){
    return "admin";
  }else{
    return "prof";
  }

}


?>
