<?php
include('conexao.php');

$tbl_name="forum_question"; // Table name

// get value of id that sent from address bar
$id=$_POST['id'];

// Obter valores enviados do formulário
$topic=$_POST['topic'];
$detail=$_POST['detail'];
$name=$_POST['name'];
$email=$_POST['email'];

$datetime=date("d/m/y H:i:s"); // criar data e hora

// atualizar o comentário
$sql2="UPDATE  $tbl_name SET topic='$topic', detail='$detail', name='$name', datetime='$datetime' WHERE id=$id ";
$result2=mysqli_query($conn,$sql2);

if($result2) {

    echo "<script>alert('Comentário atualizado!');top.location.href='ver_topico.php?id=" . $id . "';</script>";
}

?>