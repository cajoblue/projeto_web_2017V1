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
        <h3>Administrador</h3>
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
    <div id="center" >

        <h2>Criar Novo Evento</h2>
        <?php
        // get data that sent from form



        echo"  <form enctype='multipart/form-data'  action='adicionar_evento.php' method='POST'  >"; ?>
        <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
            <tr>
                <td colspan="3" bgcolor="#E6E6E6"><strong>Novo Evento</strong> </td>
            </tr>
            <tr>
                <td width="14%"><strong>Nome do Evento</strong></td>
                <td><textarea cols="30" rows="1" name="nome" id="nome" required></textarea></td>
            </tr>
            <tr>
                <td valign="top"><strong>Descrição</strong></td>
                <td><textarea cols="30" rows="5" name="detail" id="detail" required></textarea></td>
                <br/>
            </tr>
            <tr>
                <td valign="top"><strong>Selecione uma imagem:</strong></td>
                <td><input type="file"  name="arquivo"></textarea></td>
            </tr>

            <tr>
                <td><input type="submit" name="Submit" value="Registar" />
                    <input type="reset" name="Submit2" value="Apagar" /></td>
            </tr>
        </table>
        <?php echo"   </form>";
        echo "<br> <a href='eventos.php'><button>Voltar Atrás</button></a>";?>

    </div>
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
