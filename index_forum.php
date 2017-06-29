<?php include_once'functions.php'; ?>
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
        <h3><?php
            $email = $_SESSION['login'];
            echo $email; ?></h3>
    </div>
    <div id="footer">
    </div>
  </div>
  <div id="container">
    <div id="center" class="column">
    <div id="center" >
       <a href='inicio.php'><button>Voltar Atrás</button></a>
      <form action="nova_categoria.php"  method="POST" >
        <input type="submit" value="Nova Catagoria">
      </form>

      <?php
      include('conexao.php');

      $sql="SELECT * FROM categorias_forum";
      $result=mysqli_query($conn,$sql);
      if (mysqli_num_rows($result) > 0) {
        echo "<table width=\"400\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"1\" >";
        echo "<tr>";
        echo "<th bgcolor=\"#F8F7F1\"><strong>"."Categorias"."</strong></th>";
        echo "</tr>";
        while($row=mysqli_fetch_array($result)){
          echo "<tr>";
          echo "<td bgcolor=\"#F8F7F1\"><strong><a href='sub_categorias.php?id=".$row['id']."'>".$row['categoria']."</a></strong>
           <a href='eliminar_categoria.php?id=".$row['id']."'>&nbsp&nbsp&nbsp&nbsp<img src=\"images/nocheck.jpg\" alt=\"\" width=\"22\" height=\"17\" /></a>
           <a href='editar_categoria.php?id=".$row['id']."'><img src=\"images/EDITAR.\" alt=\"\" width=\"31\" height=\"23\" /></a><br></td>";
          echo "</tr>";
        }
        echo "</table><br/>";
      }
      ?>
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
