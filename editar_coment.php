<?php
include('conexao.php');

$tbl_name="forum_answer"; // Table name

// get value of id that sent from address bar
$id=$_GET['id'];
$id_question=$_GET['question_id'];
$id_question=$_GET['i'];


$tbl_name2="forum_answer"; // Switch to table "forum_answer"

$sql2="SELECT * FROM $tbl_name2 WHERE question_id='$id_question' AND a_id=$id";
$result2=mysqli_query($conn,$sql2);

while($row=mysqli_fetch_array($result2)){

echo "<table width=\"400\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"1\" bgcolor=\"#CCCCCC\">";
   echo " <tr>";
      echo "  <form id=\"form1\" name=\"form1\"action=salvar_comentario.php method=\"POST\" >";
       echo " <td>";
echo "<input type=\"hidden\" name=\"id\" VALUE=\"$id\">";
echo "<input type=\"hidden\" name=\"question_id\" VALUE=\"$id_question\">";
echo "<table width=\"400\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"1\" >";
echo "<tr>";
echo " <td><table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"1\" bgcolor=\"#FFFFFF\">";
echo "<tr>";
echo "<td bgcolor=\"#F8F7F1\"><strong>Nome</strong></td>";
echo "<td bgcolor=\"#F8F7F1\">:</td>";
echo "<td><input name=\"a_name\" value=".$row['a_name']." type=\"text\" id=\"a_name\" size=\"50\" /></td>";
echo "</tr>";
echo "<tr>";
echo "<td bgcolor=\"#F8F7F1\"><strong>Email</strong></td>";
echo "<td bgcolor=\"#F8F7F1\">:</td>";
echo "<td><input name=\"a_email\" value=".$row['a_email']." type=\"text\" id=\"a_email\" size=\"50\" /></td>";
echo "</tr>";
echo "<tr>";
echo "<td bgcolor=\"#F8F7F1\"><strong>Comentário</strong></td>";
echo "<td bgcolor=\"#F8F7F1\">:</td>";
echo "<td><input name=\"a_answer\" value=".$row['a_answer']." type=\"text\" id=\"a_answer\" size=\"50\" /></td>";
echo "</tr>";
echo "<tr>";
echo "<td><input type=\"submit\" name=\"Submit\" value=\"Atualizar Comentário\" /></td>";
echo " <td><input type=\"reset\" name=\"Submit2\" value=\"Apagar tudo\"></td>";
echo "</tr>";
echo "</table>";
}


mysqli_close($conn);

?>

