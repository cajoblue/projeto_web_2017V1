<?php

include('conexao.php');
// Obter valores enviados do formulário
$nome=$_POST['nome'];
$id_categoria=$_GET['id'];
// Cria uma variável que terá os dados do erro
// Encontra o numero de comentário mais alto

    // Inserir o comentário
    $sql2 = "INSERT INTO sub_categorias_forum(sub_categoria,id_categoria)VALUES('$nome',$id_categoria)";
    $result2 = mysqli_query($conn, $sql2);

    if ($result2) {
        echo "<script>alert('Registado com sucesso!');top.location.href='sub_categorias.php';</script>";


// Fechar conexão
    mysqli_close($conn);
}

?>
