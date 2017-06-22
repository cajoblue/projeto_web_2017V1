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
         <h3>Administrador</h3>
        <h3><?php session_start();
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
                <?php
                include ("conexao.php");
                // Cria a tabela
                echo "<br> <table border='1' style='text-align:center;'><tr><th>email</th><th>tipo</th></tr>";
                // Liga a tabela na base de dados
                $sql = 'SELECT* FROM login WHERE tipo="estudante"';
                //Seleciona a base de dados
                $retval = mysqli_query( $conn, $sql );
                if(! $retval ){
                    die('Could not get data: ' . mysqli_error());// se nao funcionar da erro

                }while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)){// vai buscar ha base de dados os dados nela guardada e poem os na tabela
                    //echo "<tr><td>".$row['img_capa']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['tipo']."</td>";
                    echo "<td>".$row['tipo']."</td>";
                    echo "</tr>";
                }
                echo "</table><br/>  <a href='inicio.php'>Voltar</a>";// fecha a tabela e uma hiperligacao para voltar ao inicio do site
                mysqli_close($conn);
                ?>
                >
            </div>
        </div>

    </div>
    <?php require 'barra_lateral.php';?>
    <div class="blocks">

    </div>
</div>


<div id="footer">
    <p>Copyright &copy;. All rights reserved. Design by <a >TeenPower</a>     </p>
</div>
</body>
</html>
