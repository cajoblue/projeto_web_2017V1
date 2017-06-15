<!DOCTYPE HTML >
<html>
<head>
    <title>Teen Power</title>
    <meta http-equiv="Content-Type" content="text/html; ">
    <meta charset="UTF-8">
    <meta charset="ISO-8859-1">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<div id="header">
    <a href="logP.php" class="float"><img src="images/teenpower.png" alt="" width="171" height="73" /></a>
    <div class="topblock2">
         <h3>Professor</h3>
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
            <h1>Editar Dados Pessoais</h1>
            <div class="stuff">
                <?php include 'editar_prof.php'; ?>
               </div>
            </div>
        </div>
                 <a href="meu_perfil_prof.php"><button>Voltar</button></a>
             </div>
    <div id="left" class="column">
        <div class="block">
            <h1>Menu</h1>
            <ul id="navigation">
                <li class="color"><a href="menu_forum_prof.php">Fórum</a></li>
                <li><a href="#">Mensagens</a></li>
                <li class="color"><a href="meu_perfil_prof.php">Meu Perfil</a></li>
                <li><a href="ver_estudantes_prof.php">Ver Estudantes</a></li>
                <li class="color"><a href="ver_prof_prof.php">Ver Professores</a></li>
                <li><a href="#">Os Meus Artigos</a></li>
            </ul>
        </div>
    </div>
    <div id="right" class="column">
        <a><img src="images/utilizadoresativos.gif" alt="" width="237" height="260" /></a><br />

    </div>
    <div class="blocks">

    </div>



<div id="footer">
    <p>Copyright &copy;. All rights reserved. Design by <a >TeenPower</a>     </p>
</div>
</body>
</html>
