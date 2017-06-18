<!DOCTYPE HTML >
<html>
<head>
    <title>Teen Power</title>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script>
        $(function() {
            $( "#datepicker" ).datepicker();
        });
    </script>
</head>

<body>
<div id="header">
    <a href="inicio.html" class="float"><img src="images/teenpower.png" alt="" width="171" height="73" /></a>
    <div class="topblock2">
        <h3>Estudante</h3>
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
    <div id="left" class="column">
        <div class="block">
            <h1>Menu</h1>
            <ul id="navigation">
                <li class="color"><a href="menu_forum.php">Fórum</a></li>
                <li><a href="meu_perfil_e.php">Meu Perfil</a></li>
                <li class="color"><a href="messages.php">Mensagens</a></li>
                <li><a href="ver_estudantes_e.php">Ver Estudantes</a></li>
                <li class="color"><a href="#">Ver Professores</a></li>
                <li><a href="#">Ver Prof. Saúde</a></li>
                <li class="color"><a href="#">Os Meus Artigos</a></li>
            </ul>
        </div>

    </div>
    <div id="right" class="column">
        <ul id="navigation">
            <li class="color"><a href="registar_peso.php">Registar Peso</a></li>
            <li><a href="#">Registar nº horas de exercício</a></li>
            <li class="color"><a href="calcular_imc.php">Calcular IMC</a></li>
            <li><a href="#">Os Meus Dados</a></li>
        </ul>
        <a><img src="images/utilizadoresativos.gif" alt="" width="237" height="260" /></a><br />

    </div>


<div id="footer">
    <p>Copyright &copy;. All rights reserved. Design by <a >TeenPower</a>     </p>
</div>
</body>
</html>