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
        <h4>Adolescente</h4>
        <h5>username</h5>
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
        <div id="left" class="column">
            <div class="block">
                <h1>Menu</h1>
                <ul id="navigation">
                  <li class="color"><a href="meu_perfil_e.php">Meu Perfil</a></li>
                  <li><a href="index_forum.php">Fórum</a></li>
                  <li class="color"><a href="messages.php">Mensagens</a></li>
                  <li><a href="ver_estudantes_e.php">Ver Estudantes</a></li>
                  <li  class="color"><a href="#">Ver Professores</a></li>
                  <li><a href="#">Ver Prof. Saúde</a></li>
                  <li class="color"><a href="#">Os Meus Artigos</a></li>
                </ul>
            </div>

        </div>
        <div id="right" class="column">
          <ul id="navigation">
            <li class="color"><a href="registar_peso.php">Registar Peso</a></li>
            <li><a href="registar_hora_exerc.php">Registar nº horas de exercício</a></li>
            <li class="color"><a href="calcular_imc.php">Calcular IMC</a></li>
            <li><a href="meus_dados.php?">Os Meus Dados</a></li>
          </ul>
          <a><img src="images/utilizadoresativos.gif" alt="" width="237" height="260" /></a><br />

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
