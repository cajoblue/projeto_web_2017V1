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
        <h1>Editar Dados Pessoais</h1>
        <div class="stuff">
          <?php
          $my_id = $_SESSION['idUtilizador'];
          $sql2="SELECT * FROM t_estudante WHERE idUtilizador=$my_id";
          $result2=mysqli_query($conn,$sql2);
          while($row=mysqli_fetch_array($result2)){ ?>
                <form action="salvar_dados_e.php" method="POST">
                  <ul>
                    <li>
                      <p>
                        <label for="first_name">Nome Completo</label>
                        <input type="text" name="nome_completo" placeholder="John" value="<?php echo $row['nome_completo'];  ?>" />
                      </p>
                      <p >
                        <label for="last_name">Data de Nascimento</label>
                        <input type="date" name="datepicker" placeholder="Smith" value="<?php echo $row['data_nasc'];  ?>" />
                      </p>
                    </li>
                    <div >
                        <label for="altura">Altura</label>
                        <input type="number" step="any" placeholder="Em metros(1.70)" name="altura" value="<?php echo $row['altura'];  ?>" />
                    <br>
                        <br>
                    </div>
                    <li>
                      <p>
                        <label>Ano de Escolaridade <span class="req">*</span></label>
                        <input type="text" name="ano_escola"  value="<?php echo $row['ano_escola'];  ?>" />
                      </p>
                    </li>
                    <li>
                      <p>
                        <label >Escola que Frequenta<span>*</span></label>
                        <input type="text" name="escola"  value="<?php echo $row['escola'];  ?>" />
                      </p>
                    </li>
                    <li>
                      <label >Atividades de Interesse</label><br>
                      <textarea cols="46" rows="3" name="at_interesse"><?php echo $row['at_interesse'];  ?></textarea>
                    </li>

                    <li>
                      <input class="btn btn-submit" type="submit" value="Guardar" />
                    </li>

                  </ul>
                </form>

            <?php
          }
          mysqli_close($conn); ?>



        </div>
      </div>
    </div>
    <a href="meu_perfil_e.php"><button>Voltar</button></a>
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
