<?php
include('conexao.php');

$sql="SELECT peso,d_ano FROM tb_dados WHERE id_jovem='3' ORDER BY d_ano ASC";
$sth = mysqli_query($conn,$sql);

$sql="SELECT peso,d_ano FROM tb_dados WHERE id_jovem='5'ORDER  BY d_ano ASC";
$result2 = mysqli_query($conn,$sql);

while($row=mysqli_fetch_array($result2)){
    $month = date("m",strtotime($row['d_ano']));
}

echo $month;

$rows = array();
//flag is not needed
$flag = true;
$table = array();
$table['cols'] = array(

    // As Labels do gráfico representam os títulos das colunas
    // Note that one column is in "string" format and another one is in "number" format as pie chart only required "numbers" for calculating percentage and string will be used for column title
    array('label' => 'Mês', 'type' => 'string'),
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
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript">

        // Load the Visualization API and the piechart package.
        google.load('visualization', '1', {'packages':['corechart']});

        // Set a callback to run when the Google Visualization API is loaded.
        google.setOnLoadCallback(drawChart);

        function drawChart() {

            // Create our data table out of JSON data loaded from server.
            var data = new google.visualization.DataTable(<?php echo $jsonTable; ?>);

            var options = {

                vAxis: {title: 'Valores do Peso '},

                title: 'Estatística do seu Peso Mênsal ',
                width: 600, heigth: 300,
                colors: ['#335070'],
                legend: { position: 'bottom' }
            };
            // Instantiate and draw our chart, passing in some options.
            // Do not forget to check your div ID
            var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
<div id="header">
    <a href="inicio.html" class="float"><img src="images/teenpower.png" alt="" width="171" height="73" /></a>
    <div class="topblock2">
        <h4>Adolescente</h4>
        <h5>username</h5>
    </div>
    <div id="footer">
    </div>
    <div id="container">
        <div id="center" class="column">
            <div id="content">
                <h1>Histórico do Meu Peso</h1>

                <br>
            </div>
        </div>
        <div id="left" class="column">
            <div class="block">
                <h1>Menu</h1>
                <ul id="navigation">
                    <li class="color"><a href="menu_forum.php">Fórum</a></li>
                    <li><a href="#">Mensagens</a></li>
                    <li class="color"><a href="#">Ver Estudantes</a></li>
                    <li><a href="#">Ver Professores</a></li>
                    <li class="color"><a href="#">Ver Prof. Saúde</a></li>
                    <li><a href="#">Os Meus Artigos</a></li>
                </ul>
            </div>
            <div  id="chart_div" ></div>
        </div>
    </div>
    <button>Semanal<a href="meus_dados_mes.php" ></a></button>
    <button>Mênsal<a href="meus_dados_mes.php" ></a></button>
    <button>Anual<a href="meus_dados_mes.php" ></a></button>
    <br>
    <!-- esta é a div que irá armazenar o gráfico linear -->

    <br>
    <div class="blocks">
    </div>
    <div id="footer">
        <p>Copyright &copy;. All rights reserved. Design by <a >TeenPower</a>     </p>
    </div>
</body>
</html
