<?php
include('conexao.php');



//if(empty($a_answer) || !preg_match("/^[0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzÀÁÂÃÇÈÉÊÌÍÒÓÔÕÙÚÛàáâãçèéêìíîòóôõùúû ]+$/", $a_answer)){
//echo "<script>alert('Comentário inválido, por favor tente de novo!');top.location.href='ver_topico_forum.php?id=$subcategoria_id';</script>";
//}else{

$user_id=$_GET['id_user'];

    $id_sub=$_GET['id_sub'];
    $id_subcategoria=$_GET['id_subcategoria'];




// Obter valor ID enviado
$id=$_POST['id'];

  $a_answer=$_POST['a_answer'];
  $datetime = date("d/m/y H:i:s"); // criar data e hora

    //  $destino = 'images/' . $_FILES['arquivo']['name'];

// Cria uma variável que terá os dados do erro
$erro = false;



// Encontra o numero de comentário mais alto
$sql = "SELECT MAX(a_id) AS Maxa_id FROM forum_answer WHERE id_question='$id'";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_array($result);

// adiciona + 1 ao numero de comentário mais alto e mantem o nome da variavel "$Max_id". Se não houver nenhum comentário defenir = 1
 if ($rows) {
        $Max_id = $rows['Maxa_id'] + 1;
 } else {
        $Max_id = 1;
      }

    // Inserir o comentário
    $sql2 = "INSERT INTO forum_answer (id_question, id_login, a_id, a_answer, data_reg)
             VALUES('$id', '$user_id', '$Max_id', '$a_answer'  ,'$datetime')";
    $result2 = mysqli_query($conn, $sql2);

    if ($result2) {
        echo "<script>alert('Comentário inserido!');top.location.href='ver_topico_forum.php?id=".$id."&id_sub=$id_sub&id_subcategoria=$id_subcategoria';</script>";
        $tbl_name2 = "forum_question";
        $sql3 = "UPDATE $tbl_name2 SET reply='$Max_id' WHERE id='$id'";
        $result3 = mysqli_query($conn, $sql3);

    } else {
        echo "ERROR";
    }

//}
    mysqli_close($conn);

?>
