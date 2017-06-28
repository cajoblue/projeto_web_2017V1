<?php
include('conexao.php');
include 'functions.php';

$sql="SELECT peso,d_ano FROM tb_dados WHERE id_jovem='3' ORDER BY d_ano ASC";
$sth = mysqli_query($conn,$sql);

$rows = array();
//flag is not needed
$flag = true;
$table = array();
$table['cols'] = array(

  // As Labels do gráfico representam os títulos das colunas
  // Note that one column is in "string" format and another one is in "number" format as pie chart only required "numbers" for calculating percentage and string will be used for column title
  array('label' => 'Data', 'type' => 'string'),
  array('label' => 'Peso', 'type' => 'number')
);

$rows = array();
while($r = mysqli_fetch_assoc($sth)) {
  $temp = array();
  // the following line will be used to slice the Pie chart
  $temp[] = array('v' => (int) $r['d_ano']);

  // Values of each slice
  $temp[] = array('v' => (int) $r['peso']);
  $rows[] = array('c' => $temp);
}

$table['rows'] = $rows;
$jsonTable = json_encode($table);
//echo $jsonTable;

?>


<!DOCTYPE HTML >
<html>
<head>
  <title>Forum Teen Power</title>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5">
  <link rel="stylesheet" type="text/css" href="style.css" />
  <!--Load the Ajax API-->


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
    <div id="container">
      <div id="center" class="column">
        <div id="content">
          <h1>Dados de Saúde</h1>
          <br>
          <?php
          if(!empty($_GET['id'])){
            $user_id=$_GET['id'];
          }else{
            $user_id = $_SESSION['idUtilizador'];}
            $id="";
            $mydata=[];

            $tipo="";
            $sql = "SELECT * FROM tb_dados Where id_jovem='$user_id' ";
            $result = mysqli_query($conn, $sql); ?>
            <h3>Peso e IMC</h3>
            <?php

            if (mysqli_num_rows($result) > 0) {
              echo "<table class='responstable' width=\"400\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"1\" >";
              echo   "<tr>";
              echo      "<th>Peso</th>";
              echo       "<th>IMC</th>";
              echo      "<th>Data</th>";
              echo    " <th>Estado</th>";
              echo  " </tr>";
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td bgcolor=\"#F8F7F1\"><strong>".$row['peso']."</strong></td>";
                echo "<td bgcolor=\"#F8F7F1\"><strong>".$row['imc']."</td>";
                echo "<td bgcolor=\"#F8F7F1\"><strong>De:</strong>".$row['d_ano']."</td>";
                if($row['imc']<=18){
                  echo "<td bgcolor=\"#F8F7F1\"><img src='smile_sad.jpg' alt='triste smile' width='48' height='48'></td>";
                }else if($row['imc'] > 18 and $row['imc'] <=25 ){
                  echo "<td bgcolor=\"#F8F7F1\"><img src='smile_happy.jpg' alt='triste smile' width='48' height='48'></td>";
                }else if($row['imc'] > 25 and $row['imc'] <30){
                  echo "<td bgcolor=\"#F8F7F1\"><img src='smile_un.jpg' alt='triste smile' width='48' height='48'></td>";
                }else{
                  echo "<td bgcolor=\"#F8F7F1\"><img src='smile_sad.jpg' alt='triste smile' width='48' height='48'></td>";
                }
                echo "</tr>";
              }
              echo "</table><br/>";

            }

            $sql = "SELECT * FROM tb_horas_exercicio Where user_id='$user_id' order by dataResg ASC ";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {

              ?>
              <h3>Tempo de exercício</h3>
              <?php
              // output data of each row
              echo "<table class='responstable'>";
              echo   "<tr>";
              echo       "<th>Dias</th>";
              echo      "<th>Tempo de exercício</th>";
              // echo      "<th>Tempo total</th>";
              // echo    " <th>Estado</th>";
              echo  " </tr>";
              while($row = mysqli_fetch_assoc($result)) {
                echo   "<tr>";
                echo "<td bgcolor=\"#F8F7F1\"><strong>".$row['dataResg']."</td>";
                echo "<td bgcolor=\"#F8F7F1\"><strong>".$row['nr_horas']."</strong></td>";
                echo   "</tr>";
              }
              echo "</table><br/>";

            }
            ?>

          </div>
        </div>
        <?php require 'barra_lateral.php'; ?>

      </div>

      <!-- <a href="#"><button>Semanal</button></a>
      <a href="meus_dados_mes.php"><button>Mensal</button></a>
      <a href="#"><button>Anual</button></a> -->

      <br>
      <!-- esta é a div que irá armazenar o gráfico linear -->
      <div class="chart_div_dados" id="chart_div" ></div>
      <br>
      <div class="blocks">
      </div>
      <div id="footer">
        <p>Copyright &copy;. All rights reserved. Design by <a >TeenPower</a>     </p>
      </div>
      <form class="" action="" method="post">
        <table>
          <tr>
            <script type="text/javascript" src="https://www.google.com/jsapi"></script>
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

            <!-- <script>

            // Load the Visualization API and the piechart package.
            google.load('visualization', '1', {'packages':['corechart']});

            // Set a callback to run when the Google Visualization API is loaded.
            google.setOnLoadCallback(drawChart);

            function drawChart() {

            // Create our data table out of JSON data loaded from server.
            var data = new google.visualization.DataTable(<?php echo $jsonTable; ?>);

            var options = {
            vAxis: {title: 'Valores do Peso '},
            title: 'Estatística do seu Peso Anual ',
            width: 600, heigth: 300,
            colors: ['#335070'],
            float:rigth,
            legend: { position: 'bottom' }
          };
          // Instantiate and draw our chart, passing in some options.
          // Do not forget to check your div ID
          var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
          chart.draw(data, options);
        }
      </script> -->

    </tr>
  </table>
</form>
</body>
</html>
