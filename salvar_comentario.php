<?php
include('conexao.php');

$tbl_name="forum_answer"; // Table name

// get value of id that sent from address bar
$id=$_POST['id'];
$id_question=$_POST['question_id'];

// Obter valores enviados do formulário
$a_name=$_POST['a_name'];
$a_email=$_POST['a_email'];
$a_answer=$_POST['a_answer'];

$datetime=date("d/m/y H:i:s"); // criar data e hora


// atualizar o comentário
$sql2="UPDATE  $tbl_name SET a_name='$a_name',a_email='$a_email',a_answer='$a_answer',a_datetime='$datetime' WHERE `question_id`=$id_question AND`a_id`=$id ";
$result2=mysqli_query($conn,$sql2);

if($result2) {

    echo "<script>alert('Comentário atualizado!');top.location.href='ver_topico.php?id=" . $id_question . "';</script>";
}

    ?>