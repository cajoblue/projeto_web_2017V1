<?php
include('conexao.php');
$tbl_name="t_estudante"; // Table name

// get value of id that sent from address bar
$my_id = $_SESSION['idUtilizador'];

$sql2="SELECT * FROM t_estudante WHERE idUtilizador=$my_id";
$result2=mysqli_query($conn,$sql2);
echo "<input type=\"hidden\" name=\"id\" VALUE=\"$my_id\">";
echo " <td><table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"1\" bgcolor=\"#FFFFFF\">";
while($row=mysqli_fetch_array($result2)){
    echo "<tr>";
    echo "<td bgcolor=\"#F8F7F1\"><strong>Nome Completo</strong></td>";
    echo "<td><input name=\"nome_completo\" value=".$row['nome_completo']." type=\"text\" id=\"nome_completo\" size=\"50\" /></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td bgcolor=\"#F8F7F1\"><strong>Data de Nascimento</strong></td>";
    echo "<td><input name=\"datepicker\" value=".$row['data_nasc']." type=\"text\" id=\"datepicker\" size=\"50\" /></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td bgcolor=\"#F8F7F1\"><strong>Ano de Escolaridade</strong></td>";
    echo "<td><input name=\"ano_escola\" value=".$row['ano_escola']." type=\"text\" id=\"ano_escola\" size=\"50\" /></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td bgcolor=\"#F8F7F1\"><strong>Escola que Frequenta</strong></td>";
    echo "<td><input name=\"escola\" value=".$row['escola']." type=\"text\" id=\"ESCOLA\" size=\"50\" /></td>";
    echo "</tr>";
    echo "<td bgcolor=\"#F8F7F1\"><strong>Atividades de Interesse</strong></td>";
    echo "<td><input name=\"at_interesse\" value=".$row['at_interesse']." type=\"text\" id=\"at_interesse\" size=\"50\" /></td>";
    echo "</tr>";
}
  echo "</table>";

echo "<input type=\"submit\" name=\"Submit\" value=\"Atualizar Dados Pessoais\" />";
echo " <input type=\"reset\" name=\"Submit2\" value=\"Apagar tudo\">";

mysqli_close($conn);

?>
