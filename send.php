<?php include'conexao.php'; ?>
<?php include'functions.php'; ?>
<!DOCTYPE HTML >
<html>
<head>
    <title>Nova conversa</title>
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
</div>

<div id="container">
    <div id="center" class="column">
        <div id="content">

            <h1>Nova conversa</h1>
            <div id="content">
            <form class=""  method="post">

    <?php// include'title_bar.php'; ?>
   <div>
     <?php if(empty($_GET['user'])){ ?>
     <form action='send.php' method='POST'>
       <input type='text' placeholder='Procurar..' name="nome" />
     <input type='submit' value='Procurar'/>
     </form>
       <?php
     };
       if(isset($_GET['user']) && !empty($_GET['user'])){
         ?>
       <form method='post'>
        <?php

           if(!empty($_POST['message'])){

               $my_id=$_SESSION['idUtilizador'];
               $user=$_GET['user'];
               if (!empty($_GET['hash']))
                   $random_number=$_GET['hash'];
               else
                    $random_number=rand();
               $message=$_POST['message'];
               $dia=date("d/m/y");
               $hora=date("H:i:s");


      $sql = "SELECT 'hash' FROM message_group where user_one='$my_id' AND user_two=$user OR user_two='$my_id' AND user_one=$user ";


           $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) ==1) {

            echo "<p>Conversation already started! </p>";
        }else{
           $sql = "INSERT INTO message_group (user_one, user_two, hash)
                    VALUES ('$my_id', '$user', '$random_number')";


            if (mysqli_query($conn, $sql)) {
                      echo "<p>Conversation started! </p>";;

                 header("Location: send.php?user=$user&hash=$random_number");
         } else {
                      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                 }

        }
            $sql = "INSERT INTO messages (group_hash, from_id, message, dia, hora)
                    VALUES ('$random_number', '$my_id', '$message', '$dia', '$hora')";

if (mysqli_query($conn, $sql)) {
    header("Location: conversations.php?hash=$random_number");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
        }

        ?>

           Insira a mensagem:<br>
           <textarea name='message' rows='10' cols='60'></textarea><br/>
           <input type="submit" value="Enviar" />

       </form>


   <?php
 }else{ ?>

           <br><b>Seleciona o utilizador:</b>
        <?php
        if(empty($_POST['nome'])){
            $sql = "SELECT idUtilizador, nome_user FROM login";
            $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0) {
     // output data of each row
             while($row = mysqli_fetch_assoc($result)) {

                 $user=$row['idUtilizador'];
                 $username=$row['nome_user'];

                 echo "<p><a href='send.php?user=$user'><h3>$username</h3></a></p> ";

     }

     } else {
     echo "0 results";
    }
        }else{
           $nome_procurado=$_POST['nome'];
          if(!preg_match("/^[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzÀÁÂÃÇÈÉÊÌÍÒÓÔÕÙÚÛàáâãçèéêìíîòóôõùúû ]+$/", $nome_procurado)){
            echo "<script>alert('Nome inválido!!');top.location.href='send.php';</script>";
die;
          }

           $sql = "SELECT idUtilizador, nome_user FROM login where nome_user like'%$nome_procurado%' ";
           $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
    // output data of each row
            while($row = mysqli_fetch_assoc($result)) {

                $user=$row['idUtilizador'];
                $username=$row['nome_user'];

                echo "<p><a href='send.php?user=$user'><h3>$username</h3></a></p> ";

    }

    } else {
    echo "0 results";
   }
}

}


       ?>
</form>

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
