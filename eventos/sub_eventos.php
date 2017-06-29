<!DOCTYPE HTML >
<html>
<head>
    <title>Forum Teen Power</title>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5">
    <meta charset="ISO-8859-1">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<div id="header">
    <a href="inicio.php" class="float"><img src="images/teenpower.png" alt="" width="171" height="73" /></a>
    <div class="topblock2">
        <h4></h4>
        <h3><?php session_start();
            $email = $_SESSION['login'];
            echo $email; ?></h3>
    </div>
    <div id="footer">
    </div>
</div>
<div id="container">
    <div id="center" >

        <?php
        include('conexao.php');
        $id=$_GET['id'];
        //titulo
        $sql2="SELECT nome FROM eventos WHERE id='$id'";
        $result2=mysqli_query($conn,$sql2);
        while($row=mysqli_fetch_array($result2)){
            echo "<h1>".$row['nome']. "</h1>";

        }
        echo" <a href='eventos.php'><button>Voltar Atrás</button></a>";


        $sql="SELECT * FROM eventos where id='$id'";
        $result=mysqli_query($conn,$sql);

        echo "<table width=\"400\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"1\" >";
        echo "<tr>";
        echo "<td bgcolor=\"#F8F7F1\"><strong>Nome do Evento:</strong></td>";
        echo "<td bgcolor=\"#F8F7F1\"><strong>Descrição</strong></td>";
        echo "<td bgcolor=\"#F8F7F1\"><strong>Imagem</strong></td>";
        echo "<td bgcolor=\"#F8F7F1\"><strong>Date e Hora</strong></td>";
        echo "</tr>";

            if (!empty($result)) {
                $row = mysqli_fetch_array($result);
                echo "<tr>";
                echo "<td rowspan='2' bgcolor=\"#F8F7F1\"><strong>".$row['nome']."</strong></td>";
                echo "<td rowspan='2' bgcolor=\"#F8F7F1\"><strong>".$row['descricao']."</td>";

                echo "</tr>";
            }else{
                echo "Erro";
            }
            $i=$row['imagem'];
            $vazia="images/";

            if ($i==$vazia) {
                echo "";
            }else {
                echo "<tr>";
                echo "<td bgcolor=\"#F8F7F1\"><img src='$i' width=300px height=200px></td>";
                echo "<td rowspan='2' bgcolor=\"#F8F7F1\"><strong>".$row['datetime']."</td>";
                echo "</tr>";

        }
        echo "</table><br/>";

 ?>
    </div>
</div>
<br>

<div id="container">
    <div class="blocks">
    </div>
    <div id="footer">
        <p>Copyright &copy;. All rights reserved. Design by <a >TeenPower</a>     </p>
    </div>
</div>
</body>
</html>
<?php