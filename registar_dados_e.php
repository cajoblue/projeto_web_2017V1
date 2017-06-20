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
                <a href="meu_perfil_e.php"><button>Voltar</button></a>
            </div>
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


<div id="footer">
    <p>Copyright &copy;. All rights reserved. Design by <a >TeenPower</a>     </p>
</div>
</body>
</html>
