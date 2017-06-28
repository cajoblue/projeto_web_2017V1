<?php include_once'functions.php'; ?>
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
      <h3><?php
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
        <div id="content">
          <h1>Editar dados Pessoais</h1>

          <?php
          $my_id = $_SESSION['idUtilizador'];
          include('conexao.php');
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
          </div><br>
        </div>
      </div>
      <?php require 'barra_lateral.php';?>
    </div>
  </div>
</div>
</div>

<div id="footer">
  <p>Copyright &copy;. All rights reserved. Design by <a >TeenPower</a>     </p>
</div>
</body>
</html>
