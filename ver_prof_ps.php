<?php require 'functions.php'; ?>
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
        <h1>Lista de Utilizadores</h1>
        <div class="stuff">
          <form action='ver_prof_ps.php' method='POST'>
            <input type='text' placeholder='Procurar..' name="nome" />
          <input type='submit' value='Procurar'/>
          </form>
          <?php
          include ("conexao.php");
          // Cria a tabela
if(empty($_POST['nome'])){
          // Liga a tabela na base de dados
          $sql = "SELECT* FROM t_prof_saude ";
          //Seleciona a base de dados
          $retval = mysqli_query( $conn, $sql );
          if(! $retval ){
            die('Could not get data: ' . mysqli_error());// se nao funcionar da erro

          }
          if ($retval->num_rows < 1){
            echo "Desculpe, mais ainda não temos profissionais de saúde registados.";
          }else{
            echo "<br> <table border='1' style='text-align:center;'>
            <tr>
            <th>Nome</th>
            <th>Area de especialização</th>
            <th>Mensagem</th>
            </tr>";
            while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)){// vai buscar ha base de dados os dados nela guardada e poem os na tabela
              //echo "<tr><td>".$row['img_capa']."</td>";
              $user_id=$row['idUtilizador'];
              echo "<tr>";
              echo "<td><a href='meu_perfil_e.php?id=$user_id'>".$row['nome_completo']."</a></td>";
              echo "<td>".$row['area_esp']."</td>";
              echo "<td><a href='send.php?user=$user_id'><img src='enviar.jpg' alt='enviar mensagem' height='42' width='32'></a></td>";
              echo "</tr>";
            }
            echo "</table><br/>  <a href='inicio.php'>Voltar</a>";// fecha a tabela e uma hiperligacao para voltar ao inicio do site
          }
        }else{
$nome_procurado=$_POST['nome'];
if(!preg_match("/^[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzÀÁÂÃÇÈÉÊÌÍÒÓÔÕÙÚÛàáâãçèéêìíîòóôõùúû ]+$/", $nome_procurado)){
 echo "<script>alert('Nome inválido!!');top.location.href='send.php';</script>";
die;
}
          $sql = "SELECT* FROM t_prof_saude where nome_completo like'%$nome_procurado%'  ";
          //Seleciona a base de dados
          $retval = mysqli_query( $conn, $sql );
          if(! $retval ){
            die('Could not get data: ' . mysqli_error());// se nao funcionar da erro

          }
          if ($retval->num_rows < 1){
echo "Sem resultado";
          }else{
            echo "<br> <table border='1' style='text-align:center;'>
            <tr>
            <th>Nome</th>
            <th>Area de especialização</th>
            <th>Mensagem</th>
            </tr>";
            while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)){// vai buscar ha base de dados os dados nela guardada e poem os na tabela
              //echo "<tr><td>".$row['img_capa']."</td>";
              $user_id=$row['idUtilizador'];
              echo "<tr>";
              echo "<td><a href='meu_perfil_e.php?id=$user_id'>".$row['nome_completo']."</a></td>";
              echo "<td>".$row['area_esp']."</td>";
              echo "<td><a href='send.php?user=$user_id'><img src='enviar.jpg' alt='enviar mensagem' height='42' width='32'></a></td>";
              echo "</tr>";
            }
            echo "</table><br/>  <a href='inicio.php'>Voltar</a>";// fecha a tabela e uma hiperligacao para voltar ao inicio do site
          }


        }
          mysqli_close($conn);
          ?>
          >
        </div>
      </div>

    </div>
    <?php require 'barra_lateral.php'; ?>
    <div class="blocks">

    </div>
  </div>


  <div id="footer">
    <p>Copyright &copy;. All rights reserved. Design by <a >TeenPower</a>     </p>
  </div>
</body>
</html>
