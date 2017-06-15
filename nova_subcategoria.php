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
        <h4>Administrador</h4>
        <h5>username</h5>
    </div>
    <div id="footer">
    </div>
</div>
<div id="container">
<div id="center" >
<?php
  $id=$_GET['id'];
  echo"  <form action='adicionar_nova_subcategoria.php?id=".$id."' method='POST'>"; ?>
    <br> <a href="menu_forum.php"><button>Voltar Atrás</button></a>
    <p>Nome da sub-Categoria:</p>
    <input type="text" name="nome" value=""><br>
    <input type="submit"  value="Registar">
  <?php echo"   </form>"; ?>
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
