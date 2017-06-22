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
    <a href="inicio.php" class="float"><img src="images/teenpower.png" alt="" width="171" height="73" /></a>
    <div class="topblock2">
        <h3>Administrador</h3>
        <h3><?php session_start();
        $email = $_SESSION['login'];
        echo $email; ?></h3>
         <a href="logout.php" class="float">Terminar Sessão</a>
    </div>
    <div id="footer">
    </div>
</div>
<div id="container">
<div id="center" >

<h2>Criar Novo Tópico</h2>
<?php
  $id=$_GET['id'];
  echo"  <form id='form1' name='form1' enctype='multipart/form-data'  action='adicionar_topico_forum.php?id=".$id."' method='POST'>"; ?>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                    <tr>
                        <td colspan="3" bgcolor="#E6E6E6"><strong>Tópico</strong> </td>
                    </tr>
                    <tr>
                        <td width="14%"><strong>Titulo</strong></td>
                        <td width="84%"><input type="text" name="topic" id="topic" required></td>
                    </tr>
                    <tr>
                        <td valign="top"><strong>Descrição</strong></td>
                        <td><textarea cols="30" rows="5" name="detail" id="detail" required></textarea></td>
                        <br/>
                    </tr>
                    <tr>
                        <td valign="top"><strong>Selecione uma imagem:</strong></td>
                        <td><input name="arquivo" type="file"></textarea></td>
                    </tr>

                    <tr>
                        <td><input type="submit" name="Submit" value="Registar" /> <input type="reset" name="Submit2" value="Apagar" /></td>
                    </tr>
                </table>
<?php echo"   </form>"; ?>
    <br> <a href="menu_forum.php"><button>Voltar Atrás</button></a>

</div></div>
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
