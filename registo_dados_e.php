<?php
include ("conexao.php");
header('Content-Type: text/html; charset=UTF-8');
include 'functions.php';
//Seleciona a base de dados


$my_id = $_SESSION['idUtilizador'];

if(!empty($_POST)){
	$nome_completo = ($_POST['nome_completo']);
    $data_nasc = $_POST['datepicker'];
    $ano_escola = $_POST['ano_escola'];
    $escola= $_POST['escola'];
    $at_interesse= $_POST['at_interesse'];


    $sql = "INSERT INTO t_estudante (nome_completo, data_nasc, ano_escola, escola, at_interesse, idUtilizador) VALUES ('$nome_completo','$data_nasc','$ano_escola','$escola','$at_interesse','$my_id')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Dados inseridos com sucesso!');top.location.href='meu_perfil_e.php';</script>";
    echo "<br/> style='text-align:center;'  <a href='registar_dados_e.php'>Voltar ao ínicio</a>";
    
     } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}else{
    require('registar_dados_e.php');
}
mysqli_close($conn);

?>