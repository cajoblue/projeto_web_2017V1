<?php
include('conexao.php');

$tbl_name="forum_question"; // Table name

// get value of id that sent from address bar
$id=$_GET['id'];
$id_sub=$_GET['id_sub'];
$id_subcategoria=$_GET['id_subcategoria'];
$i=$_GET['imagem'];

$sql="DELETE  FROM $tbl_name WHERE id= '$id'";
$result2=mysqli_query($conn,$sql);
// unlink("".$i."");

if($result2) {
   echo "<script>alert('Tópico Eliminado!');top.location.href='menu_topico_forum.php?id=".$id_subcategoria."&id_sub=".$id_sub."';</script>";

}

// Fechar conexão
mysqli_close($conn);
?>
