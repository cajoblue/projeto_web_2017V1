<?php

include('conexao.php');

$tbl_name="forum_answer"; // Table name

// Obter valores enviados do formulário
$a_name=$_POST['a_name'];
$a_email=$_POST['a_email'];
$a_answer=$_POST['a_answer'];
$destino = 'images/' . $_FILES['arquivo']['name'];

// Cria uma variável que terá os dados do erro
$erro = false;

// Obter valor ID enviado
$id=$_POST['id'];
$datetime = date("d/m/y H:i:s"); // criar data e hora

// Encontra o numero de comentário mais alto
$sql = "SELECT MAX(a_id) AS Maxa_id FROM $tbl_name WHERE question_id='$id'";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_array($result);

// adiciona + 1 ao numero de comentário mais alto e mantem o nome da variavel "$Max_id". Se não houver nenhum comentário defenir = 1
if ($rows) {
    $Max_id = $rows['Maxa_id'] + 1;
} else {
    $Max_id = 1;
}

// Verifica se $email realmente existe e se é um email.
if ( ( ! isset( $a_email ) || ! filter_var( $a_email, FILTER_VALIDATE_EMAIL ) ) && !$erro ) {
    $erro = 'Envie um email válido.';

}
if ( $erro ) {
    echo "<script>alert('Envie um email válido!');top.location.href='ver_topico.php?id=" . $id . "';</script>";
}else {



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

            }
            else
                echo 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />';
        }
        else
            echo 'Você poderá enviar apenas arquivos "*.jpg;*.jpeg;*.gif;*.png"<br />';
    }
    else
        echo '';

    // Inserir o comentário
    $sql2 = "INSERT INTO $tbl_name(question_id, a_id, a_name, a_email, a_answer,a_imagem, a_datetime)VALUES('$id', '$Max_id', '$a_name', '$a_email', '$a_answer','$destino', '$datetime')";
    $result2 = mysqli_query($conn, $sql2);

    if ($result2) {
        echo "<script>alert('Comentário inserido!');top.location.href='ver_topico.php?id=" . $id . "';</script>";
        $tbl_name2 = "forum_question";
        $sql3 = "UPDATE $tbl_name2 SET reply='$Max_id' WHERE id='$id'";
        $result3 = mysqli_query($conn, $sql3);

    } else {
        echo "ERROR";
    }


/*
// Inserir o comentário
    $sql2 = "INSERT INTO $tbl_name(question_id, a_id, a_name, a_email, a_answer, a_datetime)VALUES('$id', '$Max_id', '$a_name', '$a_email', '$a_answer', '$datetime')";
    $result2 = mysqli_query($conn, $sql2);

    if ($result2) {
        echo "<script>alert('Comentário inserido!');top.location.href='ver_topico.php?id=" . $id . "';</script>";

*/
// Se adicionada novo comentário, adiciona  +1 na coluna do numero de comentários


// Fechar conexão
    mysqli_close($conn);
}
?>