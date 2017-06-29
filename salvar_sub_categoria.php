<?php
include('conexao.php');


// get value of id that sent from address bar
$id=$_POST['id'];
$id_sub=$_GET['id_sub'];

// Obter valores enviados do formulário
$sub_categoria=$_POST['sub_categoria'];

// atualizar o comentário
$sql2="UPDATE  sub_categorias_forum SET sub_categoria='$sub_categoria' WHERE id=$id ";
$result2=mysqli_query($conn,$sql2);

if($result2) {

    echo "<script>alert('Sub_Categoria atualizado!');top.location.href='sub_categorias.php?id=".$id_sub."'</script>";
}

?>