<?php
include ("conexao.php");
include ("functions.php");
$email = $_POST['email'];
$password = md5($_POST['password']);
$login = $_POST['login'];

$query = "SELECT * FROM login WHERE email='$email'";

$retval = mysqli_query($conn,$query);
$linha = mysqli_fetch_array($retval);
$e = $linha['email'];
$p = $linha['password'];
$t = $linha['tipo'];
$nome_user = $linha['nome_user'];
$idUtilizador=$linha['idUtilizador'];

$_SESSION['idUtilizador']= $idUtilizador;
$_SESSION['nome_user']= $nome_user;
$id_user=$_SESSION['idUtilizador'];
$_SESSION['user_name']=$user_name;
$_SESSION['nr_visitas']=0;
if ( $email==$e && $password == $p)	{
  onlineUser();

            $_SESSION['login'] = $email;
        if(verHash()==$id_user){
          header ('Location: inicio.php');
        }else {
          if($t=="estudante"){
            header ('Location:registar_dados_e.php');
          }else if($t=="prof_saude"){
            header ('Location:registar_dados_ps.php');
          }elseif ($t=="professor"){
            header ('Location:dados_prof.php');
          }elseif ($t=="admin"){
            header ('Location: inicio.php');
            }
        }

}else{
  echo "<script>alert('E-mail ou Password incorretos!');top.location.href='login.html';</script>";
}


mysqli_close($conn);
?>
