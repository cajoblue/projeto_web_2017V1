<?php
include('conexao.php');
session_start();

$peso=$_POST['peso'];
$date=$_POST['datepicker'];
$user_id=$_SESSION['idUtilizador'];
$altura=1.73;
$caulular=$peso/($altura*$altura);
$imc = number_format($caulular, 2, '.', '');

    $sql="INSERT INTO tb_dados (id_jovem, peso, imc, d_ano)VALUES($user_id, $peso, $imc, '$date')";
    $result=mysqli_query($conn,$sql);

    if($result){
        echo "<script>alert('O seu peso foi guardado com sucesso!');top.location.href='meus_dados.php';</script>";
var_dump($format_imc);
    }
    else {
        echo "<script>alert('Ocorreu um erro, tente de novo!');</script>";
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        require('registar_peso.php');
    }
mysqli_close($conn);



?>
