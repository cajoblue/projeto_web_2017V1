<?php
include('conexao.php');


// get value of id that sent from address bar
$id=$_POST['id'];

// Obter valores enviados do formulário
$categoria=$_POST['categoria'];

// atualizar o comentário
$sql2="UPDATE  categorias_forum SET categoria='$categoria' WHERE id=$id ";
$result2=mysqli_query($conn,$sql2);

if($result2) {

    echo "<script>alert('Categoria atualizado!');top.location.href='index_forum';</script>";
}

?>