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
    <a href="inicio.html" class="float"><img src="images/teenpower.png" alt="" width="171" height="73" /></a>
    <div class="topblock2">
        <h4>Administrador</h4>
        <h5>username</h5>
    </div>
    <div id="footer">
    </div>
</div>
<div id="container">
<div id="center" >
  <form action="nova_categoria.php"  method="POST" >
    <input type="submit" value="Nova Catagoria">
  </form>

  <?php
  include('conexao.php');
  $sql="SELECT * FROM categorias_forum";
 $result=mysqli_query($conn,$sql);


  while($row=mysqli_fetch_array($result)){
    // $sql_2="SELECT * FROM sub_categorias_forum Where id='.$row['id'].'" ;
    // $result_2=mysqli_query($conn,$sql);

      echo "<table width=\"400\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"1\" >";
      echo "<tr>";
          echo "<th bgcolor=\"#F8F7F1\"><strong>"."Categorias"."</strong></th>";
      echo "</tr>";
          echo "<tr>";
              echo "<td bgcolor=\"#F8F7F1\"><strong><a href='sub_categorias.php?id=".$row['id']."'>".$row['categoria']."</a></strong></td>";
          echo "</tr>";
          echo "</table><br/>";

      } ?>
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
