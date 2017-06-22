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
       <h3><?php session_start();
        $email = $_SESSION['login'];
        echo $email; ?></h3>
         <a href="logout.php" class="float">Terminar Sessão</a>
    </div>
    <div id="footer">
    </div>
</div>

<?php

include('conexao.php');

$sql="SELECT * FROM forum_question ORDER BY id DESC";
// OREDER BY id DESC is order result by descending

$result=mysqli_query($conn,$sql);

?>
<div id="container">
    <div id="center" >
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
        $i=$row['imagem'];
        echo "<td bgcolor=\"#FFFFFF\"><a href='ver_topico.php?id=".$row['id']."'>".$row['topic']."</a><a href='eliminar_topico.php?id=".$row['id']."&imagem=".$row['imagem']."'><img src=\"images/nocheck.jpg\" alt=\"\" width=\"31\" height=\"23\" /></a><a href='editar_topico.php?id=".$row['id']."'><img src=\"images/EDITAR.\" alt=\"\" width=\"31\" height=\"23\" /></a><br></td>";
        echo "<td align=\"center\" bgcolor=\"#FFFFFF\">".$row['view']."</td>";
        echo "<td align=\"center\" bgcolor=\"#FFFFFF\">".$row['reply']."</td>";
        echo "<td align=\"center\" bgcolor=\"#FFFFFF\">".$row['data_reg']."</td>";
        echo "</tr>";
    }
    // Exit looping and close connection
    mysqli_close($conn);
    ?>
    <tr>
        <td colspan="5" align="center" bgcolor="#E6E6E6"><a href="criar_topico.php"><strong>Criar Novo Tópico</strong> </a></td>
    </tr>
</table>
    </div></div>
<br>

<div class="blocks">

</div>

<div id="footer">
    <p>Copyright &copy;. All rights reserved. Design by <a >TeenPower</a>     </p>
</div>
</body>
</html>
