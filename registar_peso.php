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
                <h1>Registar Peso</h1>
                <br>
                <form name="form1" method="post" action="adicionar_peso.php">
                    <strong>Peso:</strong>
                    <input type="number"  step="any" placeholder="exemplo(kg):63.5 " name="peso" id="peso" required title="Insira o peso" ></input>
                    <br><br>
                    <strong>Data:</strong>
                    <input type="date"  name="datepicker" id="datepicker" required></input>
                    <br><br>
                    <input type="submit" name="Submit" value="Guardar"> <input type="reset" name="Submit2" value="Apagar">
                </form>

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
