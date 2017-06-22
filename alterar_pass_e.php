<!DOCTYPE HTML >
<html>
<head>
    <title>Teen Power-Alterar palavra passe</title>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<div id="header">
    <a href="inicio.php" class="float"><img src="images/teenpower.png" alt="" width="171" height="73" /></a>
    <div class="topblock2">
        <h3><?php include ("conexao.php");
            include 'functions.php';
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
            <h1>Alterar Palavra-Passe</h1>
            <div class="stuff">
                <form method="POST" action="mudar_pass_e.php">
                    <table>
                    <tr>
                    <td>Insira a Palavra-Passe atual:</td>
                    <td><input type="password" size="20" name="old_pass" placeholder="Palavra Passe atual" value="" required></td>
                    </tr>
                    <tr>
                    <td>Insira a nova Palavra-Passe:</td>
                    <td><input type="password" size="20" name="new_pass" placeholder="Nova Palavra-Passe" value="" required></td>
                    </tr>
                    <tr>
                    <td>Confirma a nova Palavra-Passe:</td>
                    <td><input type="password" size="20" name="re_pass" placeholder="Confirme Palvra-Passe" value="" required></td>
                    </tr>
                    </table>

                    <p><input type="submit" value="Confirmar" name="re_password">
                   </form>
                 <a href="meu_perfil_e.php"><button>Voltar</button></a>
            </div>
        </div>
    </div>
<?php require 'barra_lateral.php';?>
<div id="footer">
    <p>Copyright &copy;. All rights reserved. Design by <a >TeenPower</a>     </p>
</div>
</body>
</html>
