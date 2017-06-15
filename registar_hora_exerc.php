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
    <a href="inicio.html" class="float"><img src="images/teenpower.png" alt="" width="171" height="73" /></a>
    <div class="topblock2">
        <h4>Adolescente</h4>
        <h5>username</h5>
    </div>
    <div id="footer">
    </div>

    <div id="container">
        <div id="center" class="column">
            <div id="content">
                <h1>Registar tempo de exercício</h1>
                <br>
                <form name="form1" method="post" action="save_hora_exerc.php">
                    <strong>Tempo de exercíio:</strong>
                    <input type="number" placeholder="Em minutos(60)min. " name="nr_horas" id="peso" required title="Insira o número de horas de exercicios que fez" ></input>
                    <br><br>
                    <strong>Data:</strong>
                    <input type="date"  name="data" id="datepicker" required></input>
                    <br><br>
                    <input type="submit" name="Submit" value="Guardar"> <input type="reset" name="Submit2" value="Apagar">
                </form>

            </div>
        </div>
        <div id="left" class="column">
            <div class="block">
                <h1>Menu</h1>
                <ul id="navigation">
                    <li class="color"><a href="menu_forum.php">Fórum</a></li>
                    <li><a href="#">Mensagens</a></li>
                    <li class="color"><a href="#">Ver Estudantes</a></li>
                    <li><a href="#">Ver Professores</a></li>
                    <li class="color"><a href="#">Ver Prof. Saúde</a></li>
                    <li><a href="#">Os Meus Artigos</a></li>
                </ul>
            </div>

        </div>
</div>

<br>
<div class="blocks">
</div>
<div id="footer">
    <p>Copyright &copy;. All rights reserved. Design by <a >TeenPower</a>     </p>
</div>
</body>
</html
