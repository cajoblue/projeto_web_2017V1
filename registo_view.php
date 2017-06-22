<?php include_once'functions.php'; ?>
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
            <h1>Adicionar Novo Utilizador</h1>
            <div id="content">
                <div id="center" class="column">
                    <div id="content">
                        <div id="about">
                            <form action="registo.php" method="POST">
                                <table id="loginTabela">
                                    <tr>
                                        <td><p class="line" ><span>Nome:</span></td>
                                        <td><p><input type="text" name="nome_user"required/></td></p>
                                    </tr>
                                    <tr>
                                        <td><p class="line" ><span>Email:</span></td>
                                        <td><p><input type="email" name="email"required/></td></p>
                                    </tr>
                                    <tr>
                                        <?php

                                        function gerarPass($limit){

                                            $str = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz-?!";
                                            $maximo =strlen($str)-1;

                                            $ret='';

                                            for($i= 0; $i < $limit; $i++):

                                                $ret .= $str{mt_rand(0,$maximo)}; //concatenar

                                            endfor;
                                            return $ret;

                                        }

                                        ?>

                                        <td><p class="line"><span>Password:</span></td>
                                        <td><p><input type="password" name="password" value="<?php echo gerarPass(8)?>" require/></p></td>
                                    </tr>
                                </table>
                                <div id="center" class="column">
                                    <label for="inputType">Tipo de utilizador</label>
                                    <select  name="tipo" id="inputType" class="form-control">
                                        <option value="estudante" >Estudante</option>
                                        <option value="prof_saude">Profissional de Saúde</option>
                                        <option value="professor">Professor</option>
                                        <?php if(descobrirUser()=="admin"){ ?>
                                        <option value="admin">Administrador</option>
                                        <?php }; ?>
                                    </select>
                                    <div id="center" class="column">
                                        <input type="submit" name="Submit" value="Registar">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
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
