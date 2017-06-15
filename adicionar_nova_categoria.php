<?php

include('conexao.php');
// Obter valores enviados do formulário
$nome=$_POST['nome'];
// Cria uma variável que terá os dados do erro
// Encontra o numero de comentário mais alto

    // Inserir o comentário
    $sql2 = "INSERT INTO categorias_forum(categoria)VALUES('$nome')";
    $result2 = mysqli_query($conn, $sql2);

    if ($result2) {
        echo "<script>alert('Registado com sucesso!');top.location.href='index_forum.php';</script>";


// Fechar conexão
    mysqli_close($conn);
}

?>
