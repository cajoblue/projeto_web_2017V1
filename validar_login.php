<?php
include ("conexao.php");
session_start();
$email = $_POST['email'];
$password = md5($_POST['password']);
$login = $_POST['login'];

$query = "SELECT * FROM login WHERE email='$email'";

$retval = mysqli_query($conn,$query);
$linha = mysqli_fetch_array($retval);
$e = $linha['email'];
$p = $linha['password'];
$t = $linha['tipo'];
$idUtilizador=$linha['idUtilizador'];
$_SESSION['idUtilizador']= $idUtilizador;
$nome_user=$linha['nome_user'];
$_SESSION['nome_user']= $nome_user;
echo $e.'<br>';
echo $p.'<br>';
echo $t;
if ( $email==$e && $password == $p)	{
    if( $t=="admin" ) {
        //session_start();
        $_SESSION['login'] = $email;
        header ('Location: logA.php');
    }
    if( $t=="prof_saude" ) {
        //session_start();
        $_SESSION['login'] = $email;
        header ('Location: logPS.php');
    }
    if( $t=="professor" ) {
        //session_start();
        $_SESSION['login'] = $email;
        header ('Location: logP.php');
    }
    if( $t=="estudante" ) {
        //session_start();
        $_SESSION['login'] = $email;
        header ('Location: logE.php');
    }
}
else echo "<script>alert('E-mail ou Password incorretos!');top.location.href='login.html';</script>";
mysqli_close($conn);
?>