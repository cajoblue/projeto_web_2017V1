<?php
include('conexao.php');

$tbl_name="forum_question"; // Table name

// get value of id that sent from address bar
$id=$_POST['id'];
$id_sub=$_GET['id_sub'];
$id_subcategoria=$_GET['id_subcategoria'];

// Obter valores enviados do formulário
$topic=$_POST['topic'];
$detail=$_POST['detail'];



// atualizar o comentário
$sql2="UPDATE  $tbl_name SET topic='$topic', detail='$detail' WHERE id=$id ";
$result2=mysqli_query($conn,$sql2);

if($result2) {

    echo "<script>alert('Comentário atualizado!');top.location.href='menu_topico_forum.php?id=".$id_subcategoria."&id_sub=".$id_sub."';</script>";
}

?>