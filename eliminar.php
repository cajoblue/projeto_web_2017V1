<?php
include('conexao.php');

$tbl_name="forum_answer"; // Table name

// get value of id that sent from address bar
$id=$_GET['id'];
$id_question=$_GET['question_id'];


$sql="DELETE  FROM $tbl_name WHERE a_id= '$id'  and question_id = '$id_question'";
$result2=mysqli_query($conn,$sql);

if($result2) {
    echo "Comentário eliminado com sucesso<BR>";
    echo "<a href='ver_topico.php?id=" . $id_question . "'>Voltar ao tópico</a>";

}

// Fechar conexão
mysqli_close($conn);
?>