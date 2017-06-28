<?php
include('conexao.php');
include 'functions.php';
$tbl_name="t_prof_saude"; // Table name

// get value of id that sent from address bar
$my_id = $_SESSION['idUtilizador'];


// Obter valores enviados do formulário
if(!empty($_POST)){
    $nome_completo = ($_POST['nome_completo']);
    $area_esp = $_POST['area_esp'];
    $local_trab = $_POST['local_trab'];
    $formacao_acad= $_POST['formacao_acad'];

    if(!preg_match("/^[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzÀÁÂÃÇÈÉÊÌÍÒÓÔÕÙÚÛàáâãçèéêìíîòóôõùúû ]+$/", $nome_completo)
    || !preg_match("/^[0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzÀÁÂÃÇÈÉÊÌÍÒÓÔÕÙÚÛàáâãçèéêìíîòóôõùúû ]+$/", $area_esp)
    || !preg_match("/^[0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzÀÁÂÃÇÈÉÊÌÍÒÓÔÕÙÚÛàáâãçèéêìíîòóôõùúû ]+$/", $local_trab)
    || !preg_match("/^[0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzÀÁÂÃÇÈÉÊÌÍÒÓÔÕÙÚÛàáâãçèéêìíîòóôõùúû ]+$/", $formacao_acad)){
      echo "<script>alert('Dados inválidos!');top.location.href='editar_dados_ps.php';</script>";
      die;
    }

// atualizar o comentário
$sql2="UPDATE  $tbl_name SET nome_completo='$nome_completo', area_esp='$area_esp', local_trab='$local_trab', formacao_acad='$formacao_acad' WHERE idUtilizador=$my_id ";
$result2=mysqli_query($conn,$sql2);

if($result2) {

    echo "<script>alert('Dados Pessoais editados com sucesso!');top.location.href='meu_perfil_e.php?idUtilizador=" . $my_id . "';</script>";
   }
}else{
  require('editar_dados_ps.php');
}
?>
