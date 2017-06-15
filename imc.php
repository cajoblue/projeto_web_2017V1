<?php
include('conexao.php');

$sql="SELECT imc,d_ano FROM tb_dados WHERE id_jovem='3' ORDER BY d_ano ASC";
$sth = mysqli_query($conn,$sql);

$rows = array();
//flag is not needed
$flag = true;
$table = array();
$table['cols'] = array(

    // As Labels do gráfico representam os títulos das colunas
    // Note that one column is in "string" format and another one is in "number" format as pie chart only required "numbers" for calculating percentage and string will be used for column title
    array('label' => 'Data', 'type' => 'string'),
    array('label' => 'IMC', 'type' => 'number')

);

$rows = array();
while($r = mysqli_fetch_assoc($sth)) {
    $temp = array();
    // the following line will be used to slice the Pie chart
    $temp[] = array('v' => (int) $r['d_ano']);

    // Values of each slice
    $temp[] = array('v' => (int) $r['imc']);
    $rows[] = array('c' => $temp);
}

$table['rows'] = $rows;
$jsonTable = json_encode($table);
//echo $jsonTable;

?>
<!DOCTYPE HTML >
<head>
    <title>Forum Teen Power</title>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even){background-color: #f2f2f2}
    </style>
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
                vAxis: {title: 'Valores do IMC '},
                title: 'Estatística do seu Peso Anual ',
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
                <h1> O seu IMC é</h1>
                <br>
<?php
include('conexao.php');

$sql2="SELECT * FROM tb_dados WHERE id='4'";
$result2=mysqli_query($conn,$sql2);

while($row=mysqli_fetch_array($result2)){
    echo" <table border=\"3px\"cellspacing=\"5\" cellpadding=\"5\" >";
    echo"<tr>";
    echo "<td><strong>IMC Atual </strong></td>";
    echo "<td>".$row['imc']."</td>";
    echo"</tr>";
    echo"<tr>";

    echo "<td><strong>A sua classificação é </strong></td>";
    echo "<td>".$row['mensagem']."</td>";
    echo"<tr>";
    echo " </table>";
}

?>
                <table cellspacing="5" cellpadding="5" >
                    <tr>
                        <td align="center">
                            <h1>Tabela para Classificação - Adultos IMC</h1>
                            <br>
                            <table >
                                <tr>
                                    <td>IMC</td>
                                    <td>Classificação</td>
                                </tr>
                                <tr>
                                    <td>abaixo de 20</td>
                                    <td>Abaixo do Peso</td>
                                </tr>
                                <tr>
                                    <td>20 a 25</td>
                                    <td>Peso Ideal</td>
                                </tr>
                                <tr>
                                    <td>25 a 30</td>
                                    <td>Acima do Peso</td>
                                </tr>
                                <tr>
                                    <td>30 a 35</td>
                                    <td>Obesidade I</td>
                                </tr>
                                <tr>
                                    <td>35 a 40</td>
                                    <td>Obesidade II (severa)</td>
                                </tr>
                                <tr>
                                    <td>40 a 50</td>
                                    <td>Obesidade III (mórbida)</td>
                                </tr>
                                <tr>
                                    <td>acima de 50</td>
                                    <td>Super Obesidade</td>
                                </tr>
                                <tr>
                                    <td> ASBS = American Society for Bariatric Surgery</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>

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

        </div>
    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br>

    <!-- esta é a div que irá armazenar o gráfico linear -->
    <div class="chart_div_mes" id="chart_div" ></div>
    <br><br>

    <div id="footer">
        <p>Copyright &copy;. All rights reserved. Design by <a >TeenPower</a>     </p>
    </div>
</body>
</htm