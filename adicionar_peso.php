<?php
include('conexao.php');
session_start();

$peso=$_POST['peso'];
$date=$_POST['datepicker'];
$user_id=$_SESSION['idUtilizador'];
$altura=0;
$today=date('y-m-d');

$curdate=strtotime($today);
$mydate=strtotime($date);

if($curdate < $mydate)
{
  echo "<script>alert('O data inválida!');top.location.href='registar_peso.php';</script>";
die;
}

 $sql_1 = "SELECT altura FROM t_estudante where idUtilizador =$user_id";
$result_1 = $conn->query($sql_1);

$row = $result_1->fetch_assoc();
$altura=$row['altura'];
$caulular=$peso/($altura*$altura);
$imc = number_format($caulular, 2, '.', '');

$sql="INSERT INTO tb_dados (id_jovem, peso, imc, d_ano)VALUES($user_id, $peso, $imc, '$date')";
$result=mysqli_query($conn,$sql);

if($result){
echo "<script>alert('O seu peso foi guardado com sucesso!');top.location.href='meus_dados.php';</script>";

}
else {
echo "<script>alert('Ocorreu um erro, tente de novo!');</script>";
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
require('registar_peso.php');
}
mysqli_close($conn);



?>
