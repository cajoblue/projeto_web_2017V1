<?php include_once'functions.php'; ?>
<!DOCTYPE HTML >
<html>
<head>
  <title>Teen Power</title>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5">
  <link rel="stylesheet" type="text/css" href="style.css" />



    <script lang="Javascript">

        var index = 1;

        function plusIndex(n){
            index = index + 1;
            showImage(index);
        }



        showImage(1);

        function showImage(n){
            var i;
            var x = document.getElementsByClassName("slides");
            if(n > x.length){ index = 1};
            if(n < 1){ index = x.length};
            for(i=0;i<x.length;i++)
            {
                x[i].style.display = "none";
            }
            x[index-1].style.display = "block";
        }
        autoSlide();
        function autoSlide(){
            var i;
            var x = document.getElementsByClassName("slides");
            for(i=0;i<x.length;i++){
                x[i].style.display = "none";
            }
            index++;
            if(index > x.length){index = 1}
            x[index-1].style.display = "block";
            setTimeout(autoSlide,2000);

        }


    </script>




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
        <h1>Eventos</h1>

              <div id="container1">
                  <?php
                  include('conexao.php');

                  $sql="SELECT * FROM eventos ";
                  $result=mysqli_query($conn,$sql);

                  while($row=mysqli_fetch_array($result)) {

                      $i=$row['imagem'];

                      $vazia="images/";

                        if ($i==$vazia) {
                            echo "";
                       }else {
                       //echo '<img class="slides" src="'.$i.'">';
                       echo '<a href="sub_eventos.php?id='.$row['id'].'"> <img class="slides" src="'.$i.'"></a>';
                             // echo "<a href='sub_eventos.php?id=".$row['id']."'><img class=\"slides\" src='$i' ></a>";
                         // echo "<a href='sub_eventos.php?id=".$row['id']."'><img class=\"slides\" src='$i' ></a>";
                            // echo "<img class='slides' onclick='link' src='$i'>";
                        }
                  }
                      ?>



                  <button class="btn" onclick="plusIndex(-1)" id="btn1">&#10094;</button>
                  <button class="btn" onclick="plusIndex(1)" id="btn2">&#10095;</button>
              </div>

          </div>
    </div>
<?php
include ('conexao.php');

$sql="SELECT * FROM eventos";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)) {
}
    require 'barra_lateral.php';?>
    </div>
  </div>
</div>
</div>

<div id="footer">
  <p>Copyright &copy;. All rights reserved. Design by <a >TeenPower</a>     </p>
</div>
</body>
</html>
