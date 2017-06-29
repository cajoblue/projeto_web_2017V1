<?php
include('conexao.php');

$id=$_GET['id'];
$i=$_GET['imagem'];

echo" <a href='eventos.php'><button>Voltar Atrás</button></a>";


$sql="SELECT * FROM eventos where id='$id'";
$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_array($result)){
$nome=$row['nome'];
$desc=$row['descricao'];


echo "<table width=\"400\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"1\" bgcolor=\"#CCCCCC\">";
echo " <tr>";
echo "  <form id=\"form1\" name=\"form1\"action=salvar_evento.php?id=".$row['id']." method=\"POST\" >";
echo " <td>";
echo "<input type=\"hidden\" name=\"id\" VALUE=\"$id\">";
echo "<table width=\"400\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"1\" >";
echo "<tr>";
echo " <td><table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"1\" bgcolor=\"#FFFFFF\">";
echo "<tr>";
echo "<td bgcolor=\"#F8F7F1\"><strong>Nome do Evento</strong></td>";
echo "<td bgcolor=\"#F8F7F1\">:</td>";
echo "<td><input name=\"nome\" value='$nome' type=\"text\" id=\"nome\" size=\"50\" /></td>";
echo "</tr>";
echo "<tr>";
echo "<td bgcolor=\"#F8F7F1\"><strong>Descrição</strong></td>";
echo "<td bgcolor=\"#F8F7F1\">:</td>";
echo "<td><input name=\"descricao\" value='$desc' type=\"text\" id=\"descricao\" size=\"50\" /></td>";
echo "</tr>";
echo "<tr>";
echo "<td><input type=\"submit\" name=\"Submit\" value=\"Atualizar Tópico\" /></td>";
echo " <td><input type=\"reset\" name=\"Submit2\" value=\"Apagar tudo\"></td>";
echo "</tr>";
echo "</table>";
}
?>
