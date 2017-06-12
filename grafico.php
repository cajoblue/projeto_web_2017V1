<?php
include('conexao.php');

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

<html>
<head>
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

                vAxis: {title: 'Valores do Peso'},

                title: 'Estatística do seu Peso ',
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
<!-- esta é a div que irá armazenar o gráfico linear -->
<div id="chart_div" ></div>
</body>
</html>