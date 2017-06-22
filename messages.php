<?php include'connect.php'; ?>
<?php include_once'functions.php'; ?>
<!DOCTYPE HTML >
<html>
<head>
    <title>Message</title>
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

            <h1>Mensagens</h1>
            <div id="content">
<form class="" action="forum_cosntrol.php" method="post">

    <?php //include'title_bar.php'; ?>
    <div>
        <?php include 'message_title_bar.php' ;?>
    </div>
</form>
            </div>
        </div>
    </div>
<?php require 'barra_lateral.php';?>  
        <div class="blocks">

        </div>
    </div>

<div id="footer">
    <p>Copyright &copy;. All rights reserved. Design by <a >TeenPower</a>     </p>
</div>
</body>
</html>
