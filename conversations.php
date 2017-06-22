<?php include'connect.php'; ?>
<?php include'functions.php'; ?>
<!DOCTYPE HTML >
<html>
<head>
    <title>Mensagens</title>
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
    </div>
</div>

<div id="container">
    <div id="center" class="column">
        <div id="content">

            <h1>Conversations</h1>
            <div id="content">
            <form class="" action="forum_cosntrol.php" method="post">
       <?php include'message_title_bar.php'; ?>
    <?php $my_id = $_SESSION['idUtilizador']; ?><!--passa para esta variavel do id da pessoa logada!-->
</form>
       <div>
<?php
                //se tiver iniciado nenhuma conversa, entra
            if(!empty($_GET['hash'])){
                $hash = $_GET['hash'];
                //vai a tablea mensagens e selecionas a pessoa e a mensagem associado a esse $hash
                $sql= "SELECT id, from_id, message,dia,hora FROM messages where group_hash='$hash' order by hora ";
                $result = mysqli_query($conn, $sql);

               while($row = mysqli_fetch_assoc($result)) {
                   $from_id=$row['from_id']; //passa a pessoa para varialvel
                   $message=$row['message'];
                   $dia=$row['dia'];
                   $hora=$row['hora'];

                    //bem como a mensagem
//seleciona o nome da pessoa com ide que peguei na tabela de mensagens
                $sql= "SELECT email FROM login where idUtilizador='$from_id' ";
                $result_2 = mysqli_query($conn, $sql);


                $row = mysqli_fetch_assoc($result_2);
                $from_username = $row['email'];//passo o nome da pessoa para variavel

            echo "<p><b>$from_username</b><br>$message $hora</br></p>"; //mostra o nome a mensagem
               }
?>
           <br/>
           <form method="post">

<?php
//se a mensagens não tiver vazia, pega a mensagem que ver do POST
                if(!empty($_POST['message'])){
                  $new_message=$_POST['message'];
                  $dia=date("d/m/y");
                  $hora=date("H:i:s");
       $sql = "INSERT INTO messages (group_hash, from_id, message, dia, hora)
                    VALUES ('$hash', '$my_id', '$new_message', '$dia', '$hora')";
//faz um insert a tabela de uma mensagens, de uma conversa ja iniciada, com os dados pegos anteriormente
           if (mysqli_query($conn, $sql)) {
               header('location:  conversations.php?hash='.$hash);
         } else {
              $message="Error: " . $sql . "<br>" . mysqli_error($conn);
      }
                }
?>

               Enter message:<br>
           <textarea name='message' rows='10' cols='60'></textarea><br/>
           <input type="submit" value="send message" />

        </form>

    <?php
             }else{

                    echo "<b> Selecione a conversa: </b>";
                $sql = "SELECT hash,user_one,user_two FROM message_group where user_one='$my_id' OR user_two='$my_id'";
                $result = mysqli_query($conn, $sql);

           while($row = mysqli_fetch_array($result)) {

                $hash=$row['hash'];
                $user_one=$row['user_one'];
                $user_two=$row['user_two'];

               if($user_one==$my_id){
                   $select_id = $user_two;
               }else{
                   $select_id = $user_one;
               }

               $sql = "SELECT email FROM login where idUtilizador='$select_id'";
               $result_2 = mysqli_query($conn, $sql);

               $row = mysqli_fetch_array($result_2);
                      $select_username=$row['email'];

echo "<p><a href='delete_mp.php?hash=$hash'><img src='delete.png' alt='Smiley face' width='20' height='20'><a href='conversations.php?hash=$hash'>$select_username</a></p>";

               }
        }
?>
                </div>
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
