<?php

include('conexao.php');

// get value of id that sent from address bar
$id=$_GET['id'];

$sql2="SELECT * FROM categorias_forum WHERE id=$id";
$result2=mysqli_query($conn,$sql2);

echo "<a href='index_forum.php'><button>Voltar Atrás</button></a>";

while($row=mysqli_fetch_array($result2)){
$categoria=$row['categoria'];
    echo "<table width=\"400\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"1\" bgcolor=\"#CCCCCC\">";
    echo " <form id=\"form1\" name=\"form1\"action=salvar_categoria.php method=\"POST\" >";
    echo " <td>";
    echo "<input type=\"hidden\" name=\"id\" VALUE=\"$id\">";
    echo "<table width=\"400\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"1\" >";
    echo " <td><table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"1\" bgcolor=\"#FFFFFF\">";
    echo "<tr>";
    echo "<td bgcolor=\"#F8F7F1\"><strong>Categoria</strong></td>";
    echo "<td bgcolor=\"#F8F7F1\">:</td>";
    echo "<td><input name=\"categoria\" value='$categoria' type=\"text\" id=\"a_name\" size=\"50\" /></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><input type=\"submit\" name=\"Submit\" value=\"Atualizar Tópico\" /></td>";
    echo "<td><input type=\"reset\" name=\"Submit2\" value=\"Apagar tudo\"></td>";
    echo "</tr>";
    echo " </td>";
    echo"</form>";
    echo "</table>";
}


mysqli_close($conn);

?>
