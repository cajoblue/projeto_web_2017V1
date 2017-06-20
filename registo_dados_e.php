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
		$altura= $_POST['altura'];
		$random_number=rand();
$today=date("Y-m-d");

if($today==$data_nasc ||$data_nasc >$today ){
echo "<script>alert('Data inválida!');top.location.href='registar_dados_e.php';</script>";

}
if(!preg_match("/^[0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzÀÁÂÃÇÈÉÊÌÍÒÓÔÕÙÚÛàáâãçèéêìíîòóôõùúû ]+$/", $nome_completo)
|| !preg_match("/^[0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzÀÁÂÃÇÈÉÊÌÍÒÓÔÕÙÚÛàáâãçèéêìíîòóôõùúû ]+$/", $ano_escola)
|| !preg_match("/^[0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzÀÁÂÃÇÈÉÊÌÍÒÓÔÕÙÚÛàáâãçèéêìíîòóôõùúû ]+$/", $escola)
|| !preg_match("/^[0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzÀÁÂÃÇÈÉÊÌÍÒÓÔÕÙÚÛàáâãçèéêìíîòóôõùúû ]+$/", $at_interesse)){
	echo "<script>alert('Dados inválidos!');top.location.href='registar_dados_e.php';</script>";
}


    $sql = "INSERT INTO t_estudante (nome_completo, data_nasc, ano_escola, escola, at_interesse, idUtilizador,hash_sessao,altura)
		VALUES ('$nome_completo','$data_nasc','$ano_escola','$escola','$at_interesse','$my_id','$random_number','$altura')";
		$sql_1 = "INSERT INTO registo_controller (hash_sessao,user_id)
		VALUES ('$random_number','$my_id')";

if (mysqli_query($conn, $sql) && $conn->query($sql_1)) {
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
