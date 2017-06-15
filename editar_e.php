<?php
include('conexao.php');
$tbl_name="t_estudante"; // Table name

// get value of id that sent from address bar
$my_id = $_SESSION['idUtilizador'];

$sql2="SELECT * FROM $tbl_name WHERE idUtilizador=$my_id";
$result2=mysqli_query($conn,$sql2);
   
while($row=mysqli_fetch_array($result2)){

    echo "<table width=\"400\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"1\" bgcolor=\"#CCCCCC\">";
    echo " <tr>";
    echo "  <form id=\"form1\" name=\"form1\"action=salvar_dados_e.php method=\"POST\" >";
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
    echo "<td bgcolor=\"#F8F7F1\"><strong>Data de Nascimento</strong></td>";
    echo "<td bgcolor=\"#F8F7F1\">:</td>";
    echo "<td><input name=\"datepicker\" value=".$row['datepicker']." type=\"text\" id=\"datepicker\" size=\"50\" /></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td bgcolor=\"#F8F7F1\"><strong>Ano de Escolaridade</strong></td>";
    echo "<td bgcolor=\"#F8F7F1\">:</td>";
    echo "<td><input name=\"ano_escola\" value=".$row['ano_escola']." type=\"text\" id=\"ano_escola\" size=\"50\" /></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td bgcolor=\"#F8F7F1\"><strong>Escola que Frequenta</strong></td>";
    echo "<td bgcolor=\"#F8F7F1\">:</td>";
    echo "<td><input name=\"escola\" value=".$row['escola']." type=\"text\" id=\"ESCOLA\" size=\"50\" /></td>";
    echo "</tr>";
    echo "<td bgcolor=\"#F8F7F1\"><strong>Atividades de Interesse</strong></td>";
    echo "<td bgcolor=\"#F8F7F1\">:</td>";
    echo "<td><input name=\"at_interesse\" value=".$row['at_interesse']." type=\"text\" id=\"at_interesse\" size=\"50\" /></td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><input type=\"submit\" name=\"Submit\" value=\"Atualizar Dados Pessoais\" /></td>";
    echo " <td><input type=\"reset\" name=\"Submit2\" value=\"Apagar tudo\"></td>";
    echo "</tr>";
    echo "</table>";
}


mysqli_close($conn);

?>
