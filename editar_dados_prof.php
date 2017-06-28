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
          include('conexao.php');
          $tbl_name="t_prof"; // Table name

          // get value of id that sent from address bar
          $my_id = $_SESSION['idUtilizador'];

          $sql2="SELECT * FROM $tbl_name WHERE idUtilizador=$my_id";
          $result2=mysqli_query($conn,$sql2);

          while($row=mysqli_fetch_array($result2)){
            $nome=$row['nome_completo'];
            $area=$row['area_esp'];
            $local=$row['local_trab'];
            $forma=$row['formacao_acad'];
?>
            <form  id="form1" class="" action="salvar_dados_prof.php" method="post">
              <strong>Nome Completo</strong> <input type="text" name="nome_completo" value="<?php echo $nome;  ?>"><br>
              <strong>Área de Especialização</strong>  <input type="text" name="area_esp" value="<?php echo $area; ?>"><br>
              <strong>Local de Trabalho</strong> <input type="text" name="local_trab" value="<?php echo $local;  ?>"><br>
              <strong>Formação Académica</strong> <input type="text" name="formacao_acad" value="<?php echo $forma;  ?>"><br>
              <input type="submit" name="Atualizar" value="Atualizar Dados Pessoais"> <input type="reset" name="apagar" value="Apagar">
            </form>
            <?php };

            mysqli_close($conn);
            ?>
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
