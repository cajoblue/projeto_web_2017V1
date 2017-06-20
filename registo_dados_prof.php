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
$random_number=rand();

if(!empty($_POST)){
	$nome_completo = ($_POST['nome_completo']);
    $area_esp = $_POST['area_esp'];
    $local_trab = $_POST['local_trab'];
    $formacao_acad= $_POST['formacao_acad'];

		if(!preg_match("/^[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzÀÁÂÃÇÈÉÊÌÍÒÓÔÕÙÚÛàáâãçèéêìíîòóôõùúû ]+$/", $nome_completo)
		|| !preg_match("/^[0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzÀÁÂÃÇÈÉÊÌÍÒÓÔÕÙÚÛàáâãçèéêìíîòóôõùúû ]+$/", $area_esp)
		|| !preg_match("/^[0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzÀÁÂÃÇÈÉÊÌÍÒÓÔÕÙÚÛàáâãçèéêìíîòóôõùúû ]+$/", $local_trab)
		|| !preg_match("/^[0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzÀÁÂÃÇÈÉÊÌÍÒÓÔÕÙÚÛàáâãçèéêìíîòóôõùúû ]+$/", $formacao_acad)){
			echo "<script>alert('Dados inválidos!');top.location.href='registar_dados_ps.php';</script>";
			die;
		}

    $sql = "INSERT INTO t_prof (nome_completo, area_esp, local_trab, formacao_acad, idUtilizador,hash_session)
		VALUES ('$nome_completo','$area_esp','$local_trab','$formacao_acad','$my_id','$random_number')";
		$sql_1 = "INSERT INTO registo_controller (hash_sessao,user_id)
		VALUES ('$random_number','$my_id')";
if (mysqli_query($conn, $sql)&& $conn->query($sql_1)) {
    echo "<script>alert('Dados inseridos com sucesso!');top.location.href='meu_perfil_e.php';</script>";
    echo "<br/> style='text-align:center;'  <a href='registar_dados_prof.php'>Voltar ao ínicio</a>";

     } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}else{
    require('registar_dados_prof.php');
}
mysqli_close($conn);

?>
