<?php
include('conexao.php');



// get value of id that sent from address bar
$id=$_GET['id'];
$id_sub=$_GET['id_sub'];



$sql="DELETE  FROM sub_categorias_forum WHERE id= '$id'";
$result2=mysqli_query($conn,$sql);

if($result2) {
   echo "<script>alert('Tópico Eliminado!');top.location.href='sub_categorias.php?id=".$id_sub."';</script>";

}

// Fechar conexão
mysqli_close($conn);
?>
