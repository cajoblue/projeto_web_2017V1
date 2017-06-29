<?php require('functions.php'); ?>
<!DOCTYPE HTML >
<html>
<head>
    <title>Forum Teen Power</title>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<div id="header">
    <a href="inicio.php" class="float"><img src="images/teenpower.png" alt="" width="171" height="73" /></a>
    <div class="topblock2">
       <h3><?php 
        $email = $_SESSION['login'];
        echo $email; ?></h3>
         <a href="logout.php" class="float">Terminar Sessão</a>
    </div>
    <div id="footer">
    </div>
</div>
<div id="container">
  <div id="center" class="column">
    <div id="center" >

<?php

include('conexao.php');
$id_subcategoria=$_GET['id'];
$id_sub=$_GET['id_sub'];
$id=$_GET['id'];

$sql2="SELECT categoria FROM categorias_forum WHERE id='$id'";
$result2=mysqli_query($conn,$sql2);
while($row=mysqli_fetch_array($result2)){
    echo "<h1>".$row['categoria']. "</h1>";

}
//titulo
$sql2="SELECT sub_categoria FROM sub_categorias_forum WHERE id='$id_sub'";
$result2=mysqli_query($conn,$sql2);
while($row=mysqli_fetch_array($result2)){
    echo "<h1>".$row['sub_categoria']. "</h1>";

}
//topicos
$sql="SELECT * FROM forum_question Where fk_subcategoria='$id_subcategoria' AND id_subcategoria='$id_sub'  ORDER BY data_reg DESC ";
// OREDER BY id DESC is order result1 by descending
$result=mysqli_query($conn,$sql);

echo "<a href='sub_categorias.php?id=".$id."'><button>Voltar Atrás</button></a>";
echo"  <form action='novo_topico_forum.php?id=".$id."&id_sub=".$id_sub."' method='POST'>"; ?>
    <input type="submit" value="Criar Novo Tópico" />

<?php echo"   </form>"; ?>

<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
  <tr>
      <td width="53%" align="center" bgcolor="#E6E6E6"><strong>Topicos</strong></td>
      <td width="15%" align="center" bgcolor="#E6E6E6"><strong>Visualizações</strong></td>
      <td width="13%" align="center" bgcolor="#E6E6E6"><strong>Comentários</strong></td>
      <td width="13%" align="center" bgcolor="#E6E6E6"><strong>Data e Horas</strong></td>
  </tr>

    <?php
    // Start looping table row
    while($row=mysqli_fetch_array($result)){
        echo "<tr>";

        echo "<td bgcolor=\"#FFFFFF\"><a href='ver_topico_forum.php?id=".$row['id']."&id_sub=".$id_sub."&id_subcategoria=".$id_subcategoria."'>".$row['topic']."</a>
        <a href='eliminar_topico.php?id=".$row['id']."&id_sub=".$id_sub."&id_subcategoria=".$id_subcategoria."&imagem=".$row['imagem']."'><img src=\"images/nocheck.jpg\" alt=\"\" width=\"31\" height=\"23\" /></a>
        <a href='editar_topico.php?id=".$row['id']."&id_sub=".$id_sub."&id_subcategoria=".$id_subcategoria."'><img src=\"images/EDITAR.\" alt=\"\" width=\"31\" height=\"23\" /></a><br></td>";
        echo "<td align=\"center\" bgcolor=\"#FFFFFF\">".$row['view']."</td>";
        echo "<td align=\"center\" bgcolor=\"#FFFFFF\">".$row['reply']."</td>";
        echo "<td align=\"center\" bgcolor=\"#FFFFFF\">".$row['data_reg']."</td>";
        echo "</tr>";
    }
    // Exit looping and close connection
    mysqli_close($conn);
    ?>
</table>

    </div>
  </div>

  <?php require 'barra_lateral.php'; ?>
  <div class="blocks">

  </div>
</div>

<div id="footer">
    <p>Copyright &copy;. All rights reserved. Design by <a >TeenPower</a>     </p>
</div>
</body>
</html>
