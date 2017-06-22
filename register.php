<!DOCTYPE HTML >
<html>
<head>
    <title>criar_forum_subtemas</title>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    
    
<div id="header">
    <a href="inicio.php" class="float"><img src="images/teenpower.png" alt="" width="171" height="73" /></a>
    <div class="topblock2">
        <h4>Administrador</h4>
        <h5>username</h5>
    </div>
    <div id="footer">
    </div>
</div>

<div id="container">
    <div id="center" class="column">
        <div id="content">
        
            <h1>Register </h1>
            <div id="content">
            <form class="" action="forum_cosntrol.php" method="post">
    <?php include'connect.php'; ?>
    <?php include'functions.php'; ?>
    <?php include'title_bar.php'; ?>
</form>
                <div>
                <form method="post">
                    <?php
                    if(isset($_POST['register'])){
                        
                        $username = $_POST['username'];
                        $password = md5($_POST['password']);
                        if(empty($username) or empty($password)){
                            $message = "Filds empty";
                        }else{
                                                        
                            $sql = "INSERT INTO user (username, password)
                                          VALUES ('$username', '$password')";
                            
                            if (mysqli_query($conn, $sql)) {
                                                           $message = "successfully register!";
                               } else {
                                   $message = "Error: " . $sql . "<br>" . mysqli_error($conn);
                              }                      
                
                        }
                        
                        echo "<p>$message</p>";
                    }
                    ?>
                    <br>
                    username<input type="text" name="username" /><br>
                    password <input type="password" name="password" /><br>
                    
                    <input type="submit" name="register" value="register" />
                
                </form>
                    
            </div>
        </div>
    </div>
    <div id="left" class="column">
        <div class="block">
            <h1>Menu</h1>
            <ul id="navigation">
                <li class="color"><a href="#">Fórum</a></li>
                <li><a href="#">Mensagens</a></li>
                <li class="color"><a href="#">Ver Estudantes</a></li>
                <li><a href="#">Ver Professores</a></li>
                <li class="color"><a href="#">Ver Prof. Saúde</a></li>
                <li><a href="#">Os Meus Artigos</a></li>
            </ul>
        </div>

    </div>
    <div id="right" class="column">
        <a><img src="images/utilizadoresativos.gif" alt="" width="237" height="260" /></a><br />

        </div>
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
