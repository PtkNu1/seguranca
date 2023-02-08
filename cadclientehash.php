<?php
include "conexao.php";
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$celular = $_POST['celular'];
$endereco = $_POST['endereco'];
// criptografia hash
$scodif = base64_encode($senha);

$sql = "insert into cliente values(null,'".$nome."','".$email."','".$scodif."','".$celular."','".$endereco."')";


if(mysqli_query($conexao, $sql)) {
    echo "Gravado com sucesso!";
}else{
    echo "Erro ao gravar!";
}
mysqli_close($conexao);
?>
<br>
