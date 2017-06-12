<?php
include('conexao.php');

// Cria uma variável que terá os dados do erro
$erro = false;

// get data that sent from form
$topic=$_POST['topic'];
$detail=$_POST['detail'];
$name=$_POST['name'];
$email=$_POST['email'];
$destino = 'images/' . $_FILES['arquivo']['name'];
$datetime=date("d/m/y h:i:s"); //create date time

// Verifica se $email realmente existe e se é um email.
if ( ( ! isset( $email ) || ! filter_var( $email, FILTER_VALIDATE_EMAIL ) ) && !$erro ) {
    $erro = 'Envie um email válido.';

}
if ( $erro ) {
    echo "<script>alert('Envie um email válido!');top.location.href='criar_topico.html';</script>";
}else{


    // verifica se foi enviado um arquivo
    if ( isset( $_FILES[ 'arquivo' ][ 'name' ] ) && $_FILES[ 'arquivo' ][ 'error' ] == 0 ) {

        $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
        $nome = $_FILES['arquivo']['name'];

        // Pega a extensão
        $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );

        // Converte a extensão para minúsculo
        $extensao = strtolower ( $extensao );

        // Somente imagens, .jpg;.jpeg;.gif;.png
        // Aqui eu enfileiro as extensões permitidas e separo por ';'
        // Isso serve apenas para eu poder pesquisar dentro desta String
        if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
            // Cria um nome único para esta imagem
            // Evita que duplique as imagens no servidor.
            // Evita nomes com acentos, espaços e caracteres não alfanuméricos
            $novoNome = uniqid ( time () ) . '.' . $extensao;

            // Concatena a pasta com o nome
            $destino = "images/" . $novoNome;

            // tenta mover o arquivo para o destino
            if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {
                // Inserir o comentário
            }
            else
                echo 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />';
        }
        else
            echo 'Você poderá enviar apenas arquivos "*.jpg;*.jpeg;*.gif;*.png"<br />';
    }
    else
        echo '';

    $sql="INSERT INTO forum_question (topic, detail, name, email, datetime,imagem)VALUES('$topic', '$detail', '$name', '$email', '$datetime', '$destino')";
    $result=mysqli_query($conn,$sql);


    if($result){
        echo "<script>alert('O seu tópico foi criado com sucesso!');top.location.href='menu_forum.php';</script>";
    }
    else {
        echo "ERROR";
    }


mysqli_close($conn);
}
?>