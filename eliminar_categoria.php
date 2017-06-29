<?php
include('conexao.php');


// get value of id that sent from address bar
$id=$_GET['id'];


$sql="DELETE  FROM categorias_forum WHERE id= '$id'";
$result2=mysqli_query($conn,$sql);
// unlink("".$i."");

if($result2) {
    echo "<script>alert('Tópico Eliminado!');top.location.href='index_forum.php';</script>";

}

// Fechar conexão
mysqli_close($conn);
?>