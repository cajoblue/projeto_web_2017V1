<?php include 'functions.php'; ?>
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
    </div>
    <div id="footer">
    </div>
  </div>

  <div id="container">
    <div id="center" class="column">
      <div id="content">
        <h1>Artigos</h1>
        <div id="content">
          <?php
           $id=$_GET['id'];
         echo " <br> <a href='sub_categorias.php?id=".$id."'><button>Voltar Atrás</button></a>";

           echo"  <form action='adicionar_nova_subcategoria.php?id=".$id."' method='POST'>"; ?>
             <p>Nome da sub-Categoria:</p>
             <input type="text" name="nome" value=""><br>
             <input type="submit"  value="Registar">
           <?php echo"   </form>"; ?>

        </div>
      </div>
    </div>

    <?php include('barra_lateral.php'); ?>
    <div class="blocks">

    </div>
  </div>
</div>
</div>

<div id="footer">
  <p>Copyright &copy;. All rights reserved. Design by <a >TeenPower</a>     </p>
</div>
</body>
</html>
