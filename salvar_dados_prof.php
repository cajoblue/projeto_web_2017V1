<?php
include('conexao.php');
include 'functions.php';
$tbl_name="t_prof"; // Table name

// get value of id that sent from address bar
$my_id = $_SESSION['idUtilizador'];


// Obter valores enviados do formulário
    $nome_completo = ($_POST['nome_completo']);
    $area_esp = $_POST['area_esp'];
    $local_trab = $_POST['local_trab'];
    $formacao_acad= $_POST['formacao_acad'];



// atualizar o comentário
$sql2="UPDATE  $tbl_name SET nome_completo='$nome_completo', area_esp='$area_esp', local_trab='$local_trab', formacao_acad='$formacao_acad' WHERE idUtilizador=$my_id ";
$result2=mysqli_query($conn,$sql2);

if($result2) {

    echo "<script>alert('Dados Pessoais editados com sucesso!');top.location.href='meu_perfil_prof.php?idUtilizador=" . $my_id . "';</script>";
}

?>