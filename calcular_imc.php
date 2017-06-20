<!DOCTYPE HTML >
<html>
<head>
    <title>Forum Teen Power</title>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5">
    <link rel="stylesheet" type="text/css" href="style.css" />
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
                <h1>Calcular IMC</h1>
                <br>
                <form name="form1" method="post" action="calcular_imc.php">
                    <strong>Inserir Peso:</strong>
                    <input type="text"  name="peso" id="peso" style="font-size:11px;width:40px" required></input>Kgs
                    <br><br>
                    <strong>Inserir Altura:</strong>
                    <input type="text"  name="altura" placeholder="Ex:1.70"  id="altura" style="font-size:11px;width:50px" required />cm
                    <br> <br>

                    <input type="submit" name="Submit" value="Calcular"> <input type="reset" name="Submit2" value="Apagar">

<?php
$peso="";
$altura="";
if(!empty($_POST['peso']) || !empty($_POST['altura']) ){
  $peso=$_POST['peso'];
  $altura=$_POST['altura'];
  $caulular = $peso / ($altura * $altura);
  $imc = number_format($caulular, 2, '.', '');
}
 ?>
 <?php if (!empty($imc)): ?>
   <table >
     <tr>
       <th>IMC</th>
     </tr>
     <tr>
       <td><?php echo $imc; ?></td>
     </tr>
   </table>
 <?php endif; ?>
 <table >
   <tr>
     <th>IMC</th>
     <th>Classificação</th>
   </tr>
   <tr>
     <td> <18 </td>
     <td>Abaixo do peso</td>
   </tr>
   <tr>
     <td> 18-25 </td>
     <td>Peso normal</td>
   </tr>
   <tr>
     <td> 25-30 </td>
     <td>Acima do peso</td>
   </tr>
   <tr>
     <td> >30 </td>
     <td>Obesidade</td>
   </tr>
 </table>
</form>
            </div>
        </div>
        <div id="left" class="column">
            <div class="block">
                <h1>Menu</h1>
                <ul id="navigation">
                  <li class="color"><a href="meu_perfil_e.php">Meu Perfil</a></li>
                  <li><a href="index_forum.php">Fórum</a></li>
                  <li class="color"><a href="messages.php">Mensagens</a></li>
                  <li><a href="ver_estudantes_e.php">Ver Estudantes</a></li>
                  <li  class="color"><a href="#">Ver Professores</a></li>
                  <li><a href="#">Ver Prof. Saúde</a></li>
                  <li class="color"><a href="#">Os Meus Artigos</a></li>
                </ul>
            </div>
        </div>
        <div id="right" class="column">
          <ul id="navigation">
            <li class="color"><a href="registar_peso.php">Registar Peso</a></li>
            <li><a href="registar_hora_exerc.php">Registar nº horas de exercício</a></li>
            <li class="color"><a href="calcular_imc.php">Calcular IMC</a></li>
            <li><a href="meus_dados.php?">Os Meus Dados</a></li>
          </ul>
          <a><img src="images/utilizadoresativos.gif" alt="" width="237" height="260" /></a><br />
        </div>
    </div>

    <br>
    <div class="blocks">
    </div>
    <div id="footer">
        <p>Copyright &copy;. All rights reserved. Design by <a >TeenPower</a>     </p>
    </div>
</body>
</html
