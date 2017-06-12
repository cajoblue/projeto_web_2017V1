<?php

include('conexao.php');

$tbl_name="forum_question"; // Table name

// get value of id that sent from address bar
$id=$_GET['id'];

$sql2="SELECT * FROM $tbl_name WHERE id=$id";
$result2=mysqli_query($conn,$sql2);

while($row=mysqli_fetch_array($result2)){

    echo "<table width=\"400\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"1\" bgcolor=\"#CCCCCC\">";
    echo " <tr>";
    echo "  <form id=\"form1\" name=\"form1\"action=salvar_topico.php method=\"POST\" >";
    echo " <td>";
    echo "<input type=\"hidden\" name=\"id\" VALUE=\"$id\">";
    echo "<table width=\"400\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"1\" >";
    echo "<tr>";
    echo " <td><table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"1\" bgcolor=\"#FFFFFF\">";
    echo "<tr>";
    echo "<td bgcolor=\"#F8F7F1\"><strong>Tópico</strong></td>";
    echo "<td bgcolor=\"#F8F7F1\">:</td>";
    echo "<td><input name=\"topic\" value=".$row['topic']." type=\"text\" id=\"a_name\" size=\"50\" /></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td bgcolor=\"#F8F7F1\"><strong>Informação</strong></td>";
    echo "<td bgcolor=\"#F8F7F1\">:</td>";
    echo "<td><input name=\"detail\" value=".$row['detail']." type=\"text\" id=\"a_email\" size=\"50\" /></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td bgcolor=\"#F8F7F1\"><strong>Nome</strong></td>";
    echo "<td bgcolor=\"#F8F7F1\">:</td>";
    echo "<td><input name=\"name\" value=".$row['name']." type=\"text\" id=\"a_answer\" size=\"50\" /></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td bgcolor=\"#F8F7F1\"><strong>Email</strong></td>";
    echo "<td bgcolor=\"#F8F7F1\">:</td>";
    echo "<td><input name=\"email\" value=".$row['email']." type=\"text\" id=\"a_answer\" size=\"50\" /></td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><input type=\"submit\" name=\"Submit\" value=\"Atualizar Tópico\" /></td>";
    echo " <td><input type=\"reset\" name=\"Submit2\" value=\"Apagar tudo\"></td>";
    echo "</tr>";
    echo "</table>";
}


mysqli_close($conn);

?>
