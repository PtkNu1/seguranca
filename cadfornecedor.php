<?php
include "conexao.php";
/*variável php tem que começar com $ recebe a variavel do formulário*/
$razaosocial = $_POST['razaosocial'];
$email = $_POST['email'];
$senha = $_POST['senha'];
// criptografia hash
$scodif = base64_encode($senha);


$sql = "insert into fornecedor values (null, '".$razaosocial."', '".$email."', '".$scodif."')";

if(mysqli_query($conexao, $sql)) {
        echo "Gravado com sucesso!";
    }else{
        echo "Erro ao gravar!";
}
mysqli_close($conexao);
?>
<br>
