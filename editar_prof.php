<?php
include('conexao.php');
$tbl_name="t_prof"; // Table name

// get value of id that sent from address bar
$my_id = $_SESSION['idUtilizador'];

$sql2="SELECT * FROM $tbl_name WHERE idUtilizador=$my_id";
$result2=mysqli_query($conn,$sql2);
   
while($row=mysqli_fetch_array($result2)){

    echo "<table width=\"400\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"1\" bgcolor=\"#CCCCCC\">";
    echo " <tr>";
    echo "  <form id=\"form1\" name=\"form1\"action=salvar_dados_prof.php method=\"POST\" >";
    echo " <td>";
    echo "<input type=\"hidden\" name=\"id\" VALUE=\"$my_id\">";
    echo "<table width=\"400\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"1\" >";
    echo "<tr>";
    echo " <td><table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"1\" bgcolor=\"#FFFFFF\">";
    echo "<tr>";
    echo "<td bgcolor=\"#F8F7F1\"><strong>Nome Completo</strong></td>";
    echo "<td bgcolor=\"#F8F7F1\">:</td>";
    echo "<td><input name=\"nome_completo\" value=".$row['nome_completo']." type=\"text\" id=\"nome_completo\" size=\"50\" /></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td bgcolor=\"#F8F7F1\"><strong>Área de Especialização</strong></td>";
    echo "<td bgcolor=\"#F8F7F1\">:</td>";
    echo "<td><input name=\"area_esp\" value=".$row['area_esp']." type=\"text\" id=\"area_esp\" size=\"50\" /></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td bgcolor=\"#F8F7F1\"><strong>Local de Trabalho</strong></td>";
    echo "<td bgcolor=\"#F8F7F1\">:</td>";
    echo "<td><input name=\"local_trab\" value=".$row['local_trab']." type=\"text\" id=\"local_trab\" size=\"50\" /></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td bgcolor=\"#F8F7F1\"><strong>Formação Académica</strong></td>";
    echo "<td bgcolor=\"#F8F7F1\">:</td>";
    echo "<td><input name=\"formacao_acad\" value=".$row['formacao_acad']." type=\"text\" id=\"formcacao_acad\" size=\"50\" /></td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><input type=\"submit\" name=\"Submit\" value=\"Atualizar Dados Pessoais\" /></td>";
    echo " <td><input type=\"reset\" name=\"Submit2\" value=\"Apagar tudo\"></td>";
    echo "</tr>";
    echo "</table>";
}


mysqli_close($conn);

?>
