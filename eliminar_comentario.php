<?php
include('conexao.php');

$tbl_name="forum_answer"; // Table name

// get value of id that sent from address bar
$id=$_GET['id'];
$id_question=$_GET['question_id'];
$i=$_GET['imagem'];

// Encontra o numero de comentário mais alto
$sql="SELECT MAX(a_id) AS Maxa_id FROM $tbl_name WHERE question_id='$id'";
$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_array($result);

// adiciona + 1 ao numero de comentário mais alto e mantem o nome da variavel "$Max_id". Se não houver nenhum comentário defenir = 1
if ($rows) {
    $Max_id = $rows['Maxa_id']-1;
}
else {
    $Max_id = 0;
}


$sql="DELETE  FROM $tbl_name WHERE a_id= '$id'  and question_id = '$id_question'";
$result2=mysqli_query($conn,$sql);
unlink("".$i."");

if($result2) {
    echo "<script>alert('Comentário Eliminado!');top.location.href='ver_topico.php?id=" . $id_question . "';</script>";
    //echo "<a href='ver_topico.php?id=" . $id_question . "'>Voltar ao tópico</a>";

    $tbl_name2="forum_question";
    $sql3="UPDATE $tbl_name2 SET reply='$Max_id' WHERE id='$id'";
    $result3=mysqli_query($conn,$sql3);
}
else {
    echo "ERROR";
}

// Fechar conexão
mysqli_close($conn);
?>