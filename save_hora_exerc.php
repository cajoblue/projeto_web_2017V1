<?php
include('conexao.php');
session_start();

$hora=$_POST['nr_horas'];
$data=$_POST['data'];
$user_id=$_SESSION['idUtilizador'];

    $sql="INSERT INTO tb_horas_exercicio (user_id, nr_horas, dataResg)VALUES($user_id, $hora, '$data')";
    $result=mysqli_query($conn,$sql);

    if($result){
        echo "<script>alert('Registado com sucesso!');top.location.href='meus_dados.php';</script>";
    }
    else {
        echo "<script>alert('Ocorreu um erro, tente de novo!');</script>";
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        require('registar_hora_exerc.php');
    }
mysqli_close($conn);
