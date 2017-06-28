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

function verHash(){
  include ("conexao.php");
  $my_id = $_SESSION['idUtilizador'];

  $sql_3 = "SELECT user_id FROM registo_controller WHERE user_id= $my_id";
  $retval_3 = mysqli_query( $conn, $sql_3 );
  $row_3 = mysqli_fetch_assoc($retval_3);
  $user_id=$row_3['user_id'];
  if($row_3){
    return $user_id;
  }else{
    return '-1';
  }
}

function onlineUser(){
  include ("conexao.php");
  $my_id = $_SESSION['idUtilizador'];
  $time=time();

  $sql_4 = "SELECT nome_user FROM login WHERE idUtilizador= $my_id";
  $retval_3 = mysqli_query( $conn, $sql_4 );
  $row_3 = mysqli_fetch_assoc($retval_3);
  $nome=$row_3['nome_user'];

  $sql_c = "SELECT * FROM online_users where user_id= $my_id";
  $retval_c = mysqli_query( $conn, $sql_c );
  $count_4=$retval_c->num_rows;


  if($count_4==0){
        $sql_x = "INSERT INTO online_users (user_id, user_name,tempo)
        VALUES ('$my_id', '$nome','$time')";
        $conn->query($sql_x);


  }else{

        $sql_t = "UPDATE online_users SET tempo='$time' WHERE user_id=$my_id";
        $conn->query($sql_t);

  }


  $sql ="SELECT * FROM visitas_online where session= $my_id";
  $result = $conn->query($sql);
  $count=$result->num_rows;

  if($count==0){
    $sql_2 = "INSERT INTO visitas_online (session, hora)
    VALUES ('$my_id', '$time')";
    $conn->query($sql_2);

    $sql_b = "SELECT * FROM visitas_record";
    $retval_b = mysqli_query( $conn, $sql_b );

    while($row_b = mysqli_fetch_assoc($retval_b)){
      $count_b=$row_b['visitantes'];
      $id=$row_b['id'];
      $new_count=$count_b+1;

        $sql_xx = "UPDATE visitas_record SET visitantes=$new_count WHERE id =$id";
        $conn->query($sql_xx);
    }



  }else{
    $sql_3 = "UPDATE visitas_online SET hora='$time' WHERE session=$my_id";
    $conn->query($sql_3);

  }
  $count_user="SELECT * FROM visitas_online";
  $result_1 = $conn->query($count_user);
  $count_1=$result_1->num_rows;

  $sql_y = "DELETE FROM online_users WHERE tempo < $time-10";
  $conn->query($sql_y);

  $sql_4 = "DELETE FROM visitas_online WHERE hora < $time-10";
  $conn->query($sql_4);

  // $nr_visitantes
  return "<b>Online:$count_1";
  // return $count_1;
  $conn->close();
}

function online_users(){
  include ("conexao.php");
  $nomes=array();
  $sql_c = "SELECT * FROM online_users";
  $retval_c = mysqli_query( $conn, $sql_c );
  $contador=0;

  while($row_c = mysqli_fetch_assoc($retval_c)){
    $nomes[]=$row_c['user_name'];
  }
  // var_dump($nomes);
  return $nomes;
}

function visitas(){
  include ("conexao.php");

  $sql_b = "SELECT * FROM visitas_record";
  $retval_b = mysqli_query( $conn, $sql_b );

  while($row_b = mysqli_fetch_assoc($retval_b)){
    $count=$row_b['visitantes'];
  }
  return $count;
}

function breadcrumbs($separator = ' » ', $home = 'Home') {

$path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
$base_url = substr($_SERVER['SERVER_PROTOCOL'], 0, strpos($_SERVER['SERVER_PROTOCOL'], '/')) . '://' . $_SERVER['HTTP_HOST'] . '/';
$breadcrumbs = array("<a href='$base_url'>$home</a>");
$tmp = array_keys($path);
$last = end($tmp);
unset($tmp);

foreach ($path as $x => $crumb) {
$title = ucwords(str_replace(array('.php', '_'), array('', ' '), $crumb));
if ($x == 1){
$breadcrumbs[] = "<a href='$base_url$crumb'>$title</a>";
}elseif ($x > 1 && $x < $last){
$tmp = " for($i = 1; $i <= $x; $i++){ $tmp .= $path[$i] . '/'; } $tmp .= '\'>$title";
$breadcrumbs[] = $tmp;
unset($tmp);
}else{
$breadcrumbs[] = "$title";
}
}

return implode($separator, $breadcrumbs);
}


?>
