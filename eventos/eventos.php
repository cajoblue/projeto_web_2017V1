<?php include_once'functions.php'; ?>
<!DOCTYPE HTML >
<html>
<head>
    <title>Teen Power</title>
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
        <div id="content">
            <h1>Eventos</h1>
        </div>
    </div>
    <?php require 'barra_lateral.php';?>
    <div id="center" >
        <form action="novo_evento.php"  method="POST" >
            <input type="submit" value="Novo Evento">
        </form>

        <?php
        include('conexao.php');

        $user_id=$_SESSION['idUtilizador'];
        $sql="SELECT * FROM eventos WHERE id_login = $user_id";
        $result=mysqli_query($conn,$sql);
        if (mysqli_num_rows($result) > 0) {
            echo "<table width=\"400\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"1\" >";
            echo "<tr>";
            echo "<th bgcolor=\"#F8F7F1\"><strong>"."Eventos"."</strong></th>";
            echo "</tr>";
            while($row=mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td bgcolor=\"#F8F7F1\"><strong><a href='sub_eventos.php?id=".$row['id']."'>".$row['nome']."</a></strong>
           <a href='eliminar_evento.php?id=".$row['id']."&imagem=".$row['imagem']."'>&nbsp&nbsp&nbsp&nbsp<img src=\"images/nocheck.jpg\" alt=\"\" width=\"22\" height=\"17\" /></a>
           <a href='editar_evento.php?id=".$row['id']."&imagem=".$row['imagem']."'><img src=\"images/EDITAR.\" alt=\"\" width=\"31\" height=\"23\" /></a><br></td>";
                echo "</tr>";
            }
            echo "</table><br/>";
        }
        ?>
    </div>
</div>
<br>
<div id="footer">
    <p>Copyright &copy;. All rights reserved. Design by <a >TeenPower</a>     </p>
</div>
</body>
</html>
