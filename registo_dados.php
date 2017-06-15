<?php
include ("conexao.php");
header('Content-Type: text/html; charset=UTF-8');
include 'functions.php';
//Seleciona a base de dados

$nome_completo ="" ;
$area_esp = "";
$local_trab = "";
$informacao_acad= "";
$my_id = $_SESSION['idUtilizador'];

if(!empty($_POST)){
	$nome_completo = ($_POST['nome_completo']);
    $area_esp = $_POST['area_esp'];
    $local_trab = $_POST['local_trab'];
    $formacao_acad= $_POST['formacao_acad'];


    $sql = "INSERT INTO t_prof_saude (nome_completo, area_esp, local_trab, formacao_acad, idUtilizador) VALUES ('$nome_completo','$area_esp','$local_trab','$formacao_acad','$my_id')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Dados inseridos com sucesso!');top.location.href='meu_perfil_ps.php';</script>";
    echo "<br/> style='text-align:center;'  <a href='registar_dados_ps.php'>Voltar ao ínicio</a>";
    
     } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}else{
    require('registar_dados_ps.php');
}
mysqli_close($conn);

?>