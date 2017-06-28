<?php include_once'functions.php'; ?>
!DOCTYPE HTML >
<html>
<head>
    <title>Forum Teen Power</title>
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
      <?php
      require 'breadCrumb.php'; ?>
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
        <?php require 'barra_lateral.php';?>
    </div>

    <br>
    <div class="blocks">
    </div>
    <div id="footer">
        <p>Copyright &copy;. All rights reserved. Design by <a >TeenPower</a>     </p>
    </div>
</body>
</html
