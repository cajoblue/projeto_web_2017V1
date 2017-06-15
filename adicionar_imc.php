<?php
include('conexao.php');

$peso=$_POST['peso'];
$altura=$_POST['altura'];

$imc = $peso / ($altura * $altura);
$massa = intval($imc);

if ($massa <= 17) {
    $mensagem = "Muito abaixo do peso";
}
elseif(($massa > 17) and ($massa <=18.49)) {
    $mensagem = "Abaixo do peso";
}
elseif(($massa > 18.49) and ($massa <=24.99)) {
    $mensagem = "Peso Ideal";
}
elseif(($massa > 24.99) and ($massa <=29.99)) {
    $mensagem = "Acima do Peso";
}
elseif(($massa > 29.99) and ($massa <=34.99)) {
    $mensagem = "Obesidade I";
}
elseif(($massa > 34.99) and ($massa <=39.99)) {
    $mensagem = "Obesidade II (severa)";
}
else {
    $mensagem = "Obesidade III (mórbida)";
}

$sql="INSERT INTO tb_dados (peso, altura, imc, mensagem)VALUES('$peso', '$altura', '$massa','$mensagem')";
$result=mysqli_query($conn,$sql);

if($result){
    echo "<script>alert('O seu imc foi calculado com sucesso!');top.location.href='imc.php';</script>";
}
else {
    echo "<script>alert(' Utilize na altura o ponto para separar os metros dos centimetros como no exemplo!');top.location.href='calcular_imc.php';</script>";


}
mysqli_close($conn);
?>