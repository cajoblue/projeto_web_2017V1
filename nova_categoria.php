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
      <h4>Administrador</h4>
      <h3><?php session_start();
        $email = $_SESSION['login'];
        echo $email; ?></h3>
    </div>
    <div id="footer">
    </div>
  </div>

  <div id="container">
    <div id="center" class="column">
      <div id="content">
        <h1>Nova Categoria</h1>
        <div id="content">
        <div class="">
          <br> <a href="index_forum.php"><button>Voltar Atrás</button></a>
        </div>
        <form action="adicionar_nova_categoria.php"  method="POST" >
          <p>Nome da Categoria:</p>
          <input type="text" name="nome" value=""><br>
          <input type="submit"  value="Registar">
        </form>

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
