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
    <a href="index.html" class="float"><img src="images/teenpower.png" alt="" width="171" height="73" /></a>
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
            <h1>Artigos</h1>
            <div id="content">
                #############
                <a><img src="images/posts.png" alt="" width="500" height="800" /></a><br />
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
</div>

<div id="footer">
    <p>Copyright &copy;. All rights reserved. Design by <a >TeenPower</a>     </p>
</div>
</body>
</html>
