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
        <h1>Perfil</h1>
        <div class="stuff">
          <?php
          if(!empty($_GET['id'])){
            $my_id=$_GET['id'];
          }else{
            $my_id = $_SESSION['idUtilizador'];}

            $sql_3 = "SELECT tipo FROM login WHERE idUtilizador= $my_id";
            $retval_3 = mysqli_query( $conn, $sql_3 );
            $row_3 = mysqli_fetch_assoc($retval_3);
            $tipo=$row_3['tipo'];


            $sql_1 = "SELECT hash_sessao FROM registo_controller where user_id=$my_id";
            $result_1 = $conn->query($sql_1);

            if($tipo=='estudante'){
              if(empty($_GET['id'])){
                if ($result_1->num_rows < 1) {?>
                  <a href="registar_dados_e.php"><button>Registar Dados Pessoais</button></a>
                  <p>Selecione a opção <b>Registar Dados Pessoais</b>:</p>
                  <?php }else{?>
                    <a href="alterar_pass_e.php"><button>Alterar Palavra-Passe</button></a>
                    <a href="editar_dados_e.php"><button>Editar Dados Pessoais</button></a>
                    <?php }
                  }else{
                    echo "<a href='meus_dados.php?id=$my_id' class='btn btn-info' role='button'>Ver dados</a>";

                  }


                  $sql = "SELECT* FROM t_estudante WHERE idUtilizador='$my_id'";
                  $result = mysqli_query($conn, $sql);
                  if(! $result ){
                    die('Could not get data: ' . mysqli_error());// se nao funcionar da erro

                  }
                  while($row = mysqli_fetch_assoc($result)) {
                    $nome_completo=$row['nome_completo'];
                    $data_nasc=$row['data_nasc'];
                    $ano_escola=$row['ano_escola'];
                    $escola=$row['escola'];
                    $at_interesse=$row['at_interesse'];

                    echo "<br> Nome: ". $row["nome_completo"]."<br>";
                    echo "<br> Data de Nascimento: ".$row['data_nasc']."<br>";
                    echo "<br> Altura: ". $row["altura"]."<br>";
                    echo "<br> Ano de Escolaridade: ". $row["ano_escola"]."<br>";
                    echo "<br> Escola que frequenta: ". $row["escola"]."<br>";
                    echo "<br> Atividades de Interesse: ". $row["at_interesse"]."<br>";
                  }
                }else if($tipo=='prof_saude'){
                  if(empty($_GET['id'])){
                    if ($result_1->num_rows < 1) {?>
                      <a href="registar_dados_ps.php"><button>Registar Dados Pessoais</button></a>
                      <p>Selecione a opção <b>Registar Dados Pessoais</b>:</p>
                      <?php }else{?>
                        <a href="alterar_pass_e.php"><button>Alterar Palavra-Passe</button></a>
                        <a href="editar_dados_ps.php"><button>Editar Dados Pessoais</button></a>
                        <?php
                      }
                    }
                    $sql = "SELECT* FROM t_prof_saude WHERE idUtilizador='$my_id'";
                    $result = mysqli_query($conn, $sql);
                    if(! $result ){
                      die('Could not get data: ' . mysqli_error());// se nao funcionar da erro

                    }
                    while($row = mysqli_fetch_assoc($result)) {
                      $nome_completo=$row['nome_completo'];
                      $area_esp=$row['area_esp'];
                      $local_trab=$row['local_trab'];
                      $formacao_acad=$row['formacao_acad'];

                      echo "<br> Nome: ". $row["nome_completo"]."<br>";
                      echo "<br> Área de Especialização: ". $row["area_esp"]."<br>";
                      echo "<br> Local de Trabalho: ". $row["local_trab"]."<br>";
                      echo "<br> Formação Académica: ". $row["formacao_acad"]."<br>";
                      echo " - Local de Trabalho: ". $row["local_trab"]. " - Formação Académica ". $row["formacao_acad"]. "<br>";
                    }
                  }else{
                    if(empty($_GET['id'])){
                      if ($result_1->num_rows < 1) {?>
                        <a href="registar_dados_prof.php"><button>Registar Dados Pessoais</button></a>
                        <p>Selecione a opção <b>Registar Dados Pessoais</b>:</p>
                        <?php }else{?>
                          <a href="alterar_pass_e.php"><button>Alterar Palavra-Passe</button></a>
                          <a href="editar_dados_prof.php"><button>Editar Dados Pessoais</button></a>
                          <?php }
                        }
                        $sql = "SELECT* FROM t_prof WHERE idUtilizador='$my_id'";
                        $result = mysqli_query($conn, $sql);
                        if(! $result ){
                          die('Could not get data: ' . mysqli_error());// se nao funcionar da erro

                        }
                        while($row = mysqli_fetch_assoc($result)) {
                          $nome_completo=$row['nome_completo'];
                          $area_esp=$row['area_esp'];
                          $local_trab=$row['local_trab'];
                          $formacao_acad=$row['formacao_acad'];

                          echo "<br> Nome: ". $row["nome_completo"]."<br>";
                          echo "<br> Área de Especialização: ". $row["area_esp"]."<br>";
                          echo "<br> Local de Trabalho: ". $row["local_trab"]."<br>";
                          echo "<br> Formação Académica: ". $row["formacao_acad"]."<br>";
                          echo " - Local de Trabalho: ". $row["local_trab"]. " - Formação Académica ". $row["formacao_acad"]. "<br>";
                        }
                      }


                      mysqli_close($conn);
                      ?><h3>




                      </div>
                    </div>

                  </div>
                <?php require 'barra_lateral.php'; ?>
                  <div id="footer">
                    <p>Copyright &copy;. All rights reserved. Design by <a >TeenPower</a>     </p>
                  </div>
                </body>
                </html>
