<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TeenPower - Inserir Dados</title>

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/animate_1.css">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/style_1.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
<div class="container">
    <div class="top">
        <h1 id="title" class="hidden"><span id="logo">Teen <span>Power</span></span></h1>
    </div>
    <div class="container_1">
        <div class="login-box animated fadeInUp">
            <div class="box-header">
                <h2>Registo de Dados</h2>
            </div>

            <form method="POST" action="validar_login.php">
                    <label for="nome">Nome Completo</label>
                <input type="text" id="nome" name="nome" style="width: 30em" value="" />
                <label for="nome">Data de Nascimentor</label>
                <input type="text" id="nome" name="nome" style="width: 30em" value="" />
                <br>
                    <label>Sexo</label>
                <label>
                    <input type="radio" name="sexo" value="masculino"> Masculino
                </label>
                <label>
                        <input type="radio" name="sexo" value="feminino"> Feminino
                </label>
                <br/>
                    <label for="telefone">Ano de escolaridade</label>
                    <input type="text" id="telefone" name="telefone" style="width: 10em"  value="" />
                <br/>
                    <label for="cidade">Nome da Escola</label>
                    <input type="text" id="cidade" name="cidade" style="width: 30em" value="" />
                <br/>
                    <label for="email">E-mail</label>
                    <input type="text" id="email" name="email" style="width: 30em" value="" />
                <br/>
                <label for="email">Atividades de Interesse</label>
                <input type="text" id="email" name="email" style="width: 30em" value="" />
                <br/>
                    <button type="submit" name="login" id="login" >Entrar</button>
            </form>
        </div>
    </div>
</div>
</body>

<script>
    $(document).ready(function () {
        $('#logo').addClass('animated fadeInDown');
        $("input:text:visible:first").focus();
    });
    $('#username').focus(function() {
        $('label[for="username"]').addClass('selected');
    });
    $('#username').blur(function() {
        $('label[for="username"]').removeClass('selected');
    });
    $('#password').focus(function() {
        $('label[for="password"]').addClass('selected');
    });
    $('#password').blur(function() {
        $('label[for="password"]').removeClass('selected');
    });
</script>

</html>