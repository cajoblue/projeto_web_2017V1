<!DOCTYPE HTML >
<html>
<head>
    <title>Teen Power</title>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html";>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<div id="header">
    <a href="logPS.php" class="float"><img src="images/teenpower.png" alt="" width="171" height="73" /></a>
    <div class="topblock2">
         <h3>Profissional de Saúde</h3>
        <h3><?php session_start();
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
            <h3><div class="stuff">
                <form method="POST" action="registo_dados.php">
                  <div class="campo">
            <div class="nome">
                <label>Nome Completo</label>
                <input type="text" id="nome" name="nome_completo" style="width: 21em" value="" />
                <br> 
                <br>
            </div>
        </div>
        <div class="campo">
            <div class="area_esp">
                <label for="Area de Especialização">Área de Especialização</label>
                <input type="text" id="area_esp" name="area_esp" style="width: 10em"  value="" />
            <br> 
                <br>
            </div>
        </div>
        <div class="campo">
            <div class="local_trab">
                <label for="local_trab">Local de Trabalho</label>
                <input type="text" id="local_trab" name="local_trab" style="width: 10em" value="" />
                <br> 
                <br>
            </div>
        </div>
        <div class="campo">
            <div class="formacao_acad">
                <label for="formacao_acad">Formação Académica</label>
                <input type="text" id="formacao_acad" name="formacao_acad" style="width: 10em" value="" />
                <br> 
                <br>
            </div>
        <div class="registo">
            <button type="submit" class="registo"  name="submit" >Registar Dados</button>
        </div>
              </div>
      </form>
                <a href="meu_perfil_ps.php"><button>Voltar</button></a>
            </div>
        </div>
    </div>
    
              
    <div id="left" class="column">
        <div class="block">
            <h1>Menu</h1>
            <ul id="navigation">
                <li class="color"><a href="menu_forum_ps.php">Fórum</a></li>
                <li><a href="#">Mensagens</a></li>
                <li class="color"><a href="meu_perfil_ps.php">Meu Perfil</a></li>
                <li><a href="ver_estudantes_ps.php">Ver Estudantes</a></li>
                <li class="color"><a href="ver_prof_ps.php">Ver Professores</a></li>
                <li><a href="#">Os Meus Artigos</a></li>
                <li class="color"><a href="registo_view_ps.php">Adicionar utilizador</a></li>
            </ul>
        </div>
    </div>
    <div id="right" class="column">
        <a><img src="images/utilizadoresativos.gif" alt="" width="237" height="260" /></a><br />

    </div>
    <div class="blocks">
</div>
    </div>
</div>


<div id="footer">
    <p>Copyright &copy;. All rights reserved. Design by <a >TeenPower</a>     </p>
</div>
</body>
</html>