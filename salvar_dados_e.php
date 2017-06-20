<?php
include('conexao.php');
include 'functions.php';
$tbl_name="t_estudante"; // Table name

// get value of id that sent from address bar
$my_id = $_SESSION['idUtilizador'];

function isInteger($input){
    return(ctype_digit(strval($input)));
}

if(!empty($_POST)){
// Obter valores enviados do formulário
   $nome_completo = ($_POST['nome_completo']);
    $data_nasc = $_POST['datepicker'];
    $ano_escola = $_POST['ano_escola'];
    $escola= $_POST['escola'];
    $at_interesse= $_POST['at_interesse'];
    $altura= $_POST['altura'];
    $today=date("Y-m-d");

    if(isInteger($altura)){
        echo "<script>alert('Altura inválida!');top.location.href='editar_dados_e.php';</script>";
    }


    if($today==$data_nasc || $data_nasc >$today ){
    echo "<script>alert('Data inválida!');top.location.href='editar_dados_e.php';</script>";

    }
    if(!preg_match("/^[0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzÀÁÂÃÇÈÉÊÌÍÒÓÔÕÙÚÛàáâãçèéêìíîòóôõùúû ]+$/", $nome_completo)
    || !preg_match("/^[0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzÀÁÂÃÇÈÉÊÌÍÒÓÔÕÙÚÛàáâãçèéêìíîòóôõùúû ]+$/", $ano_escola)
    || !preg_match("/^[0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzÀÁÂÃÇÈÉÊÌÍÒÓÔÕÙÚÛàáâãçèéêìíîòóôõùúû ]+$/", $escola)
    || !preg_match("/^[0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzÀÁÂÃÇÈÉÊÌÍÒÓÔÕÙÚÛàáâãçèéêìíîòóôõùúû ]+$/", $at_interesse)){
    	echo "<script>alert('Dados inválidos!');top.location.href='editar_dados_e.php';</script>";
    }




// atualizar o comentário
$sql2="UPDATE  t_estudante SET nome_completo='$nome_completo', data_nasc='$data_nasc', ano_escola='$ano_escola', escola='$escola', at_interesse='$at_interesse',altura='$altura' WHERE idUtilizador=$my_id ";
if(mysqli_query($conn,$sql2)) {

    echo "<script>alert('Dados Pessoais editados com sucesso!');top.location.href='meu_perfil_e.php?'</script>";
    }

}



?>
