<?php
include('conexao.php');

$tbl_name="forum_question"; // Table name

// get value of id that sent from address bar
$id=$_GET['id'];
$i=$_GET['imagem'];


$sql="DELETE  FROM $tbl_name WHERE id= '$id'";
$result2=mysqli_query($conn,$sql);
unlink("".$i."");

if($result2) {
    echo "<script>alert('Tópico Eliminado!');top.location.href='menu_forum.php';</script>";

}

// Fechar conexão
mysqli_close($conn);
?>