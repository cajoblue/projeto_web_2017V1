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
            <h1>Adicionar Novo Utilizador</h1>
            <div id="content">
                <div id="center" class="column">
                    <div id="content">
                        <div id="about">
                            <form action="registo.php" method="POST">
                                <table id="loginTabela">
                                    <tr>
                                        <td><p class="line" ><span>Email:</span></td>
                                        <td><input type="text" name="email"required/></td>
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
                                        <td><input type="text" name="password" value="<?php echo gerarPass(8)?>" required/></td>
                                    </tr>
                                </table>
                                <div id="center" class="column">
                                    <label for="inputType">Tipo de utilizador</label>
                                    <select  name="tipo" id="inputType" class="form-control">
                                        <option value="estudante" >Estudante</option>
                                        <option value="prof_saude">Profissional de Saúde</option>
                                        <option value="professor">Professor</option>
                                        <option value="admin">Administrador</option>
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
    <div id="left" class="column">
        <div class="block">
            <h1>Menu</h1>
            <ul id="navigation">
                <li class="color"><a href="menu_forum.php">Fórum</a></li>
                <li><a href="#">Mensagens</a></li>
                <li class="color"><a href="#">Ver Estudantes</a></li>
                <li><a href="#">Ver Professores</a></li>
                <li class="color"><a href="#">Ver Prof. Saúde</a></li>
                <li><a href="#">Os Meus Artigos</a></li>
                <li class="color"><a href="registo_view.php">Adicionar utilizador</a></li>
            </ul>
        </div>

    </div>
    <div id="right" class="column">
        <a><img src="images/utilizadoresativos.gif" alt="" width="237" height="260" /></a><br />

    </div>
    <div class="blocks">

    </div>
</div>


<div id="footer">
    <p>Copyright &copy;. All rights reserved. Design by <a >TeenPower</a>     </p>
</div>
</body>
</html>
            <div class="campo">
                <label for="telefone">Password:</label>
                <input type="text" id="telefone" name="password" style="width: 10em"  value="<?php echo gerarPass(8)?>" required/></td>
            </div>
    </table>

    <div id="center" class="column">
        <label for="inputType">Tipo de utilizador</label>
        <select  name="tipo" id="inputType" class="form-control">
            <option value="estudante" >Estudante</option>
            <option value="prof_saude">Profissional de Saúde</option>
            <option value="professor">Professor</option>
            <option value="admin">Administrador</option>
        </select>
    </div>

    <button type="submit" class="botao submit" name="submit">Registar</button>
    <button type="reset" class="botao reset" name="reset">Apagar Tudo</button>

    </fieldset>
</form>