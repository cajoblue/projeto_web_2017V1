<?php
include('conexao.php');

$tbl_name="eventos"; // Table name

// get value of id that sent from address bar
$id=$_GET['id'];
$i=$_GET['imagem'];

$sql="DELETE  FROM $tbl_name WHERE id= '$id'";
$result2=mysqli_query($conn,$sql);
unlink("".$i."");

if($result2) {
    echo "<script>alert('Evento Eliminado!');top.location.href='eventos.php';</script>";

}

// Fechar conexão
mysqli_close($conn);
?>