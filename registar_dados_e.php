<!DOCTYPE HTML >
<html>
<head>
    <title>Teen Power</title>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<div id="header">
    <a href="inicio.php" class="float"><img src="images/teenpower.png" alt="" width="171" height="73" /></a>
    <div class="topblock2">
        <h3>Estudante</h3>
        <h3><?php include ("conexao.php");
            include 'functions.php';
        $email = $_SESSION['login'];
        $id = $_SESSION['idUtilizador'];
        echo $email; ?></h3>
        <a href="logout.php" class="float">Terminar Sessão</a>
    </div>
    <div id="footer">
    </div>
</div>

<div id="container">
    <div id="center" class="column">
        <div id="content">
            <h1>Registar Dados Pessoais</h1>
           <h3> <div class="stuff">
                <form method="POST" action="registo_dados_e.php">
                  <div class="campo">
            <div class="nome">
                <label>Nome Completo</label>
                <input type="text" id="nome" name="nome_completo" style="width: 21em" value="" />
            <br>
                <br>
            </div>
        </div>
        <div class="campo">
            <div class="data_nasc">
                <label for="data_nasc">Data de Nascimento</label>
                <input type="date" id="datepicker" name="datepicker" style="width: 10.1em"  value="" />
                <br>
                <br>
            </div>
        </div>
        <div class="campo">
            <div class="ano_escola">
                <label for="ano_escola">Ano de Escolaridade</label>
                <input type="text" id="ano_escola" name="ano_escola" style="width: 5.1em" value="" />
            <br>
                <br>
            </div>
        </div>
            <div >
                <label for="altura">Altura</label>
                <input type="number" step="any" placeholder="Em metros(1.70)" name="altura" style="width: 10.1em" value="" />
            <br>
                <br>
        </div>
        <div class="campo">
            <div class="escola">
                <label for="escola">Escola que Frequenta</label>
                <input type="text" id="escola" name="escola" style="width: 19em"  value="" />
            <br>
                <br>
            </div>
            <div class="at_interesse">
                <label for="at_interesse">Atividades de Interesse</label>
                <input type="text" id="at_interesse" name="at_interesse" style="height:100px; width:200px;"  value="" />
            <br>
                <br>
            </div>
        <div class="registo">
            <button type="submit" class="registo"  name="submit" >Registar Dados</button>
        </div>
              </div>
      </form>
            </div>
        </div>
        </div>
<?php if(verHash()==$id){ require 'barra_lateral.php';}; ?>
<div id="footer">
    <p>Copyright &copy;. All rights reserved. Design by <a >TeenPower</a>     </p>
</div>
</body>
</html>
