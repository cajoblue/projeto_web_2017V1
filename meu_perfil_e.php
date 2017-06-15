<!DOCTYPE HTML >
<html>
<head>
    <title>Teen Power</title>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script>
        $(function() {
            $( "#datepicker" ).datepicker();
        });
    </script>
</head>

<body>
<div id="header">
    <a href="inicio.html" class="float"><img src="images/teenpower.png" alt="" width="171" height="73" /></a>
    <div class="topblock2">
        <h3>Estudante</h3>
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
           <h1>Meu Perfil</h1>
            <div class="stuff">
                <a href="alterar_pass_e.php"><button>Alterar Palavra-Passe</button></a>
                <a href="registar_dados_e.php"><button>Registar Dados Pessoais</button></a>
                <a href="editar_dados_e.php"><button>Editar Dados Pessoais</button></a>
                <h3><?php
                
                $my_id = $_SESSION['idUtilizador'];
                $sql = "SELECT* FROM t_estudante WHERE idUtilizador='$my_id'";
                $result = mysqli_query($conn, $sql);
                if(! $result ){
                    die('Could not get data: ' . mysqli_error());// se nao funcionar da erro

                } while($row = mysqli_fetch_assoc($result)) {
                   $nome_completo=$row['nome_completo'];
                   $data_nasc=$row['datepicker'];
                   $ano_escola=$row['ano_escola'];
                   $escola=$row['escola'];
                   $at_interesse=$row['at_interesse'];
                
                
                  echo "<br> Nome: ". $row["nome_completo"]."<br>";
                  echo "<br> Data de Nascimento: ". $row["datepicker"]."<br>";
                  echo "<br> Ano de Escolaridade: ". $row["ano_escola"]."<br>";
                  echo "<br> Escola que frequenta: ". $row["escola"]."<br>";
                  echo "<br> Atividades de Interesse: ". $row["at_interesse"]."<br>";
                    
                }
    
                
                mysqli_close($conn);
                ?><h3>

                
                
            
            </div>
        </div>
        
     </div>
    <div id="left" class="column">
        <div class="block">
            <h1>Menu</h1>
            <ul id="navigation">
                <li class="color"><a href="menu_forum.php">Fórum</a></li>
                <li><a href="meu_perfil_e.php">Meu Perfil</a></li>
                <li class="color"><a href="messages.php">Mensagens</a></li>
                <li><a href="ver_estudantes_e.php">Ver Estudantes</a></li>
                <li class="color"><a href="#">Ver Professores</a></li>
                <li><a href="#">Ver Prof. Saúde</a></li>
                <li class="color"><a href="#">Os Meus Artigos</a></li>
            </ul>
        </div>

    </div>
    <div id="right" class="column">
        <ul id="navigation">
            <li class="color"><a href="registar_peso.php">Registar Peso</a></li>
            <li><a href="#">Registar nº horas de exercício</a></li>
            <li class="color"><a href="calcular_imc.php">Calcular IMC</a></li>
            <li><a href="#">Os Meus Dados</a></li>
        </ul>
        <a><img src="images/utilizadoresativos.gif" alt="" width="237" height="260" /></a><br />

    </div>


<div id="footer">
    <p>Copyright &copy;. All rights reserved. Design by <a >TeenPower</a>     </p>
</div>
</body>
</html>
