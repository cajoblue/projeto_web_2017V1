<?php
include('conexao.php');
session_start();


// get data that sent from form
$user_id=$_SESSION['idUtilizador'];
$id_subcategoria=$_GET['id'];
$id_sub=$_GET['id_sub'];
$topic=$_POST['topic'];
$detail=$_POST['detail'];
$destino = 'images/' . $_FILES['arquivo']['name'];
$data_rege=date("d/m/y h:i:s"); //create date time

// Cria uma variável que terá os dados do erro
$erro = false;

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

//insere comentario
    $sql="INSERT INTO forum_question (id_login,id_sub,id_subcategoria,topic,detail,data_reg,imagem,fk_subcategoria) VALUES('$user_id','$id_subcategoria','$id_sub','$topic', '$detail', '$data_rege', '$destino','$id_subcategoria')";
    $result=mysqli_query($conn,$sql);

    if($result){
        echo "<script>alert('O seu tópico foi criado com sucesso!');top.location.href='menu_topico_forum.php?id=".$id_subcategoria."&id_sub=".$id_sub."';</script>";
    }
    else {
        echo "ERROR";
    }


mysqli_close($conn);

?>
