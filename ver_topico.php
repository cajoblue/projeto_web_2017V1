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
        <h4>Administrador</h4>
        <h5>username</h5>
    </div>
    <div id="footer">
    </div>
</div>
<div id="container">
    <div id="center" >
<?php
include('conexao.php');

$tbl_name="forum_question"; // Table name

// get value of id that sent from address bar
$id=$_GET['id'];

$sql="SELECT * FROM $tbl_name WHERE id='$id'";

$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_array($result)){
    echo "<table width=\"400\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"1\" >";
        echo "<tr>";
            echo "<td bgcolor=\"#F8F7F1\"><strong>".$row['topic']."</strong></td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td bgcolor=\"#F8F7F1\"><strong>".$row['detail']."</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td bgcolor=\"#F8F7F1\"><strong>De:</strong>".$row['name']."<strong>Email : </strong>".$row['email']."</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td bgcolor=\"#F8F7F1\"><strong>Data e Horas: </strong>".$row['datetime']."</td>";
        echo "</tr>";
$i=$row['imagem'];
$vazia="images/";
if ($i==$vazia) {
    echo "";
}else {
    echo "<tr>";
    echo "<td bgcolor=\"#F8F7F1\"><img src='$i' width=300px height=200px></td>";
    echo "</tr>";
}
        echo "</table><br/>";
    }
$tbl_name2="forum_answer"; // Switch to table "forum_answer"

$sql2="SELECT * FROM $tbl_name2 WHERE question_id='$id'";
$result2=mysqli_query($conn,$sql2);

while($row=mysqli_fetch_array($result2)){
    echo "<table width=\"400\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"1\" >";
        echo "<tr>";
            echo " <td><table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"1\" bgcolor=\"#FFFFFF\">";
        echo "<tr>";
            echo "<td bgcolor=\"#F8F7F1\"><strong>Nome</strong></td>";
            echo "<td bgcolor=\"#F8F7F1\">:</td>";
            echo "<td bgcolor=\"#F8F7F1\">".$row['a_name']."</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td bgcolor=\"#F8F7F1\"><strong>Email</strong></td>";
            echo "<td bgcolor=\"#F8F7F1\">:</td>";
            echo "<td bgcolor=\"#F8F7F1\">".$row['a_email']."</td>";
        echo "</tr>";
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
            echo "<td bgcolor=\"#F8F7F1\">:</td>";
            echo "<td bgcolor=\"#F8F7F1\">".$row['a_datetime']."</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td bgcolor=\"#FFFFFF\"><a href='eliminar_comentario.php?id=".$row['a_id']."&question_id=".$row['question_id']."&imagem=".$row['a_imagem']."'>"."<img src=\"images/nocheck.jpg\" alt=\"\" width=\"31\" height=\"23\" />"." </a>"."</td>";
            echo "<td bgcolor=\"#FFFFFF\"><a href='editar_coment.php?id=".$row['a_id']."&question_id=".$row['question_id']."'>"."<img src=\"images/EDITAR.\" alt=\"\" width=\"31\" height=\"23\" />"." </a>"."</td>";
        echo "</tr>";
    echo "</table>";
    echo "<br>";
            }

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

// count more value
$addview=$view+1;
$sql5="update $tbl_name set view='$addview' WHERE id='$id'";
$result5=mysqli_query($conn, $sql5);

mysqli_close($conn);
?>
<BR>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
    <tr>
        <form name="form1" method="post" action="adicionar_comentario.php" enctype="multipart/form-data">
            <td>
                <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                    <tr>
                        <td width="18%"><strong>Nome</strong></td>
                        <td width="3%">:</td>
                        <td width="79%"><input name="a_name" type="text" id="a_name" size="45" required></td>
                    </tr>
                    <tr>
                        <td><strong>Email</strong></td>
                        <td>:</td>
                        <td><input name="a_email" type="text" id="a_email" size="45" required></td>
                    </tr>
                    <tr>
                        <td valign="top"><strong>Comentário</strong></td>
                        <td valign="top">:</td>
                        <td><textarea name="a_answer" cols="45" rows="3" id="a_answer" required></textarea></td>
                    </tr>
                    <tr>
                        <td valign="top"><strong>Selecione uma imagem:</strong></td>
                        <td valign="top">:</td>
                        <td><input name="arquivo" type="file"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input name="id" type="hidden" value="<?php echo $id; ?> "></td>
                        <td><input type="submit" name="Submit" value="Enviar Comentário"> <input type="reset" name="Submit2" value="Apagar"></td>
                    </tr>
                </table>
            </td>
        </form>
    </tr>
</table>
        <br> <a href="menu_forum.php"><button>Voltar Atrás</button></a>
    </div></div>
<br>

<div id="container">
    <div class="blocks">
    </div>
    <div id="footer">
        <p>Copyright &copy;. All rights reserved. Design by <a >TeenPower</a>     </p>
    </div>
</body>
</html>