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


<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
    <tr>
        <form id="form1" name="form1"action="adicionar_topico.php"  method="POST" enctype="multipart/form-data" >
            <td>
                <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                    <tr>
                        <td colspan="3" bgcolor="#E6E6E6"><strong>Criar Novo Tópico</strong> </td>
                    </tr>
                    <tr>
                        <td width="14%"><strong>Tópico</strong></td>
                        <td width="2%">:
                        <td width="84%"><input type="text" name="topic" id="topic" required></td>
                    </tr>
                    <tr>
                        <td><strong>Nome</strong></td>
                        <td>:</td>
                        <td><input type="text" name="name" id="name" required></td>
                    </tr>
                    <tr>
                        <td><strong>Email</strong></td>
                        <td>:</td>
                        <td><input type="text" name="email" id="email" required></td>
                    </tr>
                    <tr>
                        <td valign="top"><strong>Informação</strong></td>
                        <td valign="top">:</td>
                        <td><textarea cols="30" rows="5" name="detail" id="detail" required></textarea></td>
                        <br/>
                    </tr>
                    <tr>
                        <td></td>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="Submit" value="Submeter" /> <input type="reset" name="Submit2" value="Apagar" /></td>
                    </tr>
                </table>
            </td>

        </form>
    </tr>
</table>
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