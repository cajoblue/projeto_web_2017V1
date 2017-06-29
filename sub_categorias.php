<?php include_once'functions.php'; ?>
<!DOCTYPE HTML >
<html>
<head>
    <title>Forum Teen Power</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
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

    <div id="container">
        <div id="center" class="column">
            <div id="content">
                <br>
                <?php
                include('conexao.php');
                $id=$_GET['id'];
                //titulo
                $sql2="SELECT categoria FROM categorias_forum WHERE id='$id'";
                $result2=mysqli_query($conn,$sql2);
                while($row=mysqli_fetch_array($result2)){
                    echo "<h1>".$row['categoria']. "</h1>";

                }
                echo" <a href='index_forum.php'><button>Voltar Atrás</button></a>";


                echo"  <form action='nova_subcategoria.php?id=".$id."' method='POST'>";
                echo"     <input type='submit' value='Nova sub-Catagoria'>";



                $sql="SELECT * FROM sub_categorias_forum where id_categoria='$id'";
                $result=mysqli_query($conn,$sql);


                while($row=mysqli_fetch_array($result)){
                  // $sql_2="SELECT * FROM sub_categorias_forum Where id='.$row['id'].'" ;
                  // $result_2=mysqli_query($conn,$sql);

                    echo "<table width=\"400\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"1\" >";
                    echo "<tr>";
                        echo "<th bgcolor=\"#F8F7F1\"><strong>"."Sub-categoria"."</strong></th>";
                    echo "</tr>";
                        echo "<tr>";
                            echo "<td bgcolor=\"#F8F7F1\"><strong><a href='menu_topico_forum.php?id_sub=".$row['id']."&id=".$row['id_categoria']."'>".$row['sub_categoria']."</a></strong>
                            <a href='eliminar_sub_categoria.php?id=".$row['id']."&id_sub=$id'><img src=\"images/nocheck.jpg\" alt=\"\" width=\"31\" height=\"23\" /></a>
                             <a href='editar_sub_categoria.php?id=".$row['id']."&id_sub=$id'><img src=\"images/EDITAR.\" alt=\"\" width=\"31\" height=\"23\" /></a><br></td>";
                        echo "</tr>";
                        echo "</table><br/>";

                    } ?>

            </div>
        </div>
        <?php require 'barra_lateral.php';?>
</div>

<br>
<div class="blocks">
</div>
<div id="footer">
    <p>Copyright &copy;. All rights reserved. Design by <a >TeenPower</a>     </p>
</div>
</body>
</html
