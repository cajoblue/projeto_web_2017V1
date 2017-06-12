<?php
// Ligar há base de dados
include ("conn.php");
// Cria a tabela
echo "<br> <table border='1' style='text-align:center;'><tr><th>Email</th><th>Password</th><th>";
// Liga a tabela na base de dados
$sql = 'SELECT * FROM login';
//Seleciona a base de dados
mysqli_select_db('bd_projeto');
$retval = mysqli_query( $sql, $conn );
if(! $retval ){
    die('Could not get data: ' . mysqli_error());// se não funcionar dá erro
}

while($row = mysqli_fetch_array($retval, MYSQLi_ASSOC)){// vai buscar ha base de dados os dados nela guardada e poem os na tabela
    //echo "<tr><td>".$row['img_capa']."</td>";
    echo "<td>".$row['Email']."</td>";
    echo "<td>".$row['Password']."</td>";
    echo "<td><a href='delete.php?id=".$row['id']."'><img src='delete.jpg' width=75px height=50px></a></td><tr>";
    echo "</tr>";
}
echo "</table><br/>  <a href='logA.php'>Terminar!</a>";// fecha a tabela e uma hiperligação para voltar ao inicio do site
mysqli_close($conn);
?>