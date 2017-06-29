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
    <a href="inicio.html" class="float"><img src="images/teenpower.png" alt="" width="171" height="73" /></a>
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
  <h3> <div id="center" >
        <?php  echo "<br> <a href='eventos.php'><button>Voltar Atrás</button></a>";?>
        <?php
        include('conexao.php');
        $id=$_GET['id'];
        //titulo
        $sql2="SELECT nome FROM eventos WHERE id='$id'";
        $result2=mysqli_query($conn,$sql2);
        while($row=mysqli_fetch_array($result2)){
            echo "<h1>".$row['nome']. "</h1><br>";

        }
        $sql="SELECT * FROM eventos where id='$id'";
        $result=mysqli_query($conn,$sql);

            if (!empty($result)) {
                $row = mysqli_fetch_array($result);
                    $nome=$row['nome'];
                          $descricao=$row['descricao'];
                          $i=$row['imagem'];
                          $data=$row['datetime'];

                echo "<td bgcolor=\"#F8F7F1\"><img src='$i' width=300px height=200px></td>";
                echo "<br> Nome do Evento: ". $row["nome"]."<br>";
                echo "<br> Descrição: ". $row["descricao"]."<br>";
                echo "<br> Data e Hora: ". $row["datetime"]."<br>";

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
                //echo "<td bgcolor=\"#F8F7F1\"><img src='$i' width=300px height=200px></td>";
                //echo "<td rowspan='2' bgcolor=\"#F8F7F1\"><strong>".$row['datetime']."</td>";
                echo "</tr>";
        }
        echo "</table><br/>";

        ?>
    </div></h3>
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
