<?php
include('conexao.php');

$tbl_name="eventos"; // Table name

// get value of id that sent from address bar
$id=$_POST['id'];


// Obter valores enviados do formulário
$topic=$_POST['nome'];
$detail=$_POST['descricao'];



// atualizar o comentário
$sql2="UPDATE  $tbl_name SET nome='$topic', descricao='$detail' WHERE id=$id ";
$result2=mysqli_query($conn,$sql2);

if($result2) {

    echo "<script>alert('Evento atualizado!');top.location.href='eventos.php';</script>";
}

?>