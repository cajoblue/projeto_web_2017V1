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
        <h4>Adolescente</h4>
        <h5>username</h5>
    </div>
    <div id="footer">
    </div>

    <div id="container">
        <div id="center" class="column">
            <div id="content">
                <h1>Calcular IMC</h1>
                <br>
                <form name="form1" method="post" action="adicionar_imc.php">
                    <strong>Inserir Peso:</strong>
                    <input type="text"  name="peso" id="peso" style="font-size:11px;width:40px" required></input>Kgs
                    <br><br>
                    <strong>Inserir Altura:</strong>
                    <input type="text"  name="altura"  id="altura" style="font-size:11px;width:30px" required />cm
                         Exemplo(1.70cm)
                    <br> <br>
                    &nbsp;
                    <input type="submit" name="Submit" value="Calcular"> <input type="reset" name="Submit2" value="Apagar">
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