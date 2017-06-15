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
    <a href="logPS.php" class="float"><img src="images/teenpower.png" alt="" width="171" height="73" /></a>
    <div class="topblock2">
         <h3>Profissional de Saúde</h3>
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

        echo "<td bgcolor=\"#FFFFFF\"><a href='ver_topico_ps.php?id=".$row['id']."'>".$row['topic']."</a><a href='eliminar_topico.php?id=".$row['id']."'><img src=\"images/nocheck.jpg\" alt=\"\" width=\"31\" height=\"23\" /></a><a href='editar_topico.php?id=".$row['id']."'><img src=\"images/EDITAR.\" alt=\"\" width=\"31\" height=\"23\" /></a><br></td>";
        echo "<td align=\"center\" bgcolor=\"#FFFFFF\">".$row['view']."</td>";
        echo "<td align=\"center\" bgcolor=\"#FFFFFF\">".$row['reply']."</td>";
        echo "<td align=\"center\" bgcolor=\"#FFFFFF\">".$row['datetime']."</td>";
        echo "</tr>";
    }
    // Exit looping and close connection
    mysqli_close($conn);
    ?>
    <tr>
        <td colspan="5" align="center" bgcolor="#E6E6E6"><a href="criar_topico_ps.php"><strong>Criar Novo Tópico</strong> </a></td>
    </tr>
</table>
    </div></div>
<br>
  <div id="left" class="column">
        <div class="block">
            <h1>Menu</h1>
            <ul id="navigation">
                <li class="color"><a href="menu_forum_ps.php">Fórum</a></li>
                <li><a href="#">Mensagens</a></li>
                <li class="color"><a href="meu_perfil_ps.php">Meu Perfil</a></li>
                <li><a href="ver_estudantes_ps.php">Ver Estudantes</a></li>
                <li class="color"><a href="ver_prof_ps.php">Ver Professores</a></li>
                <li><a href="#">Os Meus Artigos</a></li>
                <li class="color"><a href="registo_view_ps.php">Adicionar utilizador</a></li>
            </ul>
        </div>
    </div>
<div class="blocks">

</div>

<div id="footer">
    <p>Copyright &copy;. All rights reserved. Design by <a >TeenPower</a>     </p>
</div>
</body>
</html>
