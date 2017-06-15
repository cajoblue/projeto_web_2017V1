<?php
include('conexao.php');
include 'functions.php';
$tbl_name="t_estudante"; // Table name

// get value of id that sent from address bar
$my_id = $_SESSION['idUtilizador'];


// Obter valores enviados do formulário
   $nome_completo = ($_POST['nome_completo']);
    $data_nasc = $_POST['datepicker'];
    $ano_escola = $_POST['ano_escola'];
    $escola= $_POST['escola'];
    $at_interesse= $_POST['at_interesse'];




// atualizar o comentário
$sql2="UPDATE  $tbl_name SET nome_completo='$nome_completo', datepicker='$data_nasc', ano_escola='$ano_escola', escola='$escola', at_interesse='$at_interesse' WHERE idUtilizador=$my_id ";
$result2=mysqli_query($conn,$sql2);

if($result2) {

    echo "<script>alert('Dados Pessoais editados com sucesso!');top.location.href='meu_perfil_e.php?idUtilizador=" . $my_id . "';</script>";
}

?>