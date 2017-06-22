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
        <h1>Tópico</h1>
        <div id="content">

          <br> <a href="menu_forum.php"><button>Voltar Atrás</button></a>
          <?php
          include('conexao.php');
          $id_session=$_SESSION['idUtilizador'];

          $tbl_name="forum_question"; // Table name

          // get value of id that sent from address bar
          $id=$_GET['id'];

          $sql="SELECT * FROM forum_question WHERE id='$id'";
          $result=mysqli_query($conn,$sql);

          echo "<table width=\"400\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"1\" >";
          echo "<tr>";
          echo "<td bgcolor=\"#F8F7F1\"><strong>De:</strong></td>";
          echo "<td bgcolor=\"#F8F7F1\"><strong>Titulo</strong></td>";
          echo "<td bgcolor=\"#F8F7F1\"><strong>Descrição</strong></td>";
          echo "</tr>";
          while($row=mysqli_fetch_array($result)){
          $user_id=$row['id_login'];

          $sql_1="SELECT * FROM login WHERE idUtilizador=$user_id";
          $result_1=mysqli_query($conn,$sql_1);
          if (!empty($result_1)) {
            $row_1 = mysqli_fetch_array($result_1);
            echo "<tr>";
            echo "<td bgcolor=\"#F8F7F1\"><strong>".$row_1['nome_user']."</strong></td>";
            echo "<td rowspan='2' bgcolor=\"#F8F7F1\"><strong>".$row['topic']."</strong></td>";
            echo "<td rowspan='2' bgcolor=\"#F8F7F1\"><strong>".$row['detail']."</td>";

            echo "</tr>";
          }else{
            echo "Erro";
          }
          $i=$row['imagem'];
          $vazia="images/";

          if ($i==$vazia) {
            echo "";
          }else {
            echo "<tr>";
            echo "<td bgcolor=\"#F8F7F1\"><img src='$i' width=300px height=200px></td>";
            echo "</tr>";
          }



          }
          echo "</table><br/>";




          $tbl_name2="forum_answer"; // Switch to table "forum_answer"

          $sql2="SELECT * FROM forum_answer WHERE id_question='$id'";
          $result2=mysqli_query($conn,$sql2);

          while($row=mysqli_fetch_array($result2)){
          echo " <td><table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"1\" bgcolor=\"#FFFFFF\">";
          echo "<tr>";
          echo "<td bgcolor=\"#F8F7F1\"><strong>Comentário</strong></td>";
          echo "<td bgcolor=\"#F8F7F1\">:</td>";
          echo "<td bgcolor=\"#F8F7F1\">".$row['a_answer']."</td>";
          echo "</tr>";
          $i=$row['a_imagem'];
          $vazia="images/";
          if ($i==$vazia) {
            echo "";
          }else{
            echo "<tr>";
            echo "<td bgcolor=\"#F8F7F1\"><strong>Imagem</strong></td>";
            echo "<td bgcolor=\"#F8F7F1\">:</td>";
            echo "<td  bgcolor=\"#F8F7F1\">"."<img src='$i' width=300px height=200px>"."</td>";
            echo "</tr>";
          }
          echo "<tr>";
          echo "<td bgcolor=\"#F8F7F1\"><strong>Data e Hora</strong></td>";
          echo "<td bgcolor=\"#F8F7F1\">".$row['data_reg']."</td>";
          echo "</tr>";
          echo "<tr>";
          echo "<td bgcolor=\"#FFFFFF\"><a href='eliminar_comentario.php?id=".$row['id']."&question_id=".$row['id_question']."&imagem=".$row['a_imagem']."'>"."<img src=\"images/nocheck.jpg\" alt=\"\" width=\"31\" height=\"23\" />"." </a>"."</td>";
          echo "<td bgcolor=\"#FFFFFF\"><a href='editar_coment.php?id=".$row['id']."&question_id=".$row['id_question']."'>"."<img src=\"images/EDITAR.\" alt=\"\" width=\"31\" height=\"23\" />"." </a>"."</td>";
          echo "</tr>";
          }
          echo "</table>";
          $sql3="SELECT view FROM $tbl_name WHERE id='$id'";
          $result3=mysqli_query($conn, $sql3);

          $row=mysqli_fetch_array($result3);
          $view=$row['view'];

          // if have no counter value set counter = 1
          if(empty($view)){
          $view=1;
          $sql4="INSERT INTO $tbl_name(view) VALUES('$view') WHERE id='$id'";
          $result4=mysqli_query($conn, $sql4);
          }
          $id_subcategoria=$_GET['id'];

          // count more value
          $addview=$view+1;
          $sql5="update $tbl_name set view='$addview' WHERE id='$id'";
          $result5=mysqli_query($conn, $sql5);

          mysqli_close($conn);
          ?>
          <br>
          <?php echo  "<form name='form1' method='post' action='adicionar_comentario_forum.php?id_user=$id_session&id_sub=$id_subcategoria' enctype='multipart/form-data'>"; ?>
                <td>
                  <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                    <tr>
                      <td><textarea name="a_answer" cols="45" rows="3" id="a_answer" placeholder="Comentar..."></textarea></td>
                    </tr>
                  </table>
                  <input type="submit" name="Submit" value="Enviar Comentário"> <input type="reset" name="Submit2" value="Apagar">
                </td>
          <?php echo "</form>"; ?>

        </div>
      </div>
    </div>
  <?php include('geral_bar.php'); ?>

    <div class="blocks">

    </div>
  </div>
</div>
</div>

<div id="footer">
  <p>Copyright &copy;. All rights reserved. Design by <a >TeenPower</a>     </p>
</div>
</body>
</html>
