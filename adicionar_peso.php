<?php
include('conexao.php');

$peso=$_POST['peso'];
$date=$_POST['datepicker'];



    $sql="INSERT INTO tb_dados (peso, d_ano, d_mes, d_dia)VALUES('$peso', '$date', '$date', '$date')";
    $result=mysqli_query($conn,$sql);

    if($result){
        echo "<script>alert('O seu peso foi guardado com sucesso!');top.location.href='meu_peso.php';</script>";
    }
    else {
        echo "ERROR";
    }
    mysqli_close($conn);

?>